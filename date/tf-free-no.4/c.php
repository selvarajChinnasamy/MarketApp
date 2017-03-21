<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>


</head>
<style>
h1{
	text-align:center;
	color:green;
}
h3{
	text-align:center;
	color:green;
}
.button {
    background-color: #4CAF50; 
    border: none;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    margin: 4px 2px;
    cursor: pointer;
	font-size: 10px;
}
</style>
<body style="background-color:#8FBC8F;">
<?php
session_start();
$user=$_SESSION['user_name']; 
$servername = "localhost";
$username = "root";
$password = "";
$dbname =   `market`;
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sqll="SELECT `name`  FROM `market`.`users` WHERE `mobil`='$user'";
$result=mysqli_query($conn,$sqll);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$name=$row['name'];
?>
<br><br>
<div class="container">
<h1>Market Selection</h1>
<h3>Hi! <?php echo"{$name}"; ?> Select Your Market</h3>

<form  action='temp.php' method='get'>
<select name='marke'  class="selectpicker" data-style="btn-info" multiple data-max-options="1" data-live-search="true">
    <optgroup  label='Dindigul' >
<option value='Palani'>Palani</option>
<option value='Pollachi'>Pollachi</option>
<option value='Udumalai'>Udumalai</option>
<option value='Dindigul'>Dindigul</option>
<option value='Trippur'>Trippur</option>
<option value='Dharapuram'>Dharapuram</option>
</optgroup>
  </select>
 <button class="button" type='submit'>update</button>
</form>
</div>
</body>
</html>