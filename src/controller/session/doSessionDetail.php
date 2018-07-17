<?php

require_once('src/model/get/getSession.php');
require_once('src/model/get/getIntern.php');

require_once('src/view/session/viewSessionDetail.php');

function doSessionDetail($id)
{
    $dataDetail = getSessionDetail($id);
    $dataInfo = getSessionInfo($id);
    $internList = getInternsBySessionId($id);
    // Récupère les informations du stagiaire sous forme de tableau associatif
    viewSessionDetail(new view(), $dataInfo, $dataDetail, $internList);
}
