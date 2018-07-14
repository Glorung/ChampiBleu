<?php

require_once('src/model/Connect.class.php');

function setCategorie($id, $post)
{
    $command = "INSERT INTO  CATEGORIE (NOM_CATEGORIE)".
                " VALUES ('" . $post['NomCategorie'] . "')";
    echo $command;
    $elanDb = new SQL_Connect();
    // Create a new SQL_Connect object which is connecting to the Elan's Database
    $elanDb->connect("Arnaud_ChampiBleu");
    // Connect to the Arnaud_ChampiBleu database
    $elanDb->set($command);
    // Execute the SQL command and return an array
}
?>