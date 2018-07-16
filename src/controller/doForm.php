<?php

require_once('src/view/viewForm.php');
require_once('src/view/viewNewEtudient.php');
require_once('src/view/viewNewCategorie.php');
require_once('src/view/viewNewModule.php');
require_once('src/model/set/setModule.php');

function doForm($id)
{
     // Appel de la fonction que tu dois implementer
if ($id==1){
    viewForm(new view());
}
else if ($id==2)
{
  viewNewEtudient(new view());
}
else if ($id==3)
{
  viewNewCategorie(new view());
}
else if ($id==4)
{
  viewNewModule(new view(), getIdModule());
}
}
