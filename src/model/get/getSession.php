<?php

require_once('src/model/Connect.class.php');

function getStagiaire($id)
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
    // Définition de la commande SQL avec l'ID
    $elanDb = new SQL_Connect();
    // Instantie l'object SQL_Connect qui se connecte à la base SQL d'Elan
    $elanDb->connect("Arnaud_ChampiBleu");
    // Se connecte à la base de donnée Arnaud_ChampiBleu
    $answer = $elanDb->ask($command);
    // Execute la commande SQL et recupère la réponse sous forme de tableau associatif
    return ($answer);
}
