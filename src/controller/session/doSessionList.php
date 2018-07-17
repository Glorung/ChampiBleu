<?php

require_once('src/model/get/getSession.php');
require_once('src/view/session/viewSessionList.php');

function doSessionList()
{
    $data = getSessionList();
    viewSessionList(new view(), $data);
}
