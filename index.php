<?php

require_once 'src/controller/doSessionDetail.php';
require_once 'src/controller/doSessionList.php';
require_once 'src/controller/doStagiaire.php';
require_once 'src/controller/doForm.php';
require_once 'src/model/set/setSession.php';

if (isset ($_POST[0])){
    setSession($id, $_POST);
}
if (!ISSET($_GET['action'])) // Display standard WebPage
{
        doSessionList();
}
else // Display Webpage related to $_GET['action']
{
    if ($_GET['action'] == "viewSessionDetail")
      doSessionDetail(ISSET($_GET['id']) ? $_GET['id'] : 3);
    else if ($_GET['action'] == "viewSessionStagiaire")
    {
      doStagiaireById(ISSET($_GET['id']) ? $_GET['id'] : 405);
    }
    else if ($_GET['action'] == "form") // Accessible via index.php?action=form
    {
      doForm(ISSET($_GET['id']) ? $_GET['id'] : 1);
    }
    else
        echo "404 not found !";
}


