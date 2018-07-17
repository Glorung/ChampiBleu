<?php


require_once('src/model/Connect.class.php');

function getInternNumber($id)
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


/* 
SELECT s.ID_SESSION, NOM_SESSION, NB_PLACE, COUNT(ID_Stagiaire) AS nbPlacePrises, NB_PLACE -(COUNT(ID_Stagiaire)) AS nbPlaceRestante
FROM SESSION s, STAGIAIRE_SESSION ss
WHERE s.ID_SESSION = ss.ID_SESSION
AND s.ID_SESSION = "6"
GROUP BY NOM_SESSION
 */

