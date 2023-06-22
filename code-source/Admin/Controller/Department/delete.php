<?php
define('__ROOT__', dirname(dirname(dirname(__FILE__))));
include_once(__ROOT__ . '/Managers/GestionDepartment.php');

if (isset($_GET['Id_department'])) {
    // Trouver tous les employés depuis la base de données 
    $GestionDepartments = new GestionDepartments();
    $id = $_GET['Id_department'];
    $GestionDepartments->Delete($id);
    header('Location: index.php');
}

