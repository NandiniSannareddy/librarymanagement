          
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
            
            padding: 8px 4px;
            text-align: center;
            word-wrap: break-word;
        }
         tr:nth-child(odd) {
    background-color:#D4F1F4; /* Lighter gray background color */
}
 #image{
    width:200px;
    height:200px;
}
#book{
    color:#B95C50;
    font-size:2rem;
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
        
        <center id="book"> Books </center> <br> <br>
        <div>
        <table border="1">
              
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Author</th>
                <th>Link</th>
               
            </tr>
            
            
            <?php
               while($row=mysqli_fetch_assoc($result))
                {
                   $id= $row['id'];
            ?> <tr>
                
                <td > <?php echo '<img src="data:image;base64, '.base64_encode($row['image']).' " id="image" >' ?>  </td>   
                <td style="max-width: 200px;"> <?php echo $row['title'] ?></td>
                <td > <?php echo $row['author'] ?> </td>
                <td > <?php echo '<a href=" '.$row['link'].' "> click here </a>' ?> </td>
                
                 </tr>
            <?php
               }
            ?>
                
           
        </table>
        </div>
     
    </body>
</html>

