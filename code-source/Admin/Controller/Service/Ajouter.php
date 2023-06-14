<?php
define('__ROOT__', dirname(dirname(dirname(__FILE__))));

include_once(__ROOT__ . '/Managers/GestionService.php');
require_once(__ROOT__ . '/Managers/GestionRates.php');
$GestionRates = new GestionRates;
$getDepartment = $GestionRates->getDepartment();
// Trouver tous les employés depuis la base de données 
$GestionServices = new GestionServices();
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

if (isset($_POST['create'])) {
    echo "ilias is here";
    $service = new Services();
    $service->SetName($_POST['name']);
    $service->SetDescription($_POST['description']);
    $service->SetPrice($_POST['price']);
    echo "<pre>";
    var_dump($service);
    echo "</pre>";
    $GestionServices->Add($service, $id);
    // Redirection vers la page index.php
    header("Location: index.php?Id_department=" . $id);
}
include_once(__ROOT__ . '/Views/Service/Ajouter.php');
