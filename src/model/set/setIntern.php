<?php

require_once('src/model/class/Connect.class.php');

function setIntern($post)
{
    $command = "INSERT INTO FICHE_STAGIAIRE(" .
      "NOM_STAGIAIRE," .
      " PRENOM_STAGIAIRE," .
      " SEXE," .
      " VILLE," .
      " DATE_NAISSANCE," .
      " EMAIL, TELEPHONE)" .
      " VALUES ('" .
      $post['NomStagiaire'] . "', '" .
      $post['PrenomStagiaire'] . "', '" .
      $post['SexeStagiaire']  . "', '" .
      $post['VilleStagiaire'] . "', '" .
      $post['DateNaissanceStagiaire']. "', '" .
      $post['EmailStagiaire'] . "', '" .
      $post['TelephoneStagiaire'] . "')";
    echo $command;
    $elanDb = new SQL_Connect();
    // Create a new SQL_Connect object
    $elanDb->connect("Arnaud_ChampiBleu");
    // Connect to the Arnaud_ChampiBleu database
    $elanDb->set($command);
    // Execute the SQL command and return an array
}
?>
