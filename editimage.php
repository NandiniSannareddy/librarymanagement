<?php
$connect= mysqli_connect('localhost', 'root', '', 'library_management');

$id=$_GET['id'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <style>
            body{
                height:100vh;
                display:flex;
                justify-content:center;
                align-items:center;
                background-color:#F9F6F0;
                
            }
            form{
                border:2px solid white;
                width:auto;
                background-color:#F9F9FB;
                height:40vh;
                padding:8px;
                box-shadow: 10px 15px whitesmoke ; 
            }
            center{
                font-size:2rem;
                color:#6F5B3E;
            }
        </style>
    </head>
    <body>
        
        <form enctype="multipart/form-data" method="POST">
            <center> UPload new image </center> <br> <br>
            <input type='file' name="photo">
            <br> <br>
            <input type='submit' formaction="edit.php?id=<?php echo $id ?>">
        </form>
    </body>
</html>
