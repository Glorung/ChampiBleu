<?php

require_once('src/controller/session/doSessionList.php');
require_once('src/controller/session/doSessionDetail.php');
require_once('src/controller/intern/doIntern.php');
require_once('src/controller/form/doForm.php');

// To delete
require_once 'src/model/set/setSession.php';
require_once 'src/model/set/setNewEtudient.php';
require_once 'src/model/set/setCategorie.php';
require_once 'src/model/getset/getsetSessionModule.php';
require_once 'src/model/getset/getsetModule.php';
require_once 'src/model/getset/getsetStagiaireSession.php';

if (!ISSET($_GET['action']))    // Display standard WebPage index.php
    doSessionList();
else // Display Webpage related to index.php?action=[action]
{
    if ($_GET['action'] == "viewSessionDetail")
      doSessionDetail($_GET['id']);
    else if ($_GET['action'] == "viewSessionIntern")
      doInternById($_GET['id']);
    else if ($_GET['action'] == "form") // Accessible via index.php?action=form
      doForm(ISSET($_GET['id']) ? $_GET['id'] : 1);
    else if ($_GET['action'] == "set") // Execution du formulaire form
      doSetForm($_GET['id']);
    else
        echo "404 not found !";
}
