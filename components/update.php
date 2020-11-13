<?php    

include '../config/config.php';

$id = $_GET['id'];
$updatequery = "UPDATE books SET ID=[value-1],title=[value-2],author=[value-3],
categories=[value-4], created_record=[value-5] WHERE 1 id=$id";

$result = mysqli_query($conn, $updatequery);
header('location: ../bookstodo.php');

?>