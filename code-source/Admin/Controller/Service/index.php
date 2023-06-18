<?php
// Controller 
include "../../Views/Layout/root.php";
require_once(__ROOT__ . '/Managers/GestionService.php');
require_once(__ROOT__ . '/Managers/GestionRates.php');
$GestionRates = new GestionRates;
$getDepartment = $GestionRates->getDepartment();

$gestionservice = new GestionServices();
$IsAjaxRequest = false;
 $Query = "";

if (isset($_GET['Id_department'])) {
    $id = $_GET['Id_department'];
} else {
    $id = $_POST['Id_department'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $IsAjaxRequest = true;
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

$results = $gestionservice->rechercherParNom($Query, $id);

$itemsPerPage = 6;
$totalItems = count($results);
$pagesNum = ceil($totalItems / $itemsPerPage);

$pages = $gestionservice->pages($results, $pagesNum, $itemsPerPage);

// View

if ($IsAjaxRequest) {
    include_once(__ROOT__ . "/Views/Service/index.data.php");
} else {
    include_once(__ROOT__ . "/Views/Service/index.php");
}
