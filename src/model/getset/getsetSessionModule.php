<?php

require_once('src/model/Connect.class.php');

// Get advanced info on a specific session
function getListeSession() 
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
function getListeModule() 
{
    $command =  "SELECT ID_MODULE, NOM_MODULE".
                " FROM MODULE";
    $elanDb = new SQL_Connect();
    // Create a new SQL_Connect object which is connecting to the Elan's Database
    $elanDb->connect("Arnaud_ChampiBleu");
    // Connect to the Arnaud_ChampiBleu database
    $answer = $elanDb->ask($command);
    // Execute the SQL command and return an array
    return ($answer);
}
function setSessionModule($id, $post)
{
    $command = "INSERT INTO SESSION_MODULE(ID_MODULE, ID_SESSION, NB_JOURS)".
                " VALUES ('" . $post['NomModule'] . "','".$post['Idcategorie']."','".$post['nbJour']."')";
    echo $command;
    $elanDb = new SQL_Connect();
    // Create a new SQL_Connect object which is connecting to the Elan's Database
    $elanDb->connect("Arnaud_ChampiBleu");
    // Connect to the Arnaud_ChampiBleu database
    $elanDb->set($command);
    // Execute the SQL command and return an array coucou
}
