<?php
require_once('src/view/view.class.php');
require_once('src/model/get/getSessionList.php');
require_once('src/view/viewSessionList.php');

function doSessionList()
{
    $data = getSessionList();
    viewSessionList(new view(), $data);
}
