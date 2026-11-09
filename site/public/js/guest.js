// The guest's iPhone as a carousel: its features follow each other on their own (Comments,
// Recordings, Session time, Fresh pages), the one shown circled in red on the phone's toolbar,
// its words beside it. A tap on the phone's button or on a dot shows that one. The page may be
// swapped in again by the navigation: the previous run's timer is stopped first.
(() => {
  clearInterval(window.devshareGuestTimer);
  const section = document.getElementById('guest');
  if (!section) return;
  const spot = section.querySelector('.spot');
  const order = ['comment', 'record', 'time', 'reload'];
  const still = matchMedia('(prefers-reduced-motion: reduce)').matches;
  let current = 0;
  let inView = false;
  const show = (index) => {
    current = (index + order.length) % order.length;
    const feature = order[current];
    section.querySelectorAll('.feature-text > div').forEach((text) => {
      text.classList.toggle('shown', text.dataset.feature === feature);
      text.setAttribute('aria-hidden', String(text.dataset.feature !== feature));
    });
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
  const restart = () => {
    clearInterval(window.devshareGuestTimer);
    if (still) return;
    window.devshareGuestTimer = setInterval(() => { if (inView && !document.hidden) show(current + 1); }, 4500);
  };
  section.querySelectorAll('.hot, .dots button').forEach((node) => {
    node.addEventListener('click', () => { show(order.indexOf(node.dataset.feature)); restart(); });
  });
  new IntersectionObserver((entries) => { inView = entries[0].isIntersecting; }, { threshold: 0.4 }).observe(section);
  show(0);
  restart();
})();
