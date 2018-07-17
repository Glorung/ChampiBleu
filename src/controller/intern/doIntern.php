<?php

require_once('src/model/get/getStagiaire.php');
require_once('src/view/viewStagiaire.php');
require_once('src/view/view.class.php');

function doInternByID($id)
{
    $data = getStagiaireById($id);
    // Récupère les informations du stagiaire sous forme de tableau associatif
    viewStagiaire(new view(), $data);
    // Affiche la page web via la class view (-> src/view/view.class.php)
}

function doInternByName($name)
{
    $data = getStagiaireByName($name);
    // Récupère les informations du stagiaire sous forme de tableau associatif
    viewStagiaire(new view(), $data);
    // Affiche la page web via la class view (-> src/view/view.class.php)
}
