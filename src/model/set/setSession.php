<?php

require_once('src/model/Connect.class.php');

// Get data from a specific intern, by his id
function setSession($id, $post)
{
    $command = "INSERT INTO session(nom_session, date_debut, date_fin, nb_place, description )
                VALUES ($_POST[sessionName], $_POST[dateDebut] $_POST[dateFin], $_POST[placeDisponible], $_POST[textarea])";
    $elanDb = new SQL_Connect();
    // Create a new SQL_Connect object which is connecting to the Elan's Database
    $elanDb->connect("Arnaud_ChampiBleu");
    // Connect to the Arnaud_ChampiBleu database
    $answer = $elanDb->ask($command);
    // Execute the SQL command and return an array
    return ($answer);
}
?>