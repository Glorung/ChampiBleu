<?php

require_once('src/model/class/Connect.class.php');

// Get modules and them id
function getModules()
{
  $command = "SELECT ID_MODULE," .
    " NOM_MODULE" .
    " FROM MODULE";
  $elanDb = new SQL_Connect();
  $elanDb->connect("Arnaud_ChampiBleu");
  $answer = $elanDb->ask($command);
  return ($answer);
}

?>
