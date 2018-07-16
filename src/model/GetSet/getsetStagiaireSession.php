<?php

require_once('src/model/Connect.class.php');

// Get advanced info on a specific session
function getListeSessions() 
{
    $command =  "SELECT ID_SESSION, NOM_SESSION".
                " FROM SESSION";
    $elanDb = new SQL_Connect();
    // Create a new SQL_Connect object which is connecting to the Elan's Database
    $elanDb->connect("Arnaud_ChampiBleu");
    // Connect to the Arnaud_ChampiBleu database
    $answer = $elanDb->ask($command);
    // Execute the SQL command and return an array
    return ($answer);
}
function getListeStagiaire() 
{
    $command =  "SELECT ID_STAGIAIRE, PRENOM_STAGIAIRE".
                " FROM FICHE_STAGIAIRE";
    $elanDb = new SQL_Connect();
    // Create a new SQL_Connect object which is connecting to the Elan's Database
    $elanDb->connect("Arnaud_ChampiBleu");
    // Connect to the Arnaud_ChampiBleu database
    $answer = $elanDb->ask($command);
    // Execute the SQL command and return an array
    return ($answer);
}
function setStagiaireSession($id, $post)
{
    $command = "INSERT INTO STAGIAIRE_SESSION(ID_STAGIAIRE, ID_SESSION)".
                " VALUES ('" . $post['IdStagiaire'] . "','".$post['IdSession']."')";
    echo $command;
    $elanDb = new SQL_Connect();
    // Create a new SQL_Connect object which is connecting to the Elan's Database
    $elanDb->connect("Arnaud_ChampiBleu");
    // Connect to the Arnaud_ChampiBleu database
    $elanDb->set($command);
    // Execute the SQL command and return an array coucou
}

