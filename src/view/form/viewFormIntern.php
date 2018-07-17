<?php

// Affichage du gestionnaire de session/stagiaires
function viewFormIntern($view)
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
                    <form action="index.php?action=set&id=2" method="post" >

                        <h1>Inscription d\'un élève</h1><br/>
                        <input placeholder="Prenom" type="text" name="PrenomStagiaire" /><br/>
                        <input placeholder="Nom" type="text"  name="NomStagiaire" required/><br/>
                        <input placeholder="Ville" type="text"  name="VilleStagiaire" required/><br/>
                        <input type="email" name="EmailStagiaire" placeholder="E-mail ..." required/><br/>
                        <input type="number" name="TelephoneStagiaire" placeholder="telephone" required/><br/>
                        <input type="date" value="2000-12-25" name="DateNaissanceStagiaire" required/><br/>

                        <label type=\'checkbox\'>
                            Etes-vous :
                            <select name="SexeStagiaire">
                                <option value="0">Choisir...</option>
                                <option value="M">Un Schtrumpf</option>
                                <option value="F">Une Schtrumpfette</option>
                            </select>
                        </label><br/>
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
