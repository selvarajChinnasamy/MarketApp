<?php
session_start();
$user=$_SESSION['user_name']; 
if($user==null){
	header('location:/Mainmarket/login/login.html');
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname =   `market`;
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$date=$_POST['date'];
$sqll="SELECT `name`  FROM `market`.`users` WHERE `mobil`='$user'";
$result=mysqli_query($conn,$sqll);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$name=$row['name'];
echo $user;
echo $name;
echo $date;
$sql0="SELECT `beans`, `brinjal`, `carrot`, `coconut`, `ladiesfinger`, `tomato`, `date1`, `market` FROM `market`.`submit` WHERE Phone='$user' and date1='$date'";
$result = $conn->query($sql0);

while($row = $result->fetch_assoc()) {
$colors = array("Beans", "Brinjal", "Carrot", "Coconut", "Ladies Finger", "Tomato"); 
$co =array("beans", "brinjal", "carrot", "coconut", "ladiesfinger", "tomato");
echo"<br>";echo $row['market'];echo"<br>";
foreach ($colors as $value) {
	foreach ($co as $coo){
	if($row[$coo]==$value)
    echo "$value <br>";
}}}
?>