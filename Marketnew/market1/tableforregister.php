<html>
<body>
<style>
body{
	background:	#98FB98;
}
table { 
  width: 90%; 
  margin-left:5%;
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background:#556B2F; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}

@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 4000px)  {

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}
	
	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
	}
	
	/*
	Label the data
	*/
	td:nth-of-type(1):before { content: "Product Name"; }
	td:nth-of-type(2):before { content: "Name"; }
	/*td:nth-of-type(3):before { content: "Product ID"; }*/
	td:nth-of-type(3):before { content: "Product Prize"; }
	td:nth-of-type(4):before { content: "Mobile"; }
	td:nth-of-type(5):before { content: "Address"; }
	td:nth-of-type(6):before { content: "Postal"; }
	td:nth-of-type(7):before { content: "City"; }
	td:nth-of-type(8):before { content: "Discription"; }
	td:nth-of-type(9):before { content: "Date Registered"; }
	
}

#myInput1 {
  background-image: url('search.png');
  background-size:30px;
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 90%;
  margin-left:5%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
  background-color: rgb(0,0,0); 
    background-color: rgba(0,0,0,0.4);
}
.h2{
	color:green;
	text-align:center;
	
}
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
$sql="SELECT `product_id`,`name`, `pname`, `pprize`, `mobile`,`address`,`postal`,`city`,`pdiscrip`, `date`, `byed` FROM `market`.`product` WHERE 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
		echo"<h2 class='h2'><br>Registered Product Datails TamilNadu</h2>";
		echo"<input type='text' id='myInput1' onkeyup='myFunct1()' placeholder='Search for Product..' title='Type in a name'>";
  echo"<div class='tbl-header'>";
echo"<table cellpadding='0' cellspacing='0' border='0'>
  <thead>
  <tr>
    
    <th>Product Name</th>
	<th>Name</th>
	 <th>Product Prize</th>
	<th>Mobile</th>
	<th>Address</th>
	<th>Postal</th>
	<th>City</th>
	<th>Product Discription</th>
	<th>Date Registered</th>
	<th></th></thead></table></div>";
	echo" <div class='tbl-content'>";
  echo"<table  id='myTable1'  cellpadding='0' cellspacing='0' border='0'><tbody>";
  while($row = $result->fetch_assoc()) {
	echo"<tr>
	<td>{$row['pname']}</td>
	<td>{$row['name']}</td>
   <td>{$row['pprize']}</td>
  <td>{$row['mobile']}</td>
  <td>{$row['address']}</td>
   <td>{$row['postal']}</td>
    <td>{$row['city']}</td>
  <td>{$row['pdiscrip']}</td>
  <td>{$row['date']}</td>";
  if($row['byed']==null)
  {
  echo"<td><button class='but' >Bye</button></td>";
  }
  else
  {
	  echo"<td><font color='red'> Product byed</font></td>";
  }
  echo"</tr>";   
	}
	echo"</tbody>
    </table>
  </div>";
	}
?>	
</body>
<script>
function myFunct1() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput1");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable1");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</html>