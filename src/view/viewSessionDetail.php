<?php

function viewSessionDetailInfo($view, $info)
{
  $view->addBody('<tr><td colspan=2>' . $info[0]['DESCRIPTION'] . '</td></tr>');
}

function viewSessionDetailDetail($view, $detail)
{
  $i = 0;

$tmp = "";
  while ($i < count($detail))
  {
      if ($tmp != $detail[$i]['NOM_CATEGORIE'])
      {
          $tmp = $detail[$i]['NOM_CATEGORIE'];
           $view->addBody('<tr><td colspan=2>' . $detail[$i]['NOM_CATEGORIE'] . "</td></tr>");
      }
    $view->addBody('<tr><td>' . $detail[$i]['NOM_MODULE'] . "</td><td>" .
    $detail[$i]['nb_jours'] . ' jours</td></tr>');
    $i = $i + 1;
  }
}

function viewInternsBySession($view, $interns)
{
  var_dump($interns);
  $view->addHead('<link rel="stylesheet" href="static/css/viewInternList.css">');
  $view->addBody('<div id="liste">');
  $i = 0;
  while ($i < count($interns))
  {
    addSessionIntern($view, $interns[$i]['nom_Prenom']);
    $i = $i + 1;
  }
  $view->addBody("</div>");
}

function addSessionIntern($view, $name = "John Doe")
{
  $view->addBody('<div class="container">');
  $view->addBody('<div class="row">');
  $view->addBody('<div class="col-sm-3">');
  $view->addBody('<div id="carte">');
  $view->addBody('<canvas class="header-bg" width="250" height="70" id="img">');
  $view->addBody('</canvas>');
  $view->addBody('<div class="avatar">');
  $view->addBody('<div class="container-img">');
  $view->addBody('<img src="http://www2.mes-coloriages-preferes.biz/colorino/Images/Large/Personnages-celebres-Les-Schtroumpfs/Schtroumpfette-684184.png" style>');
  $view->addBody('</div>');
  $view->addBody('</div>');
  $view->addBody('<div class="content">');
  $view->addBody('<p>' . $name .'</p>');
  $view->addBody('<p><button type="button" class="btn btn-default">Info</button></p>');
  $view->addBody('</div>');
  $view->addBody('</div>');
  $view->addBody('</div>');
  $view->addBody('</div>');
  $view->addBody('</div>');
  $view->addBody('</div>');
}

function viewSessionDetail($view, $info, $detail, $interns)
{
  viewTopNav($view);
  $view->addHead('<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">');
  $view->addHead('<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>');
  $view->addHead('<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>');
  $view->addHead('<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>');
  $view->addHead('<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">');
  $view->addHead('<link rel="stylesheet" href="static/css/viewSessionList.css">');
  $view->addHead('<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">');

  $view->addBody("<div class='card'>");
  $view->addBody("<div class='card-header' style='background-color:#3F51B5;'><h5 class='mb-0'>");
  $view->addBody("<button class='btn btn-link' data-toggle='collapse' data-target='#collapse1' aria-expanded='false' aria-controls='collapse'1>");
  $view->addBody($info[0]['NOM_SESSION']);
  $view->addBody("</button>");
  $view->addBody("<span id='date' class='badge badge-light'>" . $info[0]['nbInscris'] . " / " . $info[0]['NB_PLACE'] . "</span>");
  $view->addBody("<span id='date' class='badge badge-light'>" . "Du " . $info[0]['DATE_DEBUT'] . " au " . $info[0]['DATE_FIN'] . "</span>");
  $view->addBody("</h5>");
  $view->addBody("</div>");
  // Card body
  $view->addBody("<div id='collapse" . 1 . "' data-parent='#accordion' class='collapse show'>");
  $view->addBody("<div class='card-body' id='body" . 1 . "'>");
  $view->addBody("<table border=1>");
  viewSessionDetailInfo($view, $info);
  viewSessionDetailDetail($view, $detail);
  $view->addBody("</table>");
  $view->addBody("</div>");
  $view->addBody("</div>");

  viewInternsBySession($view, $interns);

  $view->viewAll();
}
