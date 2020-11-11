<?php 
$email = $name = $batch = ''; 
$errors = array('email'=> '', 'name'=> '', 'batch'=> '');

//Check validation

if(isset($_POST['submit'])){
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

//check batch name

if(empty($_POST['batch-name'])) {
// $batch = $_POST['batch-name'];
$errors['batch'] = "Batch Name must be Required!";
echo '<script type="text/javascript">';
echo 'setTimeout(function () { swal("OOPs!","Batch Name must be Required!", "warning");';
echo '}, 500);</script>';
} 
else{
$batch = $_POST['batch-name'];
}
if(!array_filter($errors)){
    echo '<script type="text/javascript">';
    echo 'setTimeout(function () { swal("Congratz","Successfully Sumit Info", "success");';
    echo '}, 500);</script>';
    header('Location: index.php');
}
}



?>


<!DOCTYPE html>
<html lang="en">

<?php include('templates/header.php')?>

<section class="container grey-text ">
    <h4 class="center">Add Information</h4>
    <form action="add.php" method="POST" class=" deep-purple lighten-5 z-depth-2">
        <label for="email" class="grey-text text-darken-4">Your Email:</label>
        <input type="text" name="email" placeholder="Enter your email" value="<?php echo $email ?>">
        <label for=" name" class="grey-text text-darken-4">Your Name:</label>
        <input type="text" name="name" placeholder="Enter you name" value="<?php echo $name ?>">
        <label for=" batch-name" class="grey-text text-darken-4">Batch Name:</label>
        <input type="text" name="batch-name" placeholder="Enter your batch" value="<?php echo $batch ?>">
        <div class="center">
            <input type="submit" value="submit" name="submit" class="btn light-blue darken-4 z-depth-0">
        </div>
    </form>
</section>

<?php include('templates/footer.php')?>

</html>