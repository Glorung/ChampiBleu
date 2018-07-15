<?php

require_once('src/model/Connect.class.php');

function setModule($id, $post)
{
    $command = "INSERT INTO  MODULE (NOM_MODULE, ID_CATEGORIE)".
                " VALUES ('" . $post['NomModule'] . "','".$post['NomCategorie']."')";
    echo $command;
    $elanDb = new SQL_Connect();
    // Create a new SQL_Connect object which is connecting to the Elan's Database
    $elanDb->connect("Arnaud_ChampiBleu");
    // Connect to the Arnaud_ChampiBleu database
    $elanDb->set($command);
    // Execute the SQL command and return an array
}
?>