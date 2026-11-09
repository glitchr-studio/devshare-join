<main class="text">
<h1>DevShare privacy policy</h1>
<p class="muted">2 November 2026</p>

<p>DevShare lets a developer share the websites and React Native apps they are building on their Mac with guests who open them on an iPhone, an iPad or another computer. This page says what the apps handle, where it goes and for how long. The short version: everything goes from the guest's device to the host's Mac and back; the host sees what their guests open and send to their projects, and their Mac keeps it in its history; nothing of a session is sent to GLITCH ART.</p>

<h2>Who is responsible</h2>
<p><a href="https://www.glitchr.io">GLITCH ART</a>, SARL au capital variable de 1 000 €, 5 rue Vincent Scotto, 67400 Illkirch-Graffenstaden, France, registered in Strasbourg under number 901 821 074 (RCS Strasbourg), VAT FR53901821074, publishes DevShare and is the controller for what GLITCH ART itself handles (see What GLITCH ART receives). What a host's Mac sees and keeps about the guests of their sessions is handled by the host, with DevShare as their tool: the host is the controller of it. Its manager (gérant) is responsible for publication. Questions and requests: <a href="mailto:support@glitchr.io">support@glitchr.io</a>.</p>

<h2>What the guest app handles</h2>
<table>
<tr><th>Data</th><th>Goes to</th><th>Why</th><th>Kept</th></tr>
<tr><td>Your name: the one you set in Settings, else your device's model, such as “iPad Pro 11-inch”, which the host may rename</td><td>The host of the session; the other guests of the session see the name the host gives</td><td>So the host and the guests see who is in</td><td>On the host's Mac: in the history of their sessions, and the name the host gave, for the next sessions</td></tr>
<tr><td>The addresses of the pages you open, on the session's own sites only</td><td>The host of the session</td><td>So the host sees which pages of their projects you look at</td><td>In the history of the host's sessions, on their Mac</td></tr>
<tr><td>What you send to the shared projects: requests that change something on a site (such as “POST /cart”), the commands and lines you send to a shared service such as a database (passwords and what follows a login hidden), and “connected” for an encrypted or binary service</td><td>The host of the session</td><td>So the host sees what their guests do on their projects</td><td>In the history of the host's sessions, on their Mac</td></tr>
<tr><td>What you choose to send from a page: a comment, with a picture of the page alone (no other app, no keyboard, no notification) that you see first and can leave out; a problem you report, with the page's last console lines and errors, which you can leave out too; a film of the page, a minute at most, started and stopped by you</td><td>The host of the session</td><td>So the host sees what you saw and what you meant</td><td>On the host's Mac, with the session. On your device the picture stays in memory and the film in the app's temporary folder, deleted once sent or discarded</td></tr>
<tr><td>Your path through the session's pages, when the host keeps it: the pages opened, the links and buttons tapped, the forms sent and what the pages ask of their servers, never a field's value, a body, a header or a cookie</td><td>The host of the session</td><td>So the host can follow how their guests go through their projects</td><td>In the history of the host's sessions, on their Mac</td></tr>
<tr><td>How the session's pages run on your device, when the host keeps it: their timings, frame rate, long frames and script errors, with your device's model (such as “iPhone12,5”)</td><td>The host of the session</td><td>So the host sees how their sites perform on real devices</td><td>In the history of the host's sessions, on their Mac</td></tr>
<tr><td>A key made on your device, different for every host</td><td>The host of the session</td><td>So a host recognises a device that comes back (and the name they gave it), and can keep one out</td><td>On your device, in the app's own storage; on the host's Mac, with the name they gave</td></tr>
<tr><td>Your device's network address and encrypted traffic</td><td>A relay, when a direct connection is not possible</td><td>To carry the connection</td><td>Not by DevShare; see Relays</td></tr>
<tr><td>A key derived from a typed invitation code</td><td>The join server set in the app (none by default), only when a code is typed</td><td>To find the host that code belongs to</td><td>Until the invitation expires</td></tr>
</table>

<p>The pages themselves are served by the host's Mac and shown in the app's own browser. They are not stored by the app beyond the session: “Always fresh pages”, on by default, empties the browser's cache before each page. The host's websites may set cookies in that browser; they are discarded when you leave the session.</p>
<p>A React Native app the host shares runs inside the app: its code comes from the host's Mac, through the session, each time you open it, and is not kept. Its cookies and cache last only while it is open. What it does is the host's app's own doing, as a website's is.</p>

