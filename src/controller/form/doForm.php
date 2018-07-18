<?php

// doForm require
require_once('src/view/form/viewForm.php');
require_once('src/view/form/viewFormSession.php');
require_once('src/view/form/viewFormIntern.php');
require_once('src/view/form/viewFormCategorie.php');
require_once('src/view/form/viewFormModule.php');
require_once('src/view/form/viewFormSessionModule.php');
require_once('src/view/form/viewFormStagiaireSession.php');

// doSetForm require
require_once('src/model/set/setSession.php');
require_once('src/model/set/setCategorie.php');
require_once('src/model/set/setIntern.php');
require_once('src/model/set/setModule.php');
require_once('src/model/set/setSessionModule.php');
require_once('src/model/set/setInternSession.php');

require_once('src/model/get/getIntern.php');
require_once('src/model/get/getSession.php');
require_once('src/model/get/getModule.php');
require_once('src/model/get/getCategorie.php');


function doForm($id)
{
  if ($id == 0)
    viewForm(new view());
  else if ($id == 1)
    viewFormSession(new view());
  else if ($id == 2)
    viewFormIntern(new view());
  else if ($id == 3)
    viewFormCategorie(new view());
  else if ($id == 4)
    viewFormModule(new view(), getCategories());
  else if ($id == 5)
    viewFormSessionModule(new view(), getSessionList(), getModules());
  else if ($id == 6)
    viewFormStagiaireSession(new view(),
			    getSessionList(),
			    getInterns());
}

function doSetForm($id)
{
  if ($id == 1)
    setSession($_POST);
  else if ($id == 2)
    setIntern($_POST);
  else if ($id == 3)
    setCategorie($_POST);
  else if ($id == 4)
    setModule($_POST);
  else if ($id == 5)
    setSessionModule($_POST);
  else if ($id == 6)
    setInternSession($_POST);
}
