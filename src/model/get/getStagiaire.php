<?php

require_once('src/model/Connect.class.php');

// Get data from a specific intern, by his id
function getStagiaireById($id)
{
    $command = "select `Arnaud_ChampiBleu`.`FICHE_STAGIAIRE`.`ID_STAGIAIRE` AS `ID_STAGIAIRE`," .
            "`Arnaud_ChampiBleu`.`FICHE_STAGIAIRE`.`PRENOM_STAGIAIRE` AS `PRENOM`,".
            "`Arnaud_ChampiBleu`.`FICHE_STAGIAIRE`.`NOM_STAGIAIRE` AS `NOM`,".
            "`Arnaud_ChampiBleu`.`FICHE_STAGIAIRE`.`SEXE` AS `SEXE`,".
            "`Arnaud_ChampiBleu`.`FICHE_STAGIAIRE`.`DATE_NAISSANCE` AS `DATE_NAISSANCE`,".
            "`Arnaud_ChampiBleu`.`FICHE_STAGIAIRE`.`VILLE` AS `VILLE`,".
            "`Arnaud_ChampiBleu`.`FICHE_STAGIAIRE`.`EMAIL` AS `EMAIL`,".
            "`Arnaud_ChampiBleu`.`FICHE_STAGIAIRE`.`TELEPHONE` AS `TELEPHONE`".
            "from `Arnaud_ChampiBleu`.`FICHE_STAGIAIRE`".
            "where (`Arnaud_ChampiBleu`.`FICHE_STAGIAIRE`.`ID_STAGIAIRE` = " . $id . ")";
    $elanDb = new SQL_Connect();
    // Create a new SQL_Connect object which is connecting to the Elan's Database
    $elanDb->connect("Arnaud_ChampiBleu");
    // Connect to the Arnaud_ChampiBleu database
    $answer = $elanDb->ask($command);
    // Execute the SQL command and return an array
    return ($answer);
}

// Get data from a specific intern, by his name
function getStagiaireByName($name)
{
    $command = "select `Arnaud_ChampiBleu`.`FICHE_STAGIAIRE`.`ID_STAGIAIRE` AS `ID_STAGIAIRE`," .
            "`Arnaud_ChampiBleu`.`FICHE_STAGIAIRE`.`PRENOM_STAGIAIRE` AS `PRENOM`,".
            "`Arnaud_ChampiBleu`.`FICHE_STAGIAIRE`.`NOM_STAGIAIRE` AS `NOM`,".
            "`Arnaud_ChampiBleu`.`FICHE_STAGIAIRE`.`SEXE` AS `SEXE`,".
            "`Arnaud_ChampiBleu`.`FICHE_STAGIAIRE`.`DATE_NAISSANCE` AS `DATE_NAISSANCE`,".
            "`Arnaud_ChampiBleu`.`FICHE_STAGIAIRE`.`VILLE` AS `VILLE`,".
            "`Arnaud_ChampiBleu`.`FICHE_STAGIAIRE`.`EMAIL` AS `EMAIL`,".
            "`Arnaud_ChampiBleu`.`FICHE_STAGIAIRE`.`TELEPHONE` AS `TELEPHONE`".
            "from `Arnaud_ChampiBleu`.`FICHE_STAGIAIRE`" .
            "where (`Arnaud_ChampiBleu`.`FICHE_STAGIAIRE`.`PRENOM_STAGIAIRE` = '" . $name . "')";
    $elanDb = new SQL_Connect();
    // Create a new SQL_Connect object which is connecting to the Elan's Database
    $elanDb->connect("Arnaud_ChampiBleu");
    // Connect to the Arnaud_ChampiBleu database
    $answer = $elanDb->ask($command);
    // Execute the SQL command and return an array
    return ($answer);
}
