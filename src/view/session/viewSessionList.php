<?php
  // card class
require_once('src/model/dataType/Card.class.php');
// top navbar
require_once('src/view/baseView/viewTopNav.php');
// getter
require_once('src/model/get/getIntern.php');

function viewCards($view, $colors, $data)
{
  $view->addBody('<div id="liste">');
  $i = 0;
  $j = 0;
  while ($i < count($data))
  {
    $nbInternInSession = getInternsNumberBySessionId($data[$i]['ID_SESSION']);
    $cardData = new Card;
    $cardData->number = $i + 1;
    $cardData->color = $colors[$i];
    $cardData->sessionName = $data[$i]['NOM_SESSION'];
    $cardData->sessionDuration =  "Du " . $data[$i]['DATE_DEBUT'] . " au " . $data[$i]['DATE_FIN'];
    $cardData->sessionPlace = ISSET($nbInternInSession[0]) ? $nbInternInSession[0]['nbPlacePrises'] . "/" . $data[$i]['NB_PLACE'] : "0/" . $data[$i]['NB_PLACE'];
    $cardData->sessionDescription = $data[$i]['DESCRIPTION'];
    $cardData->sessionId = $data[$i]['ID_SESSION'];
    addCard($view, $cardData);
    $i = $i + 1;
    $j = $j + 1;
    if ($j > count($colors))
      $j = 0;
    // salut
  }
  $view->addBody('</div>');
}

function addCard($view, $cardData)
{
  $view->addBody("<div class='card'>");
  // Card title
  $view->addBody("<div class='card-header' style='background-color:" . $cardData->color . ";'><h5 class='mb-0'>");
  if ($cardData->number == "1")
  $view->addBody("<button class='btn btn-link' data-toggle='collapse' data-target='#collapse" . $cardData->number .
  "' aria-expanded='false' aria-controls='collapse'" . $cardData->number . ">");
  else
  $view->addBody("<button class='btn btn-link collapsed' data-toggle='collapse' data-target='#collapse" . $cardData->number .
  "' aria-expanded='false' aria-controls='collapse" . $cardData->number . "'>");
  $view->addBody($cardData->sessionName);
  $view->addBody("</button>");
  $view->addBody("<span id='date' class='badge badge-light'>" . $cardData->sessionPlace . "</span>");
  $view->addBody("<span id='date' class='badge badge-light'>" . $cardData->sessionDuration . "</span>");
  $view->addBody("</h5>");
  $view->addBody("</div>");
  // Card body
  if ($cardData->number == "1")
  $view->addBody("<div id='collapse" . $cardData->number . "' data-parent='#accordion' class='collapse show'>");
  else
  $view->addBody("<div id='collapse" . $cardData->number . "' data-parent='#accordion' class='collapse hide'>");
  $view->addBody("<div class='card-body' id='body" . $cardData->number . "'>");
  $view->addBody($cardData->sessionDescription);
  $view->addBody("</div>");
  $view->addBody("<a id='liens' href='index.php?action=viewSessionDetail&amp;id=" . $cardData->sessionId . "'>Détails</a>");
  $view->addBody("</div>");

  $view->addBody("</div>");
}

function viewSessionList($view, $data)
{
  viewTopNav($view);
  $view->addHead('<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">');
  $view->addHead('<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>');
  $view->addHead('<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>');
  $view->addHead('<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>');
  $view->addHead('<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">');
  $view->addHead('<link rel="stylesheet" href="static/css/viewSessionList.css">');
  $view->addHead('<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">');
  $colors = array ("#f44336", "#E91E63", "#9C27B0", "#673AB7", "#3F51B5",
  "#2196F3", "#03A9F4", "#00BCD4", "#009688", "#4CAF50",
  "#8BC34A", "#CDDC39", "#FFC107", "#FF9800", "#FF5722",
  "#795548", "#607D8B");
  viewCards($view, $colors, $data);
  $view->viewAll();
}
