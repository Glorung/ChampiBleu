<?php

require_once('src/model/class/Connect.class.php');

function setInternSession($post)
{
      $command = "INSERT INTO STAGIAIRE_SESSION(ID_STAGIAIRE, ID_SESSION)".
	" VALUES ('" . $post['IdStagiaire'] . "', '" .
	$post['IdSession']."')";
    echo $command;
    $elanDb = new SQL_Connect();
    // Create a new SQL_Connect object
    $elanDb->connect("Arnaud_ChampiBleu");
    // Connect to the Arnaud_ChampiBleu database
    $elanDb->set($command);
    // Execute the SQL command and return an array coucou
}