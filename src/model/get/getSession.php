<?php

require_once('src/model/class/Connect.class.php');

// Get the list of session availlable
function getSessionList()
{
    $command = "SELECT NOM_SESSION," .
            " DATE_DEBUT," .
            " DATE_FIN," .
            " NB_PLACE," .
            " DESCRIPTION," .
            " ID_SESSION" .
            " FROM SESSION" .
            " GROUP BY NOM_SESSION" .
            " ORDER BY DATE_DEBUT";
    $elanDb = new SQL_Connect();
    // Create a new SQL_Connect object
    $elanDb->connect("Arnaud_ChampiBleu");
    // Connect to the Arnaud_ChampiBleu database
    $answer = $elanDb->ask($command);
    // Execute the SQL command and return an array
    return ($answer);
}

// Get some basic info on a specific session
function getSessionInfo($id)
{
    $command =  "select s.ID_SESSION," .
                " NOM_SESSION," .
                " DATE_DEBUT," .
                " DATE_FIN," .
                " NB_PLACE," .
                " DESCRIPTION" .
                " from SESSION s" .
                " where s.ID_SESSION = " . $id .
                " group by s.NOM_SESSION";
    $elanDb = new SQL_Connect();
    // Create a new SQL_Connect object
    $elanDb->connect("Arnaud_ChampiBleu");
    // Connect to the Arnaud_ChampiBleu database
    $answer = $elanDb->ask($command);
    // Execute the SQL command and return an array
    return ($answer);
}

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
    // Create a new SQL_Connect object
    $elanDb->connect("Arnaud_ChampiBleu");
    // Connect to the Arnaud_ChampiBleu database
    $answer = $elanDb->ask($command);
    // Execute the SQL command and return an array
    return ($answer);
}

?>

