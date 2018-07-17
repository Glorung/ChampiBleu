<?php

// doForm require
require_once('src/view/form/viewFormSession.php');
require_once('src/view/form/viewFormIntern.php');
require_once('src/view/form/viewFormCategorie.php');
require_once('src/view/form/viewFormModule.php');
require_once('src/view/form/viewFormSessionModule.php');
require_once('src/view/form/viewFormStagiaireSession.php');

// doSetForm require
require_once('src/model/getset/getsetModule.php');
require_once('src/model/getset/getsetSessionModule.php');
require_once('src/model/getset/getsetStagiaireSession.php');

// doSetForm require
require_once('src/model/set/setSession.php');
require_once('src/model/set/setCategorie.php');
require_once('src/model/set/setNewEtudient.php');

function doForm($id)
{
  if ($id == 1)
    viewFormSession(new view());
  else if ($id == 2)
    viewFormIntern(new view());
  else if ($id == 3)
    viewFormCategorie(new view());
  else if ($id == 4)
    viewFormModule(new view(), getIdModule());
  else if ($id == 5)
    viewFormSessionModule(new view(), getListeSession(), getListeModule());
  else if ($id == 6)
    viewFormStagiaireSession(new view(),
			    getConnard(),
			    getPeopleID());
}

function doSetForm($id)
{
  $id = ISSET($_GET['id']) ? $_GET['id'] : 1;
  if ($id == 1)
    setSession($_POST);
  else if ($id == 2)
    setNewEtudient($_POST);
  else if ($id == 3)
    setCategorie($_POST);
  else if ($id == 4)
    setModule($_POST);
  else if ($id == 5)
    setSessionModule($_POST);
  else if ($id == 6)
    setNewPeopleSession($_POST);
}
