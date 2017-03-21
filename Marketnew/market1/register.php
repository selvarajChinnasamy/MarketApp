<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname =   `market`;
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name=$_GET["name"];
$pname=$_GET["pname"];
$pprize=$_GET["pprize"];
$mobile=$_GET["mobile"];
$postal=$_GET["postal"];
$address=$_GET["address"];
$city=$_GET["city"];
$pdiscrip=$_GET["pdiscrip"];
$date=date("y-m-d");
$product_id=$mobile+$date;
if($name!=null){
$sql="INSERT INTO `market`.`product` (`product_id`, `name`, `pname`, `pprize`, `mobile`, `address`, `postal`, `city`, `pdiscrip`, `date`, `byed`) VALUES ('$product_id', '$name', '$pname', '$pprize', '$mobile', '$address', '$postal', '$city', '$pdiscrip', '$date', '')";
if(mysqli_query($conn,$sql)==true){
	echo"<div style='color:green;font-size:15px'>Sucess your product ID:{$product_id}</div>";
}
else{
	echo"<div style='color:red;font-size:15px'>Something Went Wrong</div>";
}}
else{
	echo"<div style='color:red;font-size:15px'>Something Went Wrong</div>";
}
?>
</body>
</html>