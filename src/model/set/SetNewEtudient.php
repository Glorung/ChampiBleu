<?php

require_once('src/model/Connect.class.php');

// Get data from a specific intern, by his id
function setSession($id, $post)
{
    $command = "INSERT INTO fiche_stagiaire (NOM_STAGIAIRE, PRENOM_STAGIAIRE, SEXE, VILLE, DATE_NAISSANCE, EMAIL, TELEPHONE)".        
                "VALUES ('" . $post['NomStagiaire'] . "','" . $post['PrenomStagiaire'] . "','" . $post['SexeStagiaire']  . "','" . $post['VilleStagiaire'] . "','" . $post['DateNaissanceStagiaire']."','" . $post['EmailStagiaire'] . "','" . $post['TelephoneStagiaire'] . ")";
    echo $command;
    $elanDb = new SQL_Connect();
    // Create a new SQL_Connect object which is connecting to the Elan's Database
    $elanDb->connect("Arnaud_ChampiBleu");
    // Connect to the Arnaud_ChampiBleu database
    $elanDb->set($command);
    // Execute the SQL command and return an array
}
?>
