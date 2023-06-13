<?php
define('__ROOT__', dirname(dirname(dirname(__FILE__))));
include_once(__ROOT__ . '/Managers/GestionService.php');


if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

if (isset($_GET['Id_Service'])) {
    // Trouver tous les employés depuis la base de données 
    $GestionServices = new GestionServices();
    $id = $_GET['Id_Service'];
    $GestionServices->delete($id);
   
    header("Location: index.php?Id_department=" . $id);

}
?>
    
