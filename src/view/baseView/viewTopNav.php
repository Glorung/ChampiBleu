<?php

require_once('src/view/view.class.php');

function viewTopNav($view)
{
  $view->addHead("<link rel='stylesheet' href='static/css/viewTopNav.css'>");
  $view->addHead('<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">');

  $view->addBody('<nav class="menu menu-inverse">');
  $view->addBody('<div class="container-fluid">');
  $view->addBody('<div class="menu-header">');
  $view->addBody('<a class="menu-brand" href="index.php">ChampiBleu</a>');
  $view->addBody('</div>');
  $view->addBody('<form class="menu-form menu-left" action="/action_page.php">');
  $view->addBody('<div class="form-group">');
  $view->addBody('<input type="text" class="form-control" placeholder="Search">');
  $view->addBody('</div>');
  $view->addBody('<button type="submit" class="btn btn-default">Submit</button>');
  $view->addBody('</form>');
  $view->addBody('<ul class="nav menu-nav menu-right">');
  $view->addBody('<li><a href="static/html/connect.html"><span ></span><i class="far fa-edit"> Sign Up</i></a></li>');
  $view->addBody('<li><a href="static/html/connect.html"><span ></span><i class="fas fa-user"> Login</i></a></li>');
  $view->addBody('</ul>');
  $view->addBody('</div>');
  $view->addBody('</nav>');
}
