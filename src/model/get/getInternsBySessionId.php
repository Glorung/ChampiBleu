<?php

require_once('src/model/Connect.class.php');

// Get Sessions where the intern $id is registered
function getInternsBySessionId($id)
{
    $command = "SELECT CONCAT(NOM_STAGIAIRE,' ',PRENOM_STAGIAIRE) AS nom_Prenom" .
                " FROM SESSION s, FICHE_STAGIAIRE fs, STAGIAIRE_SESSION ss" .
                " WHERE fs.ID_STAGIAIRE = ss.ID_STAGIAIRE" .
                " AND ss.ID_SESSION = s.ID_SESSION" .
                " AND ss.ID_SESSION = " . $id;
    $elanDb = new SQL_Connect();
    // Create a new SQL_Connect object which is connecting to the Elan's Database
    $elanDb->connect("Arnaud_ChampiBleu");
    // Connect to the Arnaud_ChampiBleu database
    $answer = $elanDb->ask($command);
    // Execute the SQL command and return an array
    return ($answer);
}
