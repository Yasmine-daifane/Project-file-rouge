<?php
include "../../Views/Layout/root.php";
require_once(__ROOT__ . '/Managers/GestionRequest.php');
require_once(__ROOT__ . '/Managers/GestionRates.php');
$GestionRates = new GestionRates;
$GestionRequests = new GestionRequests;
$getDepartment = $GestionRates->getDepartment();
$IsAjaxRequest = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $IsAjaxRequest = true;
}

if (isset($_POST['Id_Request'])) {
    $id = $_POST['Id_Request'];
    $select_value = $_POST['Status'];
    $GestionRequests->UpdateStatus($id, $select_value);
}


if (isset($_POST['pageId'])) {
    $currentPage = $_POST['pageId'];
} else {
    $currentPage = 1;
}

if (isset($_POST['Query'])) {
    $Query = $_POST['Query'];
} else {
    $Query = "";
}

$results = $GestionRequests->GetAllRequests($Query);


$itemsPerPage = 6;
$totalItems = count($results);
$pagesNum = ceil($totalItems / $itemsPerPage);

$pages = $GestionRequests->pages($results, $pagesNum, $itemsPerPage);


if ($IsAjaxRequest) {
    include_once(__ROOT__ . "/Views/Requests/index.data.php");
} else {
    include_once(__ROOT__ . "/Views/Requests/index.php");
}



// include_once(__ROOT__ . "/Views/Requests/index.php");
