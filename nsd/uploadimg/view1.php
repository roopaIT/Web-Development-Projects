<html>
<head>
       <title>viewing the image</title>
       <style>
              body{
                  background-image:url(https://th.bing.com/th/id/R.4816f0a6a4b1a7e819657347b613e420?rik=P0%2fISa7IGp1rrg&riu=http%3a%2f%2fwallpapercave.com%2fwp%2f8jrntKh.jpg&ehk=jju02FTHr%2bbvsxwgcF%2b5aXIy1W1CnOo8Od6sDLHXNRE%3d&risl=&pid=ImgRaw&r=0);
                  background-size:cover;
              }
              a{
                 background-color:black;font-size:25px;
            color:white;
           text-decoration: none;
            cursor: pointer;
            padding: 10px;
            border-radius: 4px;
            margin-left:700px;    
              }
       </style>
</head>
<body>
 <?php
 include'db_conn.php';
        $res=mysqli_query($conn,"select * from img1");
        while($row = mysqli_fetch_assoc($res)){
        ?>
        <img src="uploads1/<?php echo $row['file'] ?> ">
        <?php }
 ?><br><br>
 <a href="newpage.php">Logout</a>
</body>
</html>