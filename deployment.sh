#!/bin/bash
sudo docker rm $(sudo docker ps -a -q) -f 2> /dev/null
sudo docker rmi $(sudo docker images -q) -f 2> /dev/null
sudo docker-compose up -d
sleep 40
firefox localhost:8080 localhost:9000 localhost:8081
