<main id="invited" class="invitation" hidden>
  <h1>You are invited to a DevShare session</h1>
  <p class="code" id="code"></p>
  <p id="app-line" hidden><a id="app" class="button primary">Open in the DevShare app</a></p>
  <div class="computer">
    <p>On a computer with DevShare, join with this page's address:</p>
    <p><code id="command"></code></p>
    <p><button id="copy" type="button" class="button">Copy the command</button></p>
  </div>
  <p class="muted" id="android" hidden>DevShare for Android is not available yet: join from an iPhone, an iPad or a computer.</p>
  <p class="muted small">The invitation stays on this device: what follows the # of this address is never sent anywhere.</p>
</main>

<main id="about">
  <section class="hero">
    <div class="hero-text">
      <div class="identity">
        <img class="hero-logo" src="/images/logo.png" alt="" width="336" height="336">
        <div>
          <h1>DevShare</h1>
          <p class="tagline">Your localhost, on any device. Anywhere.</p>
        </div>
      </div>
    </div>
    <figure class="devices" aria-label="DevShare on a Mac, an iPad, a Duo and an iPhone">
      <div class="device mac"><div class="screen"><img src="/images/mac-session.jpg" alt="DevShare for Mac sharing a session: its QR code, a message to testers, two guests and their timeline" width="1800" height="1125"></div><div class="base"></div></div>
      <div class="device ipad"><div class="screen"><img src="/images/ipad-demo.jpg" alt="The DevShare demo joined on an iPad: a website, a React Native app and a service" width="764" height="1100"></div></div>
      <div class="device duo"><div class="screen"><img src="/images/duo-site.jpg" alt="The demo's site open on a Duo, unfolded, beside the session" width="1200" height="844"></div></div>
      <div class="device iphone"><div class="screen"><img src="/images/iphone-demo.jpg" alt="The DevShare demo on an iPhone: a website, a React Native app and a service" width="460" height="1000"></div></div>
    </figure>
    <p class="platforms"><span>Mac</span><span>iPad</span><span>iPhone</span><span>Duo</span></p>
  </section>

  <section class="kinds sticky-easein">
    <h2>Websites, React Native apps, services.</h2>
    <p class="lead section-lead">Share them from your Mac with clients and testers, under their own names: <code class="host">shop.test</code>, <code class="host">portfolio.local</code>. No&nbsp;port, no&nbsp;IP.</p>
    <div class="kind-list">
      <div class="kind">
        <svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c2.5 2.6 3.8 5.6 3.8 9s-1.3 6.4-3.8 9c-2.5-2.6-3.8-5.6-3.8-9S9.5 5.6 12 3z"/></svg>
        <h3>Websites</h3>
        <p>Open in DevShare's browser under their own names, in HTTPS, with every reload fresh from your Mac.</p>
        <code>https://devshare.local</code>
      </div>
      <div class="kind">
        <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="6.5" y="2.5" width="11" height="19" rx="2.5"/><path d="M10.5 18.5h3"/></svg>
        <h3>React Native apps</h3>
        <p>Run on your guest's iPhone or iPad, live from your Metro server. Nothing to build or install.</p>
        <code>exp://devshare-native.local:8081</code>
      </div>
      <div class="kind">
        <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="2.5" y="4" width="19" height="16" rx="2.5"/><path d="M6.5 9l3 3-3 3M11.5 15h5"/></svg>
        <h3>Services</h3>
        <p>APIs and backends other projects call, reachable by name, with a terminal to ping them.</p>
        <code>devshare-service.local</code>
      </div>
    </div>
  </section>

  <section id="how" class="how sticky-easein">
    <h2>Three steps. Seconds, not a deployment.</h2>
    <ol class="steps">
      <li>
        <h3>Pick your projects</h3>
        <p>DevShare finds them and their names: Docker Compose, Symfony, Vite, React Native.</p>
        <pre><span class="dim">~/Sites/</span>shop
<span class="dim">→</span> shop.test
<span class="dim">→</span> api.shop.test</pre>
      </li>
      <li>
        <h3>Share</h3>
        <p>One click gives a QR code, a link and a code. The session ends on its own.</p>
        <pre><span class="dim">link</span>  join.glitchr.dev/#gVOx…
<span class="dim">code</span>  7GX2-KLM9
<span class="dim">ends</span>  in 1:00:00</pre>
      </li>
      <li>
        <h3>They open it</h3>
        <p>Same names, same HTTPS, on their iPhone, iPad or Mac, wherever they are.</p>
        <pre>https://shop.test     <span class="ok">200</span>
