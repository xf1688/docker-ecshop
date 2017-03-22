#!bin/bash
docker build -t ecshop .
docker run --name ecshop -p 80:80 -v /Users/wilf/Documents/lumen/source/:/var/www/html --link mysql:mysql -d ecshop
