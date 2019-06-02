#!/bin/bash
clear
while :
do
echo "            ////////////////////////////////////////////////////"
echo "           //////               DockerKins                /////"
echo "          ////////////////////////////////////////////////////"
echo
echo "1. Instalación completa: (Docker + Portainer + Jenkins + Lanzador Firefox)"
echo "2. Instalación Doker"
echo "3. Desplegue de contenedores"
echo "4. Borrar imágenes y contenedores"
echo "5. Salir"
echo -n "Seleccione una opcion [1 - 5] "
read opcion
case $opcion in
    1) echo "Instalación completa: (Docker + Portainer + Jenkins + Lanzador Firefox):";
        /media/$USER/DockerKins/DockerInstall.sh
        /media/$USER/DockerKins/deployment.sh;;
    2) echo "Instalación Doker:";
        /media/$USER/DockerKins/DockerInstall.sh;;
    3) echo "Desplegue de contenedores";
        /media/$USER/DockerKins/deployment.sh;;
    4) echo "Borrar imágenes y contenedores";
        /media/$USER/DockerKins/delete.sh;;
    5) echo "Salir";
    clear
    exit 1;;
    *) echo "$opcion no es una opcion válida.";
        echo "Presiona una tecla para continuar...";
        read foo;;
esac
read
clear
done

