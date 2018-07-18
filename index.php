<?php

// view class
require_once('src/model/class/View.class.php');

// Session controller
require_once('src/controller/session/doSessionList.php');
require_once('src/controller/session/doSessionDetail.php');

// Intern controller
require_once('src/controller/intern/doIntern.php');

// Form controller
require_once('src/controller/form/doForm.php');


if (!ISSET($_GET['action']))
  {	// Display standard WebPage index.php
    doSessionList();
  }
else
  {	// Display Webpage related to index.php?action=[action]
    if ($_GET['action'] == "viewSessionDetail") // action=viewSessionDetail
      doSessionDetail($_GET['id']);
    else if ($_GET['action'] == "viewSessionIntern") // action=viewSessionIntern
      doInternById($_GET['id']);
    else if ($_GET['action'] == "form") // action=form
      doForm(ISSET($_GET['id']) ? $_GET['id'] : 0);
    else if ($_GET['action'] == "set") // action=set
      doSetForm($_GET['id']);
    else
      echo "404 not found !"; // Error webpage
  }
