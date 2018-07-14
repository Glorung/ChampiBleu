#!/bin/sh

sudo chmod  -R +rwx *
sudo rm -rf /srv/http/Elan/*
sudo cp -r /home/glorung/Project/Elan/ChampiBleu/* /srv/http/

