<?php
include('db_conn.php');
if (isset($_POST['submit'])){
    $file_name = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder='uploads1/'.$file_name;

    $query= mysqli_query($conn,"Insert into img1 (file) values('$file_name')");
    if(move_uploaded_file($tempname, $folder)){
        echo "<h2>File Uploaded Succcessfully</h2>";
    }else{
        echo"<h2>File Not Uploaded</h2>";  
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Image Upload</title>
    <style>
        body{
            background-image:url(https://th.bing.com/th/id/OIP.cE0PLwR8zfEwPiXLED2xowHaHa?rs=1&pid=ImgDetMain);
            background-size:cover;
        }.container{
            width: 550px;height:200px;border:solid black;
            margin: 100px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        button{
            background-color:black;font-size:25px;
            color:white;
           text-decoration: none;
            cursor: pointer;
            padding: 10px;
            border-radius: 4px;
            margin-left:200px;
        }a{
                 background-color:black;font-size:25px;
            color:white;
           text-decoration: none;
            cursor: pointer;
            padding: 10px;
            border-radius: 4px;
            margin-left:200px;    
              }
    </style>
</head>
<body>
    <div class="container">
    <form id="uploadForm" method="post"  enctype="multipart/form-data">
        <input  type="file" name="image"><br><br>
        <button  type="submit" name="submit"> Submit</button>
    </form><br><br>
    <a href="newpage.php">Logout</a>
   </div> 
   
</body>
</html>
