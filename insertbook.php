<?php

$connect= mysqli_connect('localhost', 'root', '', 'library_management');
if(isset($_FILES['photo'])){
 
    $title=  addslashes($_POST['title']);
    $author=  addslashes($_POST['author']);
     $link=  addslashes($_POST['link']);
    $imagename=  addslashes($_FILES['photo']['name']);
    $image=  addslashes(file_get_contents($_FILES['photo']['tmp_name']));
    
    $insert=mysqli_query($connect, "INSERT INTO books (image, title, author, link) values ('$image','$title','$author','$link')");
    
    if( $insert==TRUE){
        header("Location:viewBooks.php");
    }
 else {
        echo 'error';
    }
}


?>




