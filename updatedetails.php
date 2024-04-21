<?php

$connect= mysqli_connect('localhost', 'root', '', 'library_management');


   
$id =$_GET['id'];
$title= $_POST['title'];
$author= $_POST['author'];
$link= $_POST['link'];
/*$imagename=  addslashes($_FILES['photo']['name']);
$image=  addslashes(file_get_contents($_FILES['photo']['tmp_name']));*/


$query=mysqli_query($connect, "UPDATE books SET   title='$title', author='$author', link='$link' WHERE id='$id'; ");

if($query==true) {
    header("Location:viewBooks.php");
}
else {
    echo "some error";
}

?>
