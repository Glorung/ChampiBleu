<?php

require_once('src/model/get/getSessionDetail.php');
require_once('src/view/viewSessionDetail.php');
require_once('src/model/get/getSessionInfo.php');
require_once('src/view/view.class.php');

function doSessionDetail($id)
{
    $dataDetail = getSessionDetail($id);
    $dataInfo = getSessionInfo($id);
    // Récupère les informations du stagiaire sous forme de tableau associatif
    viewSessionDetail(new view(), $dataInfo, $dataDetail);
    // Affiche la page web via la class view (-> src/view/view.class.php)
}
