<?php

require_once('src/model/Connect.class.php');

// Get some basic info on a specific session
function getSessionInfo($id) 
{
    $command =  "select s.ID_SESSION," .
                " NOM_SESSION," .
                " DATE_DEBUT," .
                " DATE_FIN," . 
                " NB_PLACE," .
                " count(ID_STAGIAIRE) AS nbInscris," .
                " DESCRIPTION" .
                " from SESSION s, STAGIAIRE_SESSION ss" .
                " where s.ID_SESSION = ss.ID_SESSION" .
                " and s.ID_SESSION = " . $id .
                " group by s.NOM_SESSION";
    $elanDb = new SQL_Connect();
    // Create a new SQL_Connect object which is connecting to the Elan's Database
    $elanDb->connect("Arnaud_ChampiBleu");
    // Connect to the Arnaud_ChampiBleu database
    $answer = $elanDb->ask($command);
    // Execute the SQL command and return an array
    return ($answer);
}
