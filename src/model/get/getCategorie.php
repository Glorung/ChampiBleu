<?php

require_once('src/model/class/Connect.class.php');

// Get categories and them id
function getCategories()
{
  $command = "SELECT ID_CATEGORIE," .
    " NOM_CATEGORIE" .
    " FROM CATEGORIE";
  $elanDb = new SQL_Connect();
  $elanDb->connect("Arnaud_ChampiBleu");
  $answer = $elanDb->ask($command);
  return ($answer);
}

?>
