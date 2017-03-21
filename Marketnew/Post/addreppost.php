<html>
<body>
<style>
</style>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname =   `market`;
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name=$_GET["repid"];
$pname=$_GET["name1"];
$pname1=$_GET["post1"];
$email=$_GET["email"];
$date=date("y-m-d");
if($pname!=null){
$sql="INSERT INTO `market`.`replay` (`postid`, `replay`, `name`, `date`,`email`) VALUES ('$name', '$pname1', '$pname', '$date','$email');";
if(mysqli_query($conn,$sql)==true){
	echo"<div class='tes1'>Sucess </div>";
}
else{
	echo"<div class='tes1'>Something Went Wrong</div>";
}}
else{
	echo"<div class='tes1'>Something Went Wrong</div>";
}
?>
</body>
</html>