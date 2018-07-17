<?php

require_once('src/model/class/Connect.class.php');

// Get data from a specific intern, by his id
function getInternById($id)
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
function getInternByName($name)
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

// Get the number of interns in the $id Session
function getInternsNumberBySessionId($id)
{
    $command = 'SELECT s.ID_SESSION,' .
            ' COUNT(ID_Stagiaire) AS nbPlacePrises' .
            ' FROM SESSION s, STAGIAIRE_SESSION ss' .
            ' WHERE s.ID_SESSION = ss.ID_SESSION' .
            ' AND s.ID_SESSION = ' . $id  .
            ' GROUP BY NOM_SESSION';
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