<?php

require_once('src/model/Connect.class.php');

function setSession($post)
{
    $command = "INSERT INTO SESSION(nom_session, date_debut, date_fin, nb_place, description )".
                " VALUES ('" . $post['sessionName'] . "','" . $post['dateDebut'] . "','" . $post['dateFin']  . "','" . $post['placeDisponible'] . "','" . $post['description']."')";
    echo $command;
    $elanDb = new SQL_Connect();
    // Create a new SQL_Connect object which is connecting to the Elan's Database
    $elanDb->connect("Arnaud_ChampiBleu");
    // Connect to the Arnaud_ChampiBleu database
    $elanDb->set($command);
    // Execute the SQL command and return an array
}
?>