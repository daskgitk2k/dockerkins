#!/bin/bash
sudo docker rm $(sudo docker ps -a -q) -f 2> /dev/null
sudo docker rmi $(sudo docker images -q) -f 2> /dev/null
echo
echo "Contenedores"
echo -----------------------------------------------------------------------
sudo docker ps -a
echo
echo
echo "Imágenes"
echo -----------------------------------------------------------------------
sudo docker images
