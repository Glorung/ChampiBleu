<?php

require_once('src/model/get/getIntern.php');
require_once('src/view/intern/viewIntern.php');

function doInternByID($id)
{
    $data = getInternById($id);
    // Récupère les informations du stagiaire sous forme de tableau associatif
    viewIntern(new view(), $data);
    // Affiche la page web via la class view (-> src/view/view.class.php)
}

function doInternByName($name)
{
    $data = getInternByName($name);
    // Récupère les informations du stagiaire sous forme de tableau associatif
    viewIntern(new view(), $data);
    // Affiche la page web via la class view (-> src/view/view.class.php)
}
