// The DevShare demo service, on port 47103 of this Mac, which devshare.toml
// shares as devshare-service.local: GET /ping answers {"pong":true} (the demo
// site's Ping button, allowed from any page), and a line "ping" typed in
// DevShare's terminal answers "pong". Node alone, no package to install.
import { createServer } from 'node:net';

createServer((socket) => {
  let held = '';
  socket.on('data', (chunk) => {
    held += chunk.toString('utf8');
    if (/^(GET|HEAD|OPTIONS) /.test(held)) {
      if (!held.includes('\r\n\r\n')) return;
      const [method, target] = held.split(' ');
      const path = target.split('?')[0];
      const body = method === 'OPTIONS' ? '' : path === '/ping' ? '{"pong":true}'
        : "DevShare's demo service: GET /ping, or type ping in a terminal.\n";
      socket.end(`HTTP/1.1 200 OK\r\nContent-Type: ${path === '/ping' ? 'application/json' : 'text/plain; charset=utf-8'}\r\n`
        + `Access-Control-Allow-Origin: *\r\nContent-Length: ${Buffer.byteLength(body)}\r\nConnection: close\r\n\r\n`
        + (method === 'GET' ? body : ''));
      return;
    }
    // Lines, as a terminal sends them.
    let end;
    while ((end = held.indexOf('\n')) >= 0) {
      const said = held.slice(0, end).trim().toLowerCase();
      held = held.slice(end + 1);
      if (said) socket.write(said === 'ping' ? 'pong\n' : `${said}? Type ping.\n`);
    }
  });
  socket.on('error', () => {});
}).listen(47103, '127.0.0.1');
