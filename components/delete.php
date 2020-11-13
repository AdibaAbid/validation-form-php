<?php    

include '../config/config.php';

$id = $_GET['id'];
$delequery = "delete from books where id=$id";

$result = mysqli_query($conn, $delequery);
header('location: ../bookstodo.php');

?>