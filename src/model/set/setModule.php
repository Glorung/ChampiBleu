<?php

require_once('src/model/class/Connect.class.php');

function setModule($post)
{
  $command = "INSERT INTO  MODULE (" .
    "NOM_MODULE," .
    " ID_CATEGORIE)" .
    " VALUES ('" .
    $post['NomModule'] . "', '" .
    $post['Idcategorie'] . "')";
  echo $command;
  $elanDb = new SQL_Connect();
  // Create a new SQL_Connect object
  $elanDb->connect("Arnaud_ChampiBleu");
  // Connect to the Arnaud_ChampiBleu database
  $elanDb->set($command);
  // Execute the SQL command and return an array
}