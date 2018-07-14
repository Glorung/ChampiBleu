<?php

require_once('src/model/Connect.class.php');

function getSessionList()
{
    $command = "SELECT NOM_SESSION," .
            " DATE_DEBUT," . 
            " DATE_FIN," .
            " NB_PLACE," .
            " COUNT(ID_Stagiaire) AS nbPlacePrises," .
            " NB_PLACE -(COUNT(ID_Stagiaire)) AS nbPlaceRestante," .
            " DESCRIPTION," .
            " s.ID_SESSION" .
            " FROM SESSION s, STAGIAIRE_SESSION ss" .
            " WHERE s.ID_SESSION = ss.ID_SESSION" .
            " GROUP BY NOM_SESSION" .
            " ORDER BY DATE_DEBUT";
    $elanDb = new SQL_Connect();
    // Create a new SQL_Connect object which is connecting to the Elan's Database
    $elanDb->connect("Arnaud_ChampiBleu");
    // Connect to the Arnaud_ChampiBleu database
    $answer = $elanDb->ask($command);
    // Execute the SQL command and return an array
    return ($answer);
}