<p>“Also in Safari and other apps”, on by default and turned off in Settings, adds a VPN to your device (iOS asks you once) so that the session's addresses open in Safari and your other apps, not only in DevShare. Only the session's addresses go through it, to the host as above; the rest of your traffic is untouched and seen by no one. For HTTPS sites in Safari, the app can make a certificate authority on your device, limited to development names, which you install and trust yourself in Settings; its private key never leaves the device, and removing its profile in Settings undoes it.</p>
<p>The camera is used only to read a QR code, on the device. No picture leaves it.</p>
<p>The hosts you block are kept on your device, by their tag, so that their sessions are refused; Settings unblock them. Having declared once that you are 18 or older, to open the apps hosts share, is kept on your device too.</p>

<h2>What the Mac app handles</h2>
<p>DevShare for Mac reads the projects you add to it on your own Mac, starts and stops them, and shares the addresses you choose. It shows the guests of a session, the pages they open and what they send to the shared projects (passwords hidden).</p>
<p>It keeps, on your Mac only, in its own folder that only your user account can read: your settings; the history of your sessions (their projects, their guests' names, the pages they opened and what they sent, and each invitation's key and code, so that the same QR code can be shared again); the names you gave your guests' devices, by each device's key; and your groups and arrangement of the list. “Clear history”, or deleting one session, removes them.</p>
<p>When you add a folder of a server, DevShare reaches it with your own SSH keys and settings. It copies, from each project there, only the few files that say what it shares (its Compose files, Makefile, devshare.toml and .env files, the lines naming a secret or holding a password left out), into its own folder on your Mac, and starts and stops the projects on that server when you ask. Nothing of it goes anywhere else.</p>
<p>Unless you turn it off in the settings, guests are shown what each shared project is made of: its technologies, the services of its Compose files and its direct dependencies with their versions.</p>

<h2>Relays</h2>
<p>When a guest cannot reach the host directly, the connection goes through a relay. The relay sees the two devices' network addresses and the amount of traffic, not its content, which is encrypted end to end between the guest and the host. By default DevShare uses the public relays run by <a href="https://www.iroh.computer/">number 0</a>; a host or a guest can name a relay of their own instead, including one they run themselves. Relays may be outside the European Union.</p>

<h2>What GLITCH ART receives</h2>
<p>Nothing of a session. DevShare has no account, no analytics and no advertising. The iPhone and iPad app includes open-source components (React Native, Hermes, Expo's modules) to run the apps a host shares; they send nothing to anyone. The invitation page at join.glitchr.dev reads the invitation on your device and sends nothing to a server. GLITCH ART does not see who shares, who joins, or what is shown.</p>
<p>When you report a session, your mail app writes to support@glitchr.io, with the session's project names and its host's tag: GLITCH ART reads it to answer you and to act on the report, and keeps it as mail for as long as that takes.</p>
<p>One exception, on the Mac: unless another join server is set, DevShare for Mac keeps a hosted session's lookup key (derived from its code, not the code itself) and the host's connection address (its device's key and its relay or network addresses) on GLITCH ART's join server, so that a guest can type the code instead of scanning; they are erased when the invitation expires, after 24 hours at most. The server counts requests by network address in memory, to limit abuse, and writes none down. It runs on Cloudflare (Cloudflare, Inc., United States, as processor). GLITCH ART handles it on the basis of its legitimate interest in letting codes be typed; Cloudflare's transfers out of the European Union rely on the EU–US Data Privacy Framework and standard contractual clauses.</p>

<h2 id="rights">Your rights</h2>
<p>Under the General Data Protection Regulation you may ask what is held about you, have it corrected or erased, have its use restricted, object to it, and receive it in a portable form. What a host's Mac keeps is handled by the host to run the session you chose to join: the host is the one to ask about a session's guests, and can delete it from their history. GLITCH ART holds nothing of a session. For anything else, write to <a href="mailto:support@glitchr.io">support@glitchr.io</a>. You may also complain to the CNIL, the French data protection authority.</p>

<h2>Children</h2>
<p>DevShare is a tool for people who develop websites and those they show them to. It is not addressed to children and collects nothing from anyone.</p>

<h2>Changes</h2>
<p>When this page changes, the date at the top changes with it.</p>
</main>
