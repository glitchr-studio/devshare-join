// The guest's iPhone: first what a session is, then, once the section has come into view, a
// carousel of what a guest does in one (Comments, Recordings, Session time, Fresh pages), each
// circled in red on the phone's toolbar with its words beside it, every 4.5 s while the section
// is in view. A tap on the phone's button or on a dot shows that one at once. The navigation may
// swap the page in again: the previous run's timers are stopped first.
(() => {
  clearInterval(window.devshareGuestTimer);
  clearTimeout(window.devshareGuestStart);
  const section = document.getElementById('guest');
  if (!section) return;
  const spot = section.querySelector('.spot');
  const order = ['comment', 'record', 'time', 'reload'];
  const still = matchMedia('(prefers-reduced-motion: reduce)').matches;
  let current = -1;
  let inView = false;
  let started = false;
  const words = (feature) => {
    section.querySelectorAll('.feature-text > div').forEach((text) => {
      text.classList.toggle('shown', text.dataset.feature === feature);
      text.setAttribute('aria-hidden', String(text.dataset.feature !== feature));
    });
  };
  const show = (index) => {
    current = (index + order.length) % order.length;
    const feature = order[current];
    words(feature);
    section.querySelectorAll('.dots button').forEach((dot) => {
      dot.setAttribute('aria-current', String(dot.dataset.feature === feature));
    });
    const hot = section.querySelector(`.hot[data-feature="${feature}"]`);
    spot.style.setProperty('--x', hot.style.getPropertyValue('--x'));
    spot.style.setProperty('--w', hot.style.getPropertyValue('--w'));
    spot.classList.remove('on');
    void spot.offsetWidth;
    spot.classList.add('on');
  };
  const run = () => {
    clearInterval(window.devshareGuestTimer);
    if (still) return;
    window.devshareGuestTimer = setInterval(() => { if (inView && !document.hidden) show(current + 1); }, 4500);
  };
  const start = (index) => {
    clearTimeout(window.devshareGuestStart);
    started = true;
    show(index);
    run();
  };
  section.querySelectorAll('.hot, .dots button').forEach((node) => {
    node.addEventListener('click', () => start(order.indexOf(node.dataset.feature)));
  });
  new IntersectionObserver((entries) => {
    inView = entries[0].isIntersecting;
    // Seen for the first time: what a session is stays a moment, then the carousel begins.
    if (inView && !started && !still) {
      clearTimeout(window.devshareGuestStart);
      window.devshareGuestStart = setTimeout(() => { if (inView && !started) start(0); }, 2200);
    }
  }, { threshold: 0.5 }).observe(section);
  words('session');
})();
