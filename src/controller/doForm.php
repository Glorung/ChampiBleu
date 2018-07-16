<?php

require_once('src/view/viewForm.php');
require_once('src/view/viewNewEtudient.php');

function doForm($id)
{
if ($id==1){
    viewForm(new view());
}
else if ($id==2)
{
  // Appel de la fonction que tu dois implementer
  viewNewEtudient(new view());
}

}
