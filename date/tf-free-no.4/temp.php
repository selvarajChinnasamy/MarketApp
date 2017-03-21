<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/css/bootstrap-select.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.5/js/bootstrap-select.min.js"></script>
</head>
<title>Market</title>

<body style="background-color:powderblue;">
<style>
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
fieldset{
	border:1px solod #008B8B;
	min-height:500px;
	min-width:100px;
	max-width:450px;
	
	}
.button1 {
    border: none;
    color: red;
    text-align: center;
	  margin: 8px;
	font-size: 15px;
}
h3{
	text-align:center;
	color:green;
}
</style>

    
	<?php
session_start();
$user=$_SESSION['user_name']; 
$val=$_GET['marke'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname =   `market`;
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$date=date('y-m-d');
$sql="SELECT `market`.`market` FROM `market`.`market` WHERE `market`.`date`='$date'";
$result=mysqli_query($conn,$sql);
 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
/*echo $count;*/
if($count==000000)
{
$sql="UPDATE  `market`.`market` SET  `market`.`date` = '$date',
`Tomato` =  '0',
`Carrot` =  '0',
`Brinjal` =  '0',
`Ladiesfinger` =  '0',
`Beans` =  '0',
`Coconut` =  '0' WHERE market =  'Palani'";
$conn->query($sql);
$sql="UPDATE  `market`.`market` SET  `market`.`date` = '$date',
`Tomato` =  '0',
`Carrot` =  '0',
`Brinjal` =  '0',
`Ladiesfinger` =  '0',
`Beans` =  '0',
`Coconut` =  '0' WHERE market =  'Dindigul'";
$conn->query($sql);
$sql="UPDATE  `market`.`market` SET  `market`.`date` = '$date',
`Tomato` =  '0',
`Carrot` =  '0',
`Brinjal` =  '0',
`Ladiesfinger` =  '0',
`Beans` =  '0',
`Coconut` =  '0' WHERE market =  'Udumalai'";
$conn->query($sql);
$sql="UPDATE  `market`.`market` SET  `market`.`date` = '$date',
`Tomato` =  '0',
`Carrot` =  '0',
`Brinjal` =  '0',
`Ladiesfinger` =  '0',
`Beans` =  '0',
`Coconut` =  '0' WHERE market =  'Pollachi'";
$conn->query($sql);
$sql="UPDATE  `market`.`market` SET  `market`.`date` = '$date',
`Tomato` =  '0',
`Carrot` =  '0',
`Brinjal` =  '0',
`Ladiesfinger` =  '0',
`Beans` =  '0',
`Coconut` =  '0' WHERE market =  'Trippur'";
$conn->query($sql);
$sql="UPDATE  `market`.`market` SET  `market`.`date` = '$date',
`Tomato` =  '0',
`Carrot` =  '0',
`Brinjal` =  '0',
`Ladiesfinger` =  '0',
`Beans` =  '0',
`Coconut` =  '0' WHERE market =  'Dharapuram'";
$conn->query($sql);
}
?>
<?php
$sqll="SELECT `name`  FROM `market`.`users` WHERE `mobil`='$user'";
$result=mysqli_query($conn,$sqll);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$name=$row['name'];
?>
   <h3 class="w3-hide-medium w3-hide-small w3-xlarge">Hi!  <?php echo"{$name}";?> your products</h3>

<?php 

$sql="SELECT `Beans`, `Brinjal`, `Carrot`, `Coconut`, `Ladiesfinger`, `Tomato` FROM `market`.`save` WHERE `Phone`='$user' and `market`='$val' and `date`='$date'";
$result=mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$sql="SELECT `Phone` FROM `market`.`submit` WHERE `Phone`='$user' and `market`='$val' and `date1`='$date'";
	$result=mysqli_query($conn,$sql);
 $row1 = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<fieldset align="center">
<legend><h3>Market Product Selection</h3></legend>
<form action="#" method="post">
<select name="Color[]" class="selectpicker" data-style="btn-info" multiple data-max-options="8" data-live-search="true">
    <optgroup label="Vetables">
      
<option value="Tomato" <?php if($row['Tomato']=='1'){echo"selected";} /*if($row1['Phone']!=null){echo"disabled";}*/?>>Tomato</option>
<option value="Carrot" <?php if($row['Carrot']=='1'){echo"selected";}?>>Carrot</option>
<option value="Brinjal" <?php if($row['Brinjal']=='1'){echo"selected";}?>>Brinjal</option>
<option value="Ladiesfinger" <?php if($row['Ladiesfinger']=='1'){echo"selected";}?>>Ladies Finger</option>
<option value="Beans" <?php if($row['Beans']=='1'){echo"selected";}?>>Beans</option>
<option value="Coconut" <?php if($row['Coconut']=='1'){echo"selected";}?>>Coconut</option>
</optgroup>
<?php  
if ($row1['Phone']==null){
echo"<input type='submit' class='button' name='submit1' value='Save'/>
<input class='button' type='submit' name='submit' value='Submit' />";
} else
{
echo"<input  class='button1'  value='Already Submitted !' disabled/>";
}
?>
</select>
</form>
</fieldset>
<?php
if(isset($_POST['submit'])){
if(!empty($_POST['Color'])){
	$sql="SELECT `Phone` FROM `market`.`save` WHERE `Phone`='$user' and `market`='$val' and `date`='$date'";
	$result=mysqli_query($conn,$sql);
 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 if($row['Phone']==null){
	$sql="INSERT INTO `market`.`save` (`Phone`, `market`, `Beans`, `Brinjal`, `Carrot`, `Coconut`, `Ladiesfinger`, `Tomato`, `date`) VALUES ('$user', '$val', '0', '0', '0', '0', '0', '0', '$date');";
	mysqli_query($conn,$sql);
 }
	$sql="SELECT `Phone` FROM `market`.`submit` WHERE `Phone`='$user' and `market`='$val' and `date1`='$date'";
	$result=mysqli_query($conn,$sql);
 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 if($row['Phone']==null){
	$sql="INSERT INTO `market`.`submit` (`Phone`, `market`, `Beans`, `Brinjal`, `Carrot`, `Coconut`, `Ladiesfinger`, `Tomato`, `date1`) VALUES ('$user', '$val', '0', '0', '0', '0', '0', '0', '$date');";
	mysqli_query($conn,$sql);
 }
	echo"<div class='notice-success'>
  Woo hoo! Congratulations, you did it!</div>";
foreach($_POST['Color'] as $selected){
	if($selected=='Tomato')
	{
		$sql="UPDATE `market`.`market` SET `Tomato`=Tomato+1,`date`='$date' WHERE market='$val'";
		mysqli_query($conn,$sql);
		$sql="UPDATE `market`.`submit` SET `Tomato`='Tomato' WHERE market='$val' and `date1`='$date' and `Phone`='$user'";
		mysqli_query($conn,$sql);
		$sql="UPDATE `market`.`save` SET `Tomato`=1 WHERE market='$val' and `date`='$date' and `Phone`='$user'";
		mysqli_query($conn,$sql);
	}
	if($selected=='Carrot')
	{
		$sql="UPDATE `market`.`market` SET `Carrot`=Carrot+1,`date`='$date' WHERE market='$val'";
		mysqli_query($conn,$sql);
		$sql="UPDATE `market`.`submit` SET `Carrot`='Carrot' WHERE market='$val' and `date1`='$date' and `Phone`='$user'";
		mysqli_query($conn,$sql);
		$sql="UPDATE `market`.`save` SET `Carrot`=1 WHERE market='$val' and `date`='$date' and `Phone`='$user'";
		mysqli_query($conn,$sql);
	}
	if($selected=='Brinjal')
	{
		$sql="UPDATE `market`.`market` SET `Brinjal`=Brinjal+1,`date`='$date' WHERE market='$val'";
		mysqli_query($conn,$sql);
		$sql="UPDATE `market`.`submit` SET `Brinjal`='Brinjal' WHERE market='$val' and `date1`='$date' and `Phone`='$user'";
		mysqli_query($conn,$sql);
		$sql="UPDATE `market`.`save` SET `Brinjal`=1 WHERE market='$val' and `date`='$date' and `Phone`='$user'";
		mysqli_query($conn,$sql);
	}
	if($selected=='Ladiesfinger')
	{
		$sql="UPDATE `market`.`market` SET `Ladiesfinger`=Ladiesfinger+1,`date`='$date' WHERE market='$val'";
		mysqli_query($conn,$sql);
		$sql="UPDATE `market`.`submit` SET `Ladiesfinger`='Ladies Finger' WHERE market='$val' and `date1`='$date' and `Phone`='$user'";
		mysqli_query($conn,$sql);
		$sql="UPDATE `market`.`save` SET `Ladiesfinger`=1 WHERE market='$val' and `date`='$date' and `Phone`='$user'";
		mysqli_query($conn,$sql);
	}
	if($selected=='Beans')
	{
		$sql="UPDATE `market`.`market` SET `Beans`=Beans+1,`date`='$date' WHERE market='$val'";
		mysqli_query($conn,$sql);
		$sql="UPDATE `market`.`submit` SET `Beans`='Beans' WHERE market='$val' and `date1`='$date' and `Phone`='$user'";
		mysqli_query($conn,$sql);
		$sql="UPDATE `market`.`save` SET `Beans`=1 WHERE market='$val' and `date`='$date' and `Phone`='$user'";
		mysqli_query($conn,$sql);
	}
	if($selected=='Coconut')
	{
		$sql="UPDATE `market`.`market` SET `Coconut`=Coconut+1,`date`='$date' WHERE market='$val'";
		mysqli_query($conn,$sql);
		$sql="UPDATE `market`.`submit` SET `Coconut`='Coconut' WHERE market='$val' and `date1`='$date' and `Phone`='$user'";
		mysqli_query($conn,$sql);
		$sql="UPDATE `market`.`save` SET `Coconut`=1 WHERE market='$val' and `date`='$date' and `Phone`='$user'";
		mysqli_query($conn,$sql);
	}
	
}
}
}
?>
<?php
if(isset($_POST['submit1']))
{
	
	if(!empty($_POST['Color'])){
		
	$sql="SELECT `Phone` FROM `market`.`save` WHERE `Phone`='$user' and `market`='$val' and `date`='$date'";
	$result=mysqli_query($conn,$sql);
 $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 if($row['Phone']==null){
	$sql="INSERT INTO `market`.`save` (`Phone`, `market`, `Beans`, `Brinjal`, `Carrot`, `Coconut`, `Ladiesfinger`, `Tomato`, `date`) VALUES ('$user', '$val', '0', '0', '0', '0', '0', '0', '$date');";
	mysqli_query($conn,$sql);
 }
	echo"<div class='notice-success'>
  Woo hoo! Congratulations, you save it!</div>";
foreach($_POST['Color'] as $selected){
	if($selected=='Tomato')
	{
		$sql="UPDATE `market`.`save` SET `Tomato`=1 WHERE market='$val' and `date`='$date' and `Phone`='$user'";
		mysqli_query($conn,$sql);
	}
	if($selected=='Carrot')
	{
		$sql="UPDATE `market`.`save` SET `Carrot`=1 WHERE market='$val' and `date`='$date' and `Phone`='$user'";
		mysqli_query($conn,$sql);
	}
	if($selected=='Brinjal')
	{
		$sql="UPDATE `market`.`save` SET `Brinjal`=1 WHERE market='$val' and `date`='$date' and `Phone`='$user'";
		mysqli_query($conn,$sql);
	}
	if($selected=='Ladiesfinger')
	{
		$sql="UPDATE `market`.`save` SET `Ladiesfinger`=1 WHERE market='$val' and `date`='$date' and `Phone`='$user'";
		mysqli_query($conn,$sql);
	}
	if($selected=='Beans')
	{
		$sql="UPDATE `market`.`save` SET `Beans`=1 WHERE market='$val' and `date`='$date' and `Phone`='$user'";
		mysqli_query($conn,$sql);
	}
	if($selected=='Coconut')
	{
		$sql="UPDATE `market`.`save` SET `Coconut`=1 WHERE market='$val' and `date`='$date' and `Phone`='$user'";
		mysqli_query($conn,$sql);
	}
	
}
}
}
?>

  
 




</body>
</html>
