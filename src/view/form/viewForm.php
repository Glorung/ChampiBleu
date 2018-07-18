<?php

function viewForm($view)
{
  viewTopNav($view);
  $view->addBody("<a href='index.php?action=form&id=1'>" .
		 "Ajouter une session" .
		 "</a><br>");
  $view->addBody("<a href='index.php?action=form&id=2'>" .
		 "Ajouter un stagiaire" .
		 "</a><br>");
  $view->addBody("<a href='index.php?action=form&id=3'>" .
		 "Ajouter une categorie" .
		 "</a><br>");
  $view->addBody("<a href='index.php?action=form&id=4'>" .
		 "Ajouter un module" .
		 "</a><br>");
  $view->addBody("<a href='index.php?action=form&id=5'>" .
		 "Ajouter un module a une session" .
		 "</a><br>");
    $view->addBody("<a href='index.php?action=form&id=6'>" .
		 "Ajouter un stagiaire a une session" .
		 "</a><br>");
    $view->viewAll();
}

?>