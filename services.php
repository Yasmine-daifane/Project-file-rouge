<?php 
include "/xampp/htdocs/Project-file-rouge/connect.php";


$json_file = file_get_contents('services.json');
$services = json_decode($json_file, true);
$c=0;
foreach ($services as $one) {

    echo "<pre>";
    var_dump($one);
    echo "</pre>";

    $name = $one['name'];
    $description = $one['description'];
    $price = $one['price'];
    $id =$one ['Id_department'];
   


    $sql = "INSERT INTO `service`(`name`, `description`, `price`,`Id_department`) VALUES ('$name','$description','$price', $id)";

    $conn->exec($sql);
    $c++;
    echo $c;
}

$conn = null;
