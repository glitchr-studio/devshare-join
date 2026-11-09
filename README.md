# devshare-join

DevShare's public site, https://join.glitchr.dev, and the DevShare demo projects.

- `site/`: the site. Plain PHP templates exported by [omnibridge/static](https://github.com/glitchr-omnisense/omnibridge-static)
  and published on GitHub Pages by `.github/workflows/site.yml` on every push to `main`. Its home page is also
  where invitations open: `https://join.glitchr.dev/#<invitation>` shows the invitation, read on the device
  and never sent anywhere.

  ```sh
  cd site
  composer install
  vendor/bin/omnibridge-static build site.php --out=dist --strict
  vendor/bin/omnibridge-static check dist
  ```

- `demo/`: a submodule, [glitchr-studio/devshare-demo](https://github.com/glitchr-studio/devshare-demo): the three demo
  projects DevShare for Mac shares in one click (MIT). `git clone --recurse-submodules`, or `git submodule update --init`.
