<?php

// Affichage du gestionnaire de session/stagiaires
function viewNewSessionModule($view, $data, $data2)
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
                    <form action="index.php?action=set&id=5" method="post" >

                        <h1>définir la durée du module</h1><br/>
                        <input placeholder="nombre de jour du module" type="number" name="nbJour" /><br/>    
                        
                        <select name="IdModule"> 
                        <optgroup>
                             <option value="">Nom Module</option>');
                               $i = 0;
                               while ($i < count($data2))
                               {
                               $view->addBody('<option value="'. $data2[$i]['ID_MODULE'] .'">' . $data2[$i]['NOM_MODULE'] . '</option>'); 
                                $i = $i + 1;
                               } 
                        $view->addBody('       </optgroup>
                        </select>

                        <select name="IdSession"> 
                        <optgroup>
                             <option value="">Nom Session</option>');
                               $i = 0;
                               while ($i < count($data))
                               {
                               $view->addBody('<option value="'. $data[$i]['ID_SESSION'] .'">' . $data[$i]['NOM_SESSION'] . '</option>'); 
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
