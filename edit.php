<?php

$connect= mysqli_connect('localhost', 'root', '', 'library_management');


  
$id =$_GET['id'];

$imagename=  addslashes($_FILES['photo']['name']);
$pic=  addslashes(file_get_contents($_FILES['photo']['tmp_name']));


$query=mysqli_query($connect, "UPDATE books SET  image='$pic'  WHERE id='$id'; ");

if($query==true) {
    header("Location:viewBooks.php");
}
  
else {
    echo "some error";
}

?>
