// flowjs on DevShare's site: the pages load without a page load (Transparent swaps #page),
// and the home page's sections fade in as they come into the screen (Sticky's .sticky-easein).
// Sticky's other effects (the hiding header, magnets, swipes, autoscroll, the address following
// the reading) are left off.
Transparent.ready({ identifier: '#page', prefetch: true });
Sticky.ready({ scrollhide: false, scrollsnap: false, swipe: false, autoscroll: false, replacehash: false, easein: '-60px' });
