#!/bin/bash
docker build -t web_curly .
docker run --rm -p1337:80 --name=curly -it web_curly
