# DevShare demo

Three small projects to try DevShare with, from a Mac to an iPhone or an iPad,
in a minute. DevShare for Mac installs them for you; this is their source.

| Project | Address in a session | What it is |
|---|---|---|
| [`devshare`](devshare) | `http://devshare.local` | A page saying everything works, with a **Ping** button that asks the service |
| [`devshare-native`](devshare-native) | `exp://devshare-native.local:8081` | A React Native (Expo) app, which a guest's iPhone or iPad runs from its tile |
| [`devshare-service`](devshare-service) | `devshare-service.local` | A ping/pong service: `ping` typed in DevShare's terminal answers `pong` |

Each folder is a project as DevShare finds them: a `devshare.toml` saying what
it shares, and how it starts.

## Try it

1. Put the three folders in a folder DevShare watches, such as `~/Sites`.
2. In DevShare for Mac, start them with their switches (or `make up` in
   `devshare` and `devshare-service`, `npx expo start` in `devshare-native`).
3. Share the **DevShare demo**, and join from DevShare on an iPhone or an iPad.

`devshare` and `devshare-service` need [Node.js](https://nodejs.org) and
nothing else; `devshare-native` needs its packages (`npm install`) and runs on
the Expo SDK of DevShare for iPhone (58).

## Licence

The demo is MIT-licensed (see [LICENSE](LICENSE)): copy it, change it, start
your own projects from it. DevShare itself is not.
