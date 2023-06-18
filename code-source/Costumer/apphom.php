<?php
session_start();
// echo "<pre>";
// var_dump($_SESSION);
// echo "<pre/>";
$Id_costumer = $_SESSION['Id_costumer'];
// echo $Id_apprenant_ ; 
include ("/xampp/htdocs/Project-file-rouge/connect.php");

include ("/xampp/htdocs/Project-file-rouge/code-source/Costumer/Entity/class.php");

?>