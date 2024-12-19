<html>
<head>
    <title>Name Numerology Calculator</title>
    <script>
        function k(){
                var a=f1.one.value;
                if(a==""){
                alert("Enter your Name");
            }
        }
       </script>
       <style>
        body{
            background-image:url(https://th.bing.com/th/id/R.1c493538362acd38011d395f10f77d8c?rik=2budBrQz3idCIg&riu=http%3a%2f%2fwww.pixelstalk.net%2fwp-content%2fuploads%2f2016%2f06%2fDesktop-fall-backgrounds-images-download.jpg&ehk=CnDeu6L5cxzeZVGk40OBw4F%2bPN%2fWZBSKk1VHmw2T2%2fE%3d&risl=&pid=ImgRaw&r=0);
            background-size: cover;
            
        }
        form{
            background-color:cement; 
            color: white;
            border: 3px solid white;
            position: absolute;
            top: 50%;left:50%;
            transform: translate(-50%, -50%);
            width: 80%;
             padding: 20px;
           text-align: center;
        }
        h2{
            color:white;
            font-size:100px;
            padding-top:50px;
            text-align: center;
        }
        #one{
            background:black;
            color:white;
            font-size:20px;
        }label{
            font-size:20px;
        }
       </style>

</head>
<body>
    <h2>Name Numerology Calculator</h2>
    <form name="f1" method="post" action="numerology.php">
        <label>Enter your name: </label>
        <input type="text" name="s1" ><br><br>
        <input id="one" type="submit" value="submit" onclick='k()'>
    </form>
    
</body>
</html>




