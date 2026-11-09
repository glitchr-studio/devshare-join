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
          <ul class="keywords" aria-label="In short">
            <li>React Native</li><li>.test &amp; .local</li><li>Trusted HTTPS</li><li>End-to-end encrypted</li>
          </ul>
        </div>
      </div>
      <div class="hero-side">
        <p class="lead">Share the sites, APIs and apps on your Mac with clients and testers, under their own names: <code class="host">shop.test</code>, <code class="host">portfolio.local</code>. No&nbsp;port, no&nbsp;IP.</p>
        <p class="actions">
          <a class="button primary" href="mailto:support@glitchr.io?subject=DevShare%20launch">Get notified at launch</a>
          <a class="button" href="#how">How it works</a>
        </p>
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

  <section class="kinds">
    <h2>Websites, React Native apps, services.</h2>
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

  <section id="how" class="how">
    <h2>Three steps. Seconds, not a deployment.</h2>
    <ol class="steps">
      <li>
        <h3>Pick your projects</h3>
        <p>DevShare finds them on its own, with their names and ports: Docker Compose, Symfony, Vite, React Native.</p>
        <pre><span class="dim">~/Sites/</span>shop
  shop.test
  api.shop.test</pre>
      </li>
      <li>
        <h3>Share</h3>
        <p>One click gives a QR code, a link and a code. The session ends on its own.</p>
        <pre>join.glitchr.dev/#gVOxtm5P…
<span class="dim">code</span>  7GX2-KLM9</pre>
      </li>
      <li>
        <h3>They open it</h3>
        <p>Same names, no port, same HTTPS, on their iPhone, iPad or Mac, wherever they are.</p>
        <pre>https://shop.test <span class="ok">200</span></pre>
      </li>
    </ol>
  </section>

  <section class="guest">
    <figure class="phone">
      <img src="/images/iphone-site.jpg" alt="A site shared from a Mac, open on an iPhone under its own name" width="552" height="1200" loading="lazy">
    </figure>
    <div>
      <h2>Feedback, right where it happens.</h2>
      <p class="lead">Guests comment on a page, report a bug with its console attached, or record what they see. It lands on your Mac, next to the page.</p>
      <p>Every reload hits your machine: a change you save is the change they see.</p>
    </div>
  </section>

  <section class="features">
    <h2>Built for real projects.</h2>
    <dl>
      <div><dt>Live session view</dt><dd>Who is connected, from where, on which page.</dd></div>
      <div><dt>Trusted HTTPS</dt><dd>Your Mac's own certificate authority. No browser warnings.</dd></div>
      <div><dt>Any port</dt><dd>APIs, services and databases, not only websites.</dd></div>
      <div><dt>Any network</dt><dd>Peer-to-peer when possible, relayed when needed. <a href="https://github.com/glitchr-studio/devshare-relay">Bring your own relay.</a></dd></div>
      <div><dt>Native apps</dt><dd>React Native apps run on the guest's iPhone from your Metro server.</dd></div>
      <div><dt>Nearby</dt><dd>Sessions on your network show up on the Macs around you.</dd></div>
    </dl>
  </section>

  <section class="demo">
    <figure>
      <img src="/images/mac-project.jpg" alt="A project in DevShare for Mac: live preview, addresses and services" width="1600" height="1000" loading="lazy">
    </figure>
    <div>
      <h2>Start with the DevShare demo.</h2>
      <p class="lead">DevShare for Mac ships with a ready-made example: a website, a React Native app and a service. Share it in one click, scan the code with your iPhone, and see all three at work.</p>
      <p>Then switch to your own projects. <a href="https://github.com/glitchr-studio/devshare-join/tree/main/demo">Demo source, MIT</a></p>
    </div>
  </section>

  <section class="private">
    <h2>No account. No tracking.</h2>
    <p class="lead">Sessions go straight from your Mac to your guests. Nothing passes through us, nothing is kept. <a href="/privacy">Privacy policy</a></p>
  </section>

  <section class="closing">
    <h2>Show your work, not a staging server.</h2>
    <p class="soon">Coming soon for Mac, iPhone and iPad.</p>
    <p><a class="button primary" href="mailto:support@glitchr.io?subject=DevShare%20launch">Get notified at launch</a></p>
  </section>
</main>
<script src="/js/invitation.js"></script>
