<?php
define('__ROOT__', dirname(dirname(dirname(__FILE__))));
include_once(__ROOT__ . './Managers/GestionDepartment.php');

$GestionDepartments = new GestionDepartments();
require_once(__ROOT__ . '/Managers/GestionRates.php');
$GestionRates = new GestionRates;
$getDepartment = $GestionRates->getDepartment();

if (isset($_GET['Id_department'])) {
    $department = $GestionDepartments->GetDepartmentbyId($_GET['Id_department']);
}

if (isset($_POST['Edit'])) {
    $id = $_POST['Id_department'];
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $GestionDepartments->Edit($id, $nom, $description);
    header('Location: index.php');
}
include_once(__ROOT__ . '/Views/Departement/editer.php');
