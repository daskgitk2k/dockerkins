#!/bin/bash

sudo apt update
sudo apt install -y \
   apt-transport-https \
   ca-certificates \
   curl \
   software-properties-common
   
# Agregue la llave GPG oficial de Docker:
sudo curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo apt-key add -

#Comprobar el fingerprint
sudo apt-key fingerprint 0EBFCD88

#Configura el repositorio estable
sudo add-apt-repository \
   "deb [arch=amd64] https://download.docker.com/linux/ubuntu \
   $(lsb_release -cs) \
   stable"

#Actualiza la lista de paquetes disponibles y sus versiones otra vez
sudo apt update

#Instala el paquete de Docker
sudo apt-get install -y docker-ce && sudo apt-get install -y docker-compose

