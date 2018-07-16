<?php

// Affichage du gestionnaire de session/stagiaires
function viewNewModule($view, $data)
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
                    <form action="index.php?action=set&id=4" method="post" >

                        <h1>Ajout d\'une catégorie</h1><br/>
                        <input placeholder="nom du module" type="text" name="NomModule" /><br/>    
                        
                        <select name="Idcategorie"> 
                        <optgroup>
                             <option value="">Catégories</option>');
                               var_dump($data);
                               $i = 0;
                               while ($i < count($data))
                               {
                               $view->addBody('<option value="'. $data[$i]['ID_CATEGORIE'] .'">' . $data[$i]['NOM_CATEGORIE'] . '</option>'); 
                                $i = $i + 1;
                               } 
 $view->addBody('       </optgroup>
                        </select>


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
