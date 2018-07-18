<?php

require_once('src/model/class/Connect.class.php');

function setSessionModule($post)
{
  $command = "INSERT INTO SESSION_MODULE(" .
    "ID_MODULE," .
    " ID_SESSION," .
    " NB_JOURS)" .
    " VALUES ('" .
    $post['IdModule'] . "', '" .
    $post['IdSession'] . "', '" .
    $post['nbJour'] . "')";
    echo $command;
    $elanDb = new SQL_Connect();
    // Create a new SQL_Connect object
    $elanDb->connect("Arnaud_ChampiBleu");
    // Connect to the Arnaud_ChampiBleu database
    $elanDb->set($command);
}

