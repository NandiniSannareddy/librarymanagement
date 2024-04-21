<?php

$connect=mysqli_connect("localhost", "root", "", "library_management");


   /* $title=$_POST['title'];
    $author=$_POST['author'];
    $photo=$_FILES['photo']['name'];
    $link=$_POST['link'];*/

$result=mysqli_query($connect, "SELECT * FROM books ");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Table</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
         body{
            background-color: #B6E2D3;
            height:100vh;
         }
         div{
            display: flex;
            justify-content:center;
            align-items:center;
            margin:0;
          
        }
        table{
            border-collapse: collapse;           
            height:auto;
            
        }
       th, td {
            
            padding: 8px;
            text-align: center;
           
        }
         tr:nth-child(odd) {
    background-color:#D4F1F4; /* Lighter gray background color */
}
 #image{
    width:200px;
    height:200px;
}
#btn{
    padding:2% 3%;
    
}
#btn1{
     padding:1% 2%;
     background-color:green;
     color:white;
     border-radius:25px;
     cursor:pointer;
}
@media(max-width:440px){
    div{
        font-size:0.5rem;
        
    }
     #image{
       width:100px;
        height:100px;
     }
    th, td{
        padding:2px;
    }
    table{
        height: auto;
        width:100%;
    }
}
    </style>
    </head>
    <body>
        <form>
            <div id="btn">  <button id="btn1" formaction="addbooks.html">Add new books </button> </div>  
        </form>
        <div>
        <table border="1">
              
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Author</th>
                <th>Link</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            
            
            <?php
               while($row=mysqli_fetch_assoc($result))
                {
                   $id= $row['id'];
            ?> <tr>
                
                <td > <?php echo '<img src="data:image;base64, '.base64_encode($row['image']).' " id="image" >' ?> <br> <a href='editimage.php?id=<?php echo $id ?>'  style='background-color:green; color:white; text-decoration: none;'>edit image'</a> </td>   
                <td> <?php echo $row['title'] ?> </td>
                <td> <?php echo $row['author'] ?> </td>
                <td> <?php echo '<a href=" '.$row['link'].' "> click here </a>' ?> </td>
                <td> <a href="updatedata.php?GetId=<?php echo $id ?> "> edit</a> </td>
                <td><a href="deletebook.php?id=<?php echo $id ?>"> Delete </a> </td>
                 </tr>
            <?php
               }
            ?>
                
           
        </table>
        </div>
     
    </body>
</html>

