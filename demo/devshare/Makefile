# Started and stopped by DevShare (its switch), or by hand: make up, make down.
up:
	@node serve.mjs > .server.log 2>&1 & echo $$! > .server.pid

down:
	@kill $$(cat .server.pid 2>/dev/null) 2>/dev/null; rm -f .server.pid

.PHONY: up down
