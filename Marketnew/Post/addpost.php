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
$name=$_GET["name1"];
$pname=$_GET["post1"];
$email=$_GET['email'];
$subject=$_GET['subject'];
$date11=date("y-m-d");
$pid=$name+$name;
if($pname!=null){
$sql="INSERT INTO `market`.`post` (`name`, `date`, `post`, `postid`,`subject`,`email`) VALUES ('$name', '$date11', '$pname', '$pid','$subject','$email')";
if(mysqli_query($conn,$sql)==true){
	echo"<div class='tes1'>Sucess your product ID:{$pid}</div>";
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