https://api.shop.test <span class="ok">200</span>
<span class="dim">iPhone · iPad · Mac</span></pre>
      </li>
    </ol>
  </section>

  <section class="guest sticky-easein" id="guest">
    <figure class="phone">
      <div class="shot">
        <img src="/images/iphone-site.jpg" alt="A site shared from a Mac, open on an iPhone under its own name, with DevShare's toolbar at the bottom" width="552" height="1200" loading="lazy">
        <span class="spot" aria-hidden="true"></span>
        <button type="button" class="hot" data-feature="time" style="--x:34.4%;--w:23.5%" aria-label="Session time"></button>
        <button type="button" class="hot" data-feature="comment" style="--x:55.6%;--w:10.9%" aria-label="Comment"></button>
        <button type="button" class="hot" data-feature="record" style="--x:71.2%;--w:10.9%" aria-label="Record"></button>
        <button type="button" class="hot" data-feature="reload" style="--x:87%;--w:10.9%" aria-label="Reload"></button>
      </div>
    </figure>
    <div class="guest-text">
      <h2>Feedback, right where it happens.</h2>
      <div class="feature-text" aria-live="polite">
        <div data-feature="comment"><h3><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 5.5h16v10H9l-5 4z"/><path d="M8 9.5h8M8 12.5h5"/></svg>Comments, with the page attached.</h3><p>A guest writes what they see, with a picture of the page, or reports a bug with the page's console lines. It lands in your session's timeline, next to the page it is about.</p></div>
        <div data-feature="record"><h3><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="8.5"/><circle cx="12" cy="12" r="3.5" class="fill"/></svg>Recordings of what they do.</h3><p>One tap films the page as the guest uses it. The video plays on your Mac, with the page's address and the moment it was made.</p></div>
        <div data-feature="time"><h3><svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="13" r="7.5"/><path d="M12 9v4l2.5 2M9.5 3h5"/></svg>The session's time, always in sight.</h3><p>Guests see how long is left. The session ends on its own; from your Mac you hold the countdown or end it at once.</p></div>
        <div data-feature="reload"><h3><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M19 12a7 7 0 1 1-2.05-4.95"/><path d="M19 4v4h-4"/></svg>Every reload asks your Mac.</h3><p>No cache in between: a change you save is the change they see, on the next reload.</p></div>
      </div>
      <p class="dots" aria-label="Features">
        <button type="button" data-feature="comment" aria-label="Comments"></button><button type="button" data-feature="record" aria-label="Recordings"></button><button type="button" data-feature="time" aria-label="Session time"></button><button type="button" data-feature="reload" aria-label="Fresh pages"></button>
      </p>
    </div>
  </section>

  <section class="features sticky-easein">
    <h2>Built for real projects.</h2>
    <dl>
      <div><svg class="feature-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="9" cy="8.5" r="3"/><path d="M3.5 19c.6-3 2.8-4.5 5.5-4.5s4.9 1.5 5.5 4.5"/><circle cx="17" cy="9.5" r="2.3"/><path d="M16 14.6c2.3 0 4 1.3 4.5 4.4"/></svg><dt>Live session view</dt><dd>Who is connected, from where, on which page.</dd></div>
      <div><svg class="feature-icon" viewBox="0 0 24 24" aria-hidden="true"><rect x="5" y="10.5" width="14" height="9.5" rx="2"/><path d="M8.5 10.5V8a3.5 3.5 0 0 1 7 0v2.5"/><path d="M10 15l1.5 1.5 3-3"/></svg><dt>Trusted HTTPS</dt><dd>Your Mac's own certificate authority. No browser warnings.</dd></div>
      <div><svg class="feature-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M9 3v5M15 3v5"/><path d="M6.5 8h11v4a5.5 5.5 0 0 1-11 0z"/><path d="M12 17.5V21"/></svg><dt>Any port</dt><dd>APIs, services and databases, not only websites.</dd></div>
      <div><svg class="feature-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="8.5"/><path d="M3.5 12h17M12 3.5c2.3 2.4 3.4 5.2 3.4 8.5s-1.1 6.1-3.4 8.5c-2.3-2.4-3.4-5.2-3.4-8.5S9.7 5.9 12 3.5z"/></svg><dt>Any network</dt><dd>Peer-to-peer when possible, relayed when needed. <a href="https://github.com/glitchr-studio/devshare-relay">Bring your own relay.</a></dd></div>
      <div><svg class="feature-icon" viewBox="0 0 24 24" aria-hidden="true"><rect x="6.5" y="2.5" width="11" height="19" rx="2.5"/><path d="M10.5 18.5h3"/></svg><dt>Native apps</dt><dd>React Native apps run on the guest's iPhone from your Metro server.</dd></div>
      <div><svg class="feature-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="1.8" class="fill"/><path d="M8.2 8.2a5.4 5.4 0 0 0 0 7.6M15.8 8.2a5.4 5.4 0 0 1 0 7.6M5.4 5.4a9.3 9.3 0 0 0 0 13.2M18.6 5.4a9.3 9.3 0 0 1 0 13.2"/></svg><dt>Nearby</dt><dd>Sessions on your network show up on the Macs around you.</dd></div>
    </dl>
  </section>

  <section class="demo sticky-easein">
    <figure>
      <img src="/images/mac-project.jpg" alt="A project in DevShare for Mac: live preview, addresses and services" width="1600" height="1000" loading="lazy">
    </figure>
    <div>
      <h2>Start with the DevShare demo.</h2>
      <p class="lead">DevShare for Mac ships with a ready-made example: a website, a React Native app and a service. Share it in one click, scan the code with your iPhone, and see all three at work.</p>
      <p>Then switch to your own projects. <a href="https://github.com/glitchr-studio/devshare-join/tree/main/demo">Demo source, MIT</a></p>
    </div>
  </section>

  <section class="private sticky-easein">
    <h2>No account. No tracking.</h2>
    <p class="lead">Sessions go straight from your Mac to your guests. Nothing passes through us, nothing is kept. <a href="/privacy">Privacy policy</a></p>
  </section>

  <section class="closing sticky-easein">
    <h2>Show your work, not a staging server.</h2>
    <p class="soon">Coming soon for Mac, iPhone and iPad.</p>
    <p><a class="button primary" href="mailto:support@glitchr.io?subject=DevShare%20launch">Get notified at launch</a></p>
  </section>
</main>
<script src="/js/invitation.js"></script>
<script src="/js/guest.js"></script>
