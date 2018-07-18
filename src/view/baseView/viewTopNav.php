<?php

require_once('src/model/class/View.class.php');

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
 // $view->addBody('<li><a href="static/html/connect.html"><span ></span><i class="far fa-edit"> Sign Up</i></a></li>');
  $view->addBody('<li><a href="static/html/connect.html"><span ></span><i class="fas fa-user"> Login</i></a></li>');
  $view->addBody('</ul>');
  $view->addBody('</div>');
  $view->addBody('</nav>');
}

function viewNewTopNav($view)
{
  $view->addHead('<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">');
  $view->addHead("
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #ECEFF1;
    position: fixed;
    top: 10px;
left: 1%;
right: 1%;
    width: 98%;
z-index:99;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
background-color: #455A64;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #3F51B5;
}
</style>
");
  $view->addBody('
<ul>
  <li><a href="index.php" class="active">ChampiBleu</a></li>
  <li style="float:right"><a href="static/html/connect.html"><i class="fas fa-user"> Login</i></a></li>
</ul>
');
}
