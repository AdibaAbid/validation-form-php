<?php
include('./config/config.php');

$email = $name = $passwd = ''; 
$errors = array('email'=> '', 'name'=> '', 'batch'=> '', 'passwd'=> '');


//Check validation

if(isset($_POST['Signup'])){
//Check email  
if(empty($_POST['email'])) { 
  $errors['email']="An Email must be Required";
  echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("OOps!", "An Email must be Required!", "warning");';
  echo '}, 1000);</script>';
} else {
  $email = $_POST['email'];
  if (!filter_var($email,  FILTER_VALIDATE_EMAIL)){
  $errors['email']="An Email must be a valid email address";
  echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("OOPs!", "An Email must be a valid email address", "danger");';
  echo '}, 500);</script>';
  }
}

//Check name
if(empty($_POST['name'])) {
$errors['email'] = "Name must be Required!";
echo '<script type="text/javascript">';
echo 'setTimeout(function () { swal("OOPs!", "Name must be Required!", "warning");';
echo '}, 1000);</script>';

} else {
  $name = $_POST['name'];
  if (!preg_match(('/^[a-zA-z\s]+$/'),$name)){
  $errors['name']= "Must be a valid Name";
  echo '<script type="text/javascript">';
  echo 'setTimeout(function () { swal("OOPs!", "Must be a valid Name", "danger");';
  echo '}, 500);</script>';
  }
}

//check Password

if(empty($_POST['password'])) {
$errors['passwd'] = "Password Name must be Required!";
echo '<script type="text/javascript">';
echo 'setTimeout(function () { swal("OOPs!","Password must be Required!", "warning");';
echo '}, 500);</script>';
} 
else{
$passwd = $_POST['password'];
}
if(!array_filter($errors)){
    echo '<script type="text/javascript">';
    echo 'setTimeout(function () { swal("Congratz","Successfully Sumit Info", "success");';
    echo '}, 500);</script>';


$sql = "INSERT INTO userlogin(user_name, user_email, user_password)
VALUES ('$name', '$email', '$passwd')";

$response = mysqli_query($conn, $sql);
 if($response){
   $_SESSION['USER_LOGIN'] = $_POST['email'];
   echo "successful";
    header('Location: bookstodo.php');
 }else{
   echo 'data insert failed';
 }
   
}
}
?>


<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php')?>

<section class="container grey-text ">
    <h4 class="center">Login</h4>
    <form action="add.php" method="POST" class=" deep-purple lighten-5 z-depth-2">
        <label for=" name" class="grey-text text-darken-4">Your Name:</label>
        <input type="text" name="name" placeholder="Enter you name" value="<?php echo $name ?>">
        <label for="email" class="grey-text text-darken-4">Your Email:</label>
        <input type="text" name="email" placeholder="Enter your email" value="<?php echo $email ?>">
        <label for="password" class="grey-text text-darken-4">Password:</label>
        <input type="password" name="password" placeholder="Enter your password" value="<?php echo $passwd ?>">
        <div class="center">
            <input type="submit" value="login" name="Signup" class="btn light-blue darken-4 z-depth-0">
        </div>
    </form>
</section>

<?php include('templates/footer.php')?>

</html>