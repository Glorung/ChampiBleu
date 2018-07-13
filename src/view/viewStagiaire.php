<?php

require_once('src/view/view.class.php');

function viewStagiaire($view, $data)
{
  viewTopNav($view);
  var_dump($data);
  $view->viewAll();
}
