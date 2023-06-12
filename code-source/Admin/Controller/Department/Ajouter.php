<?php
define('__ROOT__', dirname(dirname(dirname(__FILE__))));

include_once(__ROOT__ . '/Managers/GestionDepartment.php');
// Trouver tous les employés depuis la base de données 
$GestionDepartments = new GestionDepartments();


if (!empty($_POST)) {
    $department = new Department();
    $department->SetName($_POST['nom']);
    $department->SetDescription($_POST['description']);
    $GestionDepartments->Add($department);
    // Redirection vers la page index.php
    header("Location: index.php");
}
include_once(__ROOT__.'/Views/Departement/Ajouter.php')
?>