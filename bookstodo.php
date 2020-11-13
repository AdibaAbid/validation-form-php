<!DOCTYPE html>
<html lang="en">

<?php
include('templates/header.php');
include('./config/config.php');

if(isset($_POST['submit'])){
//save data
$person = $_POST['person'];
$book = $_POST['book'];
$category = $_POST['category'];
$date = $_POST['date'];

$sql = "INSERT INTO books( title, author, categories, created_record)
VALUES ('$book', '$person', '$category', '$date')";

$response = mysqli_query($conn, $sql);
 if($response){
   echo "successful";
    // header('Location: bookstodo.php');
 }else{
   echo 'data insert failed';
 }

//Update data

$id = $_GET['id'];
$updatequery = "UPDATE books SET ID=[value-1],title=[value-2],author=[value-3],
categories=[value-4], created_record=[value-5] WHERE id=$id";

$result = mysqli_query($conn, $updatequery);
   
}

?>

<div class="container">
    <h1 class="center">Books Todo</h1>


    <div class="row  center">
        <form action="bookstodo.php" method="POST">
            <div>
                <div class="input-field">
                    <i class="material-icons prefix">book</i>
                    <input id="book" type="text" class="validate" name="book" value="<?php echo $book_id; ?>">
                    <label for="book">Book Name</label>
                </div>
                <div class="input-field ">
                    <i class="material-icons prefix">person</i>
                    <input id="person" type="text" class="validate" name="person">
                    <label for="person">Author</label>
                </div>
                <div class="input-field col s6">
                    <i class="material-icons prefix">insert_emoticon</i>
                    <input id="genre" type="text" class="validate" name="category">
                    <label for="genre">Genre</label>
                </div>

                <div class="input-field col s6">
                    <i class="material-icons prefix">access_time</i>
                    <input id="date" type="date" class="validate" name="date">
                    <label for="date">Inserted Date</label>
                </div>
            </div>
            <input class="waves-effect waves-light btn  indigo darken-3" name='submit' type='submit' value="Add Book">
        </form>
    </div>


    <table>
        <thead>
            <tr class='center'>
                <th>#</th>
                <th>Book Name</th>
                <th>Author Name</th>
                <th>Category Price</th>
                <th>Date</th>
                <th colspan='2'>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
        $import = "SELECT * FROM books";
        $result = mysqli_query( $conn, $import);
        $rows = mysqli_num_rows($result);
        while($res = mysqli_fetch_array($result)){
        // echo $res['author'] .'<br/>' ;
    ?>
            <tr>
                <td><?php echo $res['ID']?></td>
                <td><?php echo $res['title']?></td>
                <td><?php echo $res['author']?></td>
                <td><?php echo $res['categories']?></td>
                <td><?php echo $res['created_record']?></td>
                <td>
                    <a href="components/delete.php?id=<?php
                    echo $res['ID'];?>" class="waves-effect waves-light btn   red accent-2" type='button'
                        value="Update">Delete</a>
                    <a href="bookstodo.php?id=<?php
                    echo $res['ID'];?>" class="waves-effect waves-light btn  teal darken-3" type='button'
                        value="Delete">Update</a>
                </td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>

</div>

<?php include('templates/footer.php')?>

</html>