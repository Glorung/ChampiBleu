<?php

require_once('src/model/Connect.class.php');

function setModule($post)
{
    $command = "INSERT INTO  MODULE (NOM_MODULE, ID_CATEGORIE)".
                " VALUES ('" . $post['NomModule'] . "','".$post['Idcategorie']."')";
    echo $command;
    $elanDb = new SQL_Connect();
    // Create a new SQL_Connect object which is connecting to the Elan's Database
    $elanDb->connect("Arnaud_ChampiBleu");
    // Connect to the Arnaud_ChampiBleu database
    $elanDb->set($command);
    // Execute the SQL command and return an array
}



function getIdModule()
{
    $command = "SELECT ID_CATEGORIE, NOM_CATEGORIE".
                " FROM CATEGORIE";
    // Définition de la commande SQL avec l'ID
    $elanDb = new SQL_Connect();
    // Instantie l'object SQL_Connect qui se connecte à la base SQL d'Elan
    $elanDb->connect("Arnaud_ChampiBleu");
    // Se connecte à la base de donnée Arnaud_ChampiBleu
    $answer = $elanDb->ask($command);
    // Execute la commande SQL et recupère la réponse sous forme de tableau associatif
    return ($answer);
}
?>
