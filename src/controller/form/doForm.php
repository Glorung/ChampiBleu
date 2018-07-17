<?php

require_once('src/view/viewForm.php');
require_once('src/view/viewNewEtudient.php');
require_once('src/view/viewNewCategorie.php');
require_once('src/view/viewNewModule.php');
require_once('src/view/viewNewSessionModule.php');
require_once('src/view/viewNewStagiaireSession.php');
require_once('src/model/getset/getsetModule.php');
require_once('src/model/getset/getsetSessionModule.php');
require_once('src/model/getset/getsetStagiaireSession.php');

function doForm($id)
{
  if ($id == 1)
    viewForm(new view());
  else if ($id == 2)
    viewNewEtudient(new view());
  else if ($id == 3)
    viewNewCategorie(new view());
  else if ($id == 4)
    viewNewModule(new view(), getIdModule());
  else if ($id == 5)
    viewNewSessionModule(new view(), getListeSession(), getListeModule());
  else if ($id == 6)
    viewNewStagiaireSession(new view(),
			    getListeSessions(),
			    getListeStagiaire());
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
    setStagiaireSession($_POST);
}
