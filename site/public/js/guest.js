// The guest's iPhone: a feature picked on the right (or its button on the phone) is circled
// in red on the phone's toolbar, and its words replace the others.
(() => {
  const section = document.getElementById('guest');
  if (!section) return;
  const spot = section.querySelector('.spot');
  const show = (feature) => {
    section.querySelectorAll('[role="tab"]').forEach((tab) => {
      tab.setAttribute('aria-selected', String(tab.dataset.feature === feature));
    });
    section.querySelectorAll('.feature-text > div').forEach((text) => {
      text.hidden = text.dataset.feature !== feature;
    });
    const hot = section.querySelector(`.hot[data-feature="${feature}"]`);
    spot.style.setProperty('--x', hot.style.getPropertyValue('--x'));
    spot.style.setProperty('--w', hot.style.getPropertyValue('--w'));
    // Drawn again, so that each pick shows the circle anew.
    spot.classList.remove('on');
    void spot.offsetWidth;
    spot.classList.add('on');
  };
  section.querySelectorAll('[data-feature]').forEach((node) => {
    if (node.tagName === 'BUTTON') node.addEventListener('click', () => show(node.dataset.feature));
  });
  show('comment');
})();
