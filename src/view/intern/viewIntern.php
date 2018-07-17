<?php

function viewIntern($view, $data)
{
  viewTopNav($view);
  var_dump($data);
  $view->viewAll();
}
