<html>
<body>
<style>
.select-style {
    border: 1px solid #ccc;
    border-radius: 3px;
    overflow: hidden;
    background:red;
}

.select-style select {
    padding: 15px;
    width: 100%;
	background:#00FA9A;
    border: none;
    box-shadow: none;
    background: transparent;
    background-image: none;
    -webkit-appearance: none;
}

.select-style select:focus {
	background:#00FA9A;
    outline: none;
}
</style>
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname =   `market`;
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$user=$_GET["Uid"];
$pass=$_GET["pas"];
$sql="select users.name from `market`.`users` where mobil='$user' and Password='$pass'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if($count==1)
{
$_SESSION['user_name']= $user; 
	$_SESSION['password']= $pass; 
/*echo" <form  action='/tem/temp.php' metnod='get'>
<div class='select-style'> 
<select name='marke'>
<optgroup label='Markets'>
<option value='0'>---Select Market---</option>
<option value='Palani'>---Palani---</option>
<option value='Pollachi'>---Pollachi---</option>
<option value='Udumalai'>---Udumalai---</option>
<option value='Dindigul'>---Dindigul---</option>
<option value='Trippur'>--Trippur---</option>
<option value='Dharapuram'>--Dharapuram---</option>
</optgroup>
</select></div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type='submit'>update</button>
</form>";*/
header('location:\date\tf-free-no.4\index.php');

}
else
{
	header('location:login.html');
}
?>
</body>
</html>