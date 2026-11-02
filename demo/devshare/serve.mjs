// The DevShare demo site: this folder's page and logo, on port 47101 of this
// Mac, which devshare.toml shares as http://devshare.local. Node alone, no
// package to install.
import { createServer } from 'node:http';
import { readFile } from 'node:fs/promises';
import { homedir } from 'node:os';

const files = { '/': ['index.html', 'text/html; charset=utf-8'], '/index.html': ['index.html', 'text/html; charset=utf-8'],
  '/logo.png': ['logo.png', 'image/png'], '/favicon.ico': ['logo.png', 'image/png'] };

createServer(async (request, response) => {
  const path = new URL(request.url, 'http://localhost').pathname;
  // The folders projects are found in, as the page lists them.
  if (path === '/where.json') {
    response.writeHead(200, { 'Content-Type': 'application/json' });
    return response.end(JSON.stringify({ folders: [`${homedir()}/Sites`.replace(homedir(), '~')] }));
  }
  const file = files[path];
  if (!file) {
    response.writeHead(404, { 'Content-Type': 'text/plain' });
    return response.end('not found');
  }
  response.writeHead(200, { 'Content-Type': file[1], 'Cache-Control': 'no-cache' });
  response.end(await readFile(new URL(file[0], import.meta.url)));
}).listen(47101, '127.0.0.1');
