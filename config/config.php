<?php
// $conn = mysqli_connect('localhost', 'Adiba', 'admin123?', 'project_storage');

// //Check connection to db
// if(!$conn){
// echo 'connect error: '. mysqli_connect_error();
// }

$host= "Localhost";
$user="root";
$password="";
$project_name ="project_storage";

$conn = mysqli_connect($host, $user,$password, $project_name);
 if (!$conn){
   echo "not cnnected";
 }

?>