<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname =   `market`;
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$Name=$_GET["name"];
$Userid=$_GET["Usid"];
$Pass=$_GET["paas"];
if($Name!=null){
$sql="INSERT INTO `market`.`users` (`name`, `password`, `mobil`) VALUES ('$Name','$Pass', '$Userid')";
if(mysqli_query($conn,$sql)==true)
echo"<div style='color:green;font-size:15px'>You Have Signed In Sucessfully</div>";
else
	echo"<div style='color:red;font-size:15px'>Your datas has somr error!</div>";
}
else{
	echo"<div style='color:red;font-size:15px'>Your datas has somr error!</div>";
}
?>