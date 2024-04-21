<?php 

$connect= mysqli_connect('localhost', 'root', '', 'library_management');





   $id =$_GET['GetId'];
$query=mysqli_query($connect, "SELECT * FROM books WHERE ID='$id' ");



while($row=mysqli_fetch_assoc($query))
{
    $id=$row['id'];
    $title= $row['title'];
    $author= $row['author'];
    $link= $row['link'];
    $image= $row['image'];
    
}

?>



<!DOCTYPE html>

<html>
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        h2 {
            text-align: center;
            margin-top: 50px;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 15px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    </head>
    <body>
        <h2>Add new books</h2>
    <form  method="POST" enctype="multipart/form-data">
        <label >Book Title:</label><br>
        <input type="text" id="name" name="title" value="<?php echo $title ?>"><br><br>
        
          <label >Author:</label><br>
        <input type="text" id="author" name="author" value="<?php echo $author ?>" ><br><br>
        
         <label >Provide link:</label><br>
        <input type="text" id="link" name="link" value="<?php echo $link ?>" ><br><br>
        
     <!--  <label >photo:</label><br>
        <input type="text" id="photo" name="photo" value="<?php echo ''?>" ><br><br>-->
       
        <input type="submit" value="Submit" name='submit' formaction="updatedetails.php?id=<?php echo $id  ?>">
       
    </form>
        
        
        
        
        
    </body>
    
</html>



