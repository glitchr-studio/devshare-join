// The invitation of an address https://join.glitchr.dev/#<invitation>: read on the device,
// never sent anywhere. Without one, the page presents DevShare.
// The code of an invitation, from what follows the # of this address:
// one byte saying what follows, 32 bytes naming the host, then the code as
// five bytes, eight characters of five bits each.
function code(carried) {
  const alphabet = '23456789ABCDEFGHJKLMNPQRSTUVWXYZ';
  let bytes;
  try {
    const text = atob(carried.replace(/-/g, '+').replace(/_/g, '/'));
    bytes = Uint8Array.from(text, (character) => character.charCodeAt(0));
  } catch (error) {
    return null;
  }
  const understood = (bytes[0] & 0x7f) === 1 && (bytes[0] & 0x80) !== 0;
  if (!understood || bytes.length < 38) return null;
  let bits = 0n;
  for (const byte of bytes.slice(33, 38)) bits = (bits << 8n) | BigInt(byte);
  let characters = '';
  for (let index = 7; index >= 0; index -= 1) {
    characters += alphabet[Number((bits >> BigInt(5 * index)) & 31n)];
  }
  return `${characters.slice(0, 4)}-${characters.slice(4)}`;
}

const found = code(location.hash.slice(1));
if (found) {
  const command = `devshare join ${location.href}`;
  document.getElementById('code').textContent = found;
  document.getElementById('command').textContent = command;
  document.getElementById('copy').addEventListener('click', async (event) => {
    await navigator.clipboard.writeText(command);
    event.currentTarget.textContent = 'Copied';
  });
  // The DevShare apps, on a Mac, an iPhone or an iPad, take the invitation
  // from a link of their own scheme and ask before joining. (Once the app's
  // universal links are on, iOS opens it straight from this address: this
  // page is then not even shown.) Android has no app yet.
  const android = /Android/.test(navigator.userAgent);
  const ios = /iPhone|iPad|iPod/.test(navigator.userAgent)
    || (navigator.maxTouchPoints > 1 && /Macintosh/.test(navigator.userAgent));
  if (android) {
    document.getElementById('android').hidden = false;
  } else {
    const app = `devshare://open?link=${encodeURIComponent(location.href)}`;
    document.getElementById('app').href = app;
    document.getElementById('app-line').hidden = false;
    // On an iPhone or an iPad, the app is opened at once, as a scanned QR
    // code should: Safari asks first. Where it did not open (not installed,
    // or the question left unanswered), the page stays, and this device is
    // not asked again for an hour; the button always opens it.
    const NO_APP = 'devshare-no-app-until';
    let quiet = false;
    try { quiet = Number(localStorage.getItem(NO_APP) || 0) > Date.now(); } catch (error) { /* asked */ }
    document.getElementById('app').addEventListener('click', () => {
      try { localStorage.removeItem(NO_APP); } catch (error) { /* nothing kept */ }
    });
    if (ios && !quiet) {
      setTimeout(() => {
        const left = () => { clearTimeout(missing); };
        document.addEventListener('visibilitychange', left, { once: true });
        window.addEventListener('pagehide', left, { once: true });
        const missing = setTimeout(() => {
          try { localStorage.setItem(NO_APP, String(Date.now() + 3600 * 1000)); } catch (error) { /* asked again */ }
        }, 10000);
        location.href = app;
      }, 300);
    }
  }
  // On an iPhone or an iPad the app is what joins: the command for a
  // computer goes below it, smaller.
  if (ios) document.getElementById('invited').classList.add('ios');
  // An invitation: the page is the invitation alone, kept out of search engines.
  document.getElementById('about').hidden = true;
  document.getElementById('invited').hidden = false;
  document.title = 'DevShare invitation';
  const robots = document.createElement('meta');
  robots.name = 'robots';
  robots.content = 'noindex';
  document.head.append(robots);
}
// Another # on this page (How it works, from an invitation): read the address again.
window.addEventListener('hashchange', () => location.reload());
