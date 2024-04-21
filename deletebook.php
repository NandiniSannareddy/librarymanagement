<?php

$connect = mysqli_connect('localhost', 'root', '', 'library_management');

$id= $_GET['id'];


$delete= mysqli_query($connect, "DELETE FROM books WHERE id='$id' ");

if($delete==true){
    header("Location:viewBooks.php");
}
else{
    echo 'erro';
}

?>


