<?php

// Affichage du gestionnaire de session/stagiaires
function viewNewCategorie($view)
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
                    <form action="index.php?action=set&id=3" method="post" >

                        <h1>Ajout d\'une catégorie</h1><br/>
                        <input placeholder="nom de la catégorie" type="text" name="NomCategorie" /><br/>                    
                        <label for="CGU">Veuillez valider<input id="CGU" type="checkbox" name="CGU" required /></label><br/>
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
