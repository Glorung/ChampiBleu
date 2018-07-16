<?php

// Affichage du gestionnaire de session/stagiaires
function viewForm($view)
{
    viewTopNav($view);

    // Pour ajouter quelque chose au <head></head>
    $view->addHead("<meta charset='utf-8'>");
    $view->addHead('<meta name="viewport" content="width=device-width">');
    $view->addHead('<link rel="stylesheet" href="">');

    // Pour ajouter quelque chose au <body></body>
    $view->addBody('<div>
            <aside>
                <div>                   
                    <form action="index.php?action=set&id=1" method="post" >

                        <h1>Ajouter une nouvelle Session</h1><br/>
                        
                        <label>Nom de la Session :</label>
                        <input type="text" name="sessionName" required /><br/><br/>
                        
                        <label>Nombre de place disponible :</label>
                        <input type="number" name="placeDisponible" required /><br/><br/>
                        
                        <label>Date de début :</label>
                        <input type="date" value="2012-12-25" name="dateDebut" required/><br/><br/>
                        
                        <label>Date de fin :</label>
                        <input type="date" value="2012-12-25" name="dateFin" required/><br/><br/>
                        
                        <label>Description de la Session :</label><br/>
                        <textarea name="description" required>Description</textarea><br/><br/>
                       
                        <label for="CGU">Veuillez valider<input id="CGU" type="checkbox" name="CGU" required /></label><br/><br/>
                        
                        <input id="Valider" type="submit" value="Envoyer">
                        <input id="Annuler" type="reset" value="Annuler">

                    </form>
                </div>
            </aside>
        </div>');

    // Affiche la page html
    $view->viewAll();
}

?>
