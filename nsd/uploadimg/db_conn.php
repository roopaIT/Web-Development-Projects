<?php
$conn = mysqli_connect("localhost","root","","student");
if($conn == false){
	die("Connect Error :".mysqli_connect_error());
}
?>