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
      <p class="eyebrow">For developers on a Mac</p>
      <h1>Show what runs on your Mac to anyone, anywhere, for as long as you choose.</h1>
      <p class="lead">DevShare shares the websites, APIs and React Native apps you are building with a client on their phone, a colleague at home or a tester abroad, under their real names, in HTTPS, through an encrypted peer-to-peer link. Nothing is deployed and no port is opened.</p>
      <p class="availability">DevShare for Mac shares. DevShare for iPhone and iPad, or DevShare on another Mac, joins. Both are in beta and coming to the App Store.</p>
    </div>
    <figure class="hero-shot">
      <img src="/images/mac-session.jpg" alt="DevShare for Mac sharing three projects: the invitation's QR code and code, two guests connected and what they open" width="1600" height="1000">
    </figure>
  </section>

  <section id="how" class="how">
    <h2>How it works</h2>
    <ol class="steps">
      <li>
        <h3>Your projects, found</h3>
        <p>Point DevShare at the folder you work in. It finds your projects (Docker Compose, Symfony, Vite, React Native and others), their names, their ports and how to start them.</p>
        <pre><span class="dim">~/Sites/</span>shop
  shop.test:8443
  shop.test:5173</pre>
      </li>
      <li>
        <h3>Share in one click</h3>
        <p>Choose the projects, then Share. You get a QR code, a link and a code. The session ends on its own when its time is up.</p>
        <pre>join.glitchr.dev/#gVOxtm5P…
<span class="dim">code</span>  7GX2-KLM9</pre>
      </li>
      <li>
        <h3>They open it as you do</h3>
        <p>Guests scan or open the invitation and see your sites under their own names, as if the project ran on their device. When the session ends, the names and the routes are gone.</p>
        <pre>https://shop.test:8443 <span class="ok">200</span></pre>
      </li>
    </ol>
  </section>

  <section class="guest">
    <figure class="phone">
      <img src="/images/iphone-site.jpg" alt="A site shared from a Mac, opened in DevShare for iPhone under its own name, devshare.local" width="552" height="1200" loading="lazy">
    </figure>
    <div>
      <h2>On their iPhone, iPad or Mac</h2>
      <p>Pages open in DevShare's own browser, under the names you gave them. Every reload asks your Mac again, without a cache, so a change on your machine shows at once.</p>
      <p>Guests can leave a comment on a page with a picture of it, report a problem with the page's console, or film what they see: it reaches your Mac, beside the page it is about.</p>
      <p>A React Native app opens inside DevShare from your Metro server. An API or a service answers in a terminal, with ping, GET and HEAD at hand.</p>
    </div>
  </section>

  <section class="features">
    <h2>What else it does</h2>
    <dl>
      <div><dt>See who is there</dt><dd>Each guest's device, how they are connected and the pages they open, live. Hold the countdown, invite more people, or disconnect someone.</dd></div>
      <div><dt>HTTPS without warnings</dt><dd>Your Mac gets its own certificate authority, trusted once with your consent, and certifies your projects for their development names.</dd></div>
      <div><dt>Any service, not only websites</dt><dd>Share a port, a development server, an API or a database already running, under a name of your choice.</dd></div>
      <div><dt>Any network</dt><dd>Directly when a path exists, through a relay when a network demands it: the public relays of number 0, or <a href="https://github.com/glitchr-studio/devshare-relay">one you run yourself</a>.</dd></div>
      <div><dt>Nearby sessions</dt><dd>A session made visible on your network shows on the Macs around you, as a card with its QR code: one click joins.</dd></div>
      <div><dt>Simple or developer</dt><dd>A guest who only opens what you share sees cards and nothing else. Developers get the projects, their services and their addresses.</dd></div>
    </dl>
  </section>

  <section class="demo">
    <figure>
      <img src="/images/mac-project.jpg" alt="A project's page in DevShare for Mac: its live preview, addresses and services" width="1600" height="1000" loading="lazy">
    </figure>
    <div>
      <h2>Try it with the demo</h2>
      <p>DevShare for Mac comes with three demo projects (a site, a native app and a service) so that you can share something in one click before sharing your own. Their source is open, under the MIT licence: <a href="https://github.com/glitchr-studio/devshare-join/tree/main/demo">devshare-join/demo</a>.</p>
    </div>
  </section>

  <section class="private">
    <h2>Private by design</h2>
    <p>No account, no analytics, no advertising. A session goes from your Mac to your guests; nothing of it is sent to us. What the apps handle, and where it goes, is in <a href="/privacy">the privacy policy</a>.</p>
  </section>
</main>
<script src="/js/invitation.js"></script>
