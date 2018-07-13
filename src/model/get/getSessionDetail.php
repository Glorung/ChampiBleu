<?php

require_once('src/model/Connect.class.php');

// Get advanced info on a specific session
function getSessionDetail($id) 
{
    $command =  "select `c`.`NOM_CATEGORIE` AS `NOM_CATEGORIE`," .
                " `m`.`NOM_MODULE` AS `NOM_MODULE`," . 
                " `sm`.`NB_JOURS` AS `nb_jours`," .
                " `s`.`NOM_SESSION` AS `NOM_SESSION`," . 
                " `s`.`ID_SESSION` AS `ID_SESSION`" .
                " from `Arnaud_ChampiBleu`.`MODULE` `m`" .
                " join `Arnaud_ChampiBleu`.`SESSION_MODULE` `sm`" .
                " join `Arnaud_ChampiBleu`.`CATEGORIE` `c`" .
                " join `Arnaud_ChampiBleu`.`SESSION` `s`" .
                " where ((`m`.`ID_MODULE` = `sm`.`ID_MODULE`)" .
                " and (c.ID_CATEGORIE = m.ID_CATEGORIE)" .
                " and (`s`.`ID_SESSION` = `sm`.`ID_SESSION`)" .
                " and (`s`.`ID_SESSION` = " . $id . "))";
    $elanDb = new SQL_Connect();
    // Create a new SQL_Connect object which is connecting to the Elan's Database
    $elanDb->connect("Arnaud_ChampiBleu");
    // Connect to the Arnaud_ChampiBleu database
    $answer = $elanDb->ask($command);
    // Execute the SQL command and return an array
    return ($answer);
}
