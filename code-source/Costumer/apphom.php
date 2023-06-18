


<style>
.card {
    width: 200px;
    height: 150px;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    margin: 10px;
    box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    transition: transform 0.3s ease-in-out;
}

.card:hover {
    transform: scale(0.95);
}
</style>

<?php
session_start();
// echo "<pre>";
// var_dump($_SESSION);
// echo "<pre/>";
$Id_costumer = $_SESSION['Id_costumer'];
// echo $Id_apprenant_ ; 
include ("/xampp/htdocs/Project-file-rouge/connect.php");

include ("/xampp/htdocs/Project-file-rouge/code-source/Costumer/Entity/class.php");





// Assuming you have a database connection object named $conn

// Fetch all department names from the "department" table
$sql = "SELECT name FROM department";
$result = $conn->query($sql);

// Display department names as cards
while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $departmentName = $row['name'];
    echo '<div class="card">';
    echo '<div class="card-body">';
    echo $departmentName;
    echo '</div>';
    echo '</div>';
}







?>