


<html>
<head>
     <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500;700&display=swap" rel="stylesheet">
    <style>
        body{
            background-image:url(https://www.itl.cat/pngfile/big/39-394904_edit-photos-backgrounds-for-photoshop-editing-hd-wallpaper.jpg);
            background-size: cover;
            color:navy;
            text-align: center;
            font-size:50px;
            padding-top:120px;
            font-family:dancing script;
        }
    </style>
</head>
<body>
<?php
    if ($_POST) {
        $x = $_POST["s1"];
        $sum = 0;
        $alphabets = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5, 'f' => 6, 'g' => 7, 'h' => 8, 'i' => 9, 'j' => 1, 'k' => 2, 'l'=>3,
            'm' => 4, 'n' => 5, 'o' => 6, 'p' => 7, 'q' => 8, 'r' => 9,'s' => 1, 't' => 2, 'u' => 3, 'v' => 4, 'w' => 5, 'x' => 6,'y' => 7, 
            'z' => 8];
        for ($i = 0; $i < strlen($x); $i++)
         {
            $y= $x[$i];
            if (array_key_exists($y, $alphabets)) 
            {
                $sum += $alphabets[$y];
            }
        }
        echo "<h1><p>Your Numerology Number for $x is: $sum</p></h1>";
    }
    ?>
</body>
</html>
