<?php
define('__ROOT__', dirname(dirname(dirname(__FILE__))));
include_once(__ROOT__ . '/Managers/GestionService.php');
require_once(__ROOT__ . '/Managers/GestionRates.php');
$GestionRates = new GestionRates;
$getDepartment = $GestionRates->getDepartment();
$GestionServices = new GestionServices();

if (isset($_GET['Id_Service'])) {
    $service = $GestionServices->RechercherParId($_GET['Id_Service']);
}
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}
if (isset($_POST['Edit'])) {
    $id = $_GET['Id_Service'];
    $nom = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $GestionServices->Edit($id, $nom, $description, $price);
    header("Location: index.php?Id_department=" . $id);
}
include_once(__ROOT__ . '/Views/Service/editer.php');
