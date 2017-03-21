<!DOCTYPE html>
<html>
<title>Market </title>

<style>
body{background:#00FFFF}
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidenav to 120px */
.w3-sidenav {height:500px;text-align:center;width: 120px;background:#2F4F4F}
/* Add a left margin to the "page content" that matches the width of the sidenav (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}

h4 {
   text-align:center;
   padding:20px 0px 20px 0px;
   color: #a8a8a8;
   @include text-shadow(1px 1px 0 rgba(white, 1));
   
}
.c{
	position:relative;
	margin-left:0%;
}
.c1{
	position:relative;
	margin-left:10%;
}
.b{
	text-align:left;
	color: #a8a8a8;
	@include text-shadow(1px 1px 0 rgba(white, 1));
}
a{
	text-decoration:none;
	color:	#FFA07A;
}
.overlay {
    height: 12%;
    width:0%;
    position: fixed;
    z-index: 1;
	background-color:#FAFAD2;
    overflow-x: hidden;
    transition: 0.5s;
}

.overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
}

* {
  margin: 0;
  padding: 0;
}
 
nav {
  margin: 50px;
}
 
ul {
  overflow: auto;
  list-style-type: none;
}
 
li {
  height: 25px;
  float: left;
  margin-right: 0px;
  border-right: 1px solid #aaa;
  padding: 0 20px;
}
 
li:last-child {
  border-right: none;
}
 
li a {
  text-decoration: none;
  color:#FF4500;
  font: 20px/1 Helvetica, Verdana, sans-serif;
  text-transform: uppercase;
 
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  -ms-transition: all 0.5s ease;
  transition: all 0.5s ease;
}
 
li a:hover {
  color: #666;
}
 
li.active a {
  font-weight: bold;
  color: #333;
}

input {
    width: 93%;
	color:white;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid red;
	background: rgba(0, 0, 0, 0.6);
}
#reppost{
	width: 93%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid red;
	background: rgba(0, 0, 0, 0.6);
	
}
#post1{
	width: 93%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid red;
	background: rgba(0, 0, 0, 0.6);
	
}
</style>
<body>
<div id="myNav" class="overlay">
  <a href="javascript:void(0)" style="font-size:30px"class="closebtn" onclick="closeNav()">&times;</a>
  <ul>
    <li><a href="#addpos">Add Post</a></li>
    <li><a href="#addposs">Replay Post</a></li>
    <li><a href="#">Clients</a></li>
  
	</ul>
</div>
<span  style="color:red;font-size:30px;cursor:pointer;position:fixed" onclick="openNav()">&#9776;</span>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname =   `market`;
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT `post`,`postid`,`date` FROM `market`.`post` WHERE 1";
$result = $conn->query($sql);
echo"<div style='position:relative;margin-left:100px;max-width:1400px;'>";
while($row = $result->fetch_assoc()) {
      echo"<div class='c'><br><br>
        <h2><i class='fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal'></i>Github</h2>
        <div>
          <h5><b>Post ID:{$row['postid']}</b></h5>
          <h6>Date:{$row['date']}</h6>
          <p>{$row['post']}.</p>";
		  $pit=$row['postid'];
		  $sql1="SELECT  `replay`, `name`, `date` FROM `market`.`replay` WHERE `postid`='$pit'";
		  $result1 = $conn->query($sql1);
		  echo"</div>";
		  	echo"<div class='c1'><h3 class='b'>Comments</h3>";
			
		  while($row1 = $result1->fetch_assoc()) {
			  
	echo"<div>
        
          <h5><b>Name:{$row1['name']}</b></h5>
          <h6>Date:{$row1['date']}</h6>
          <p>{$row1['replay']}.</p></div>";
		  }
          echo"<hr></div></div>";
	
	/*echo"<br><br><button type='button' onclick='repinput()' id='butw'>Commands</button>&nbsp;<button type='button' id='butw' onclick='mnbvc()' >Replay</button>";
	echo"</div><br>";*/
}
?>

 
<div id="addpos">

 <h4>Add your Post`s hear</h4>
<form>
  <div class="half left cf">
    <input type="text" id="name1" name="name1" placeholder="Name">
    <input type="email" id="email" name="email" placeholder="Email address">
    <input type="text" id="subject" name="subject" placeholder="Subject">
  </div>
  <div>
   <br> <textarea   type="text" id="post1" name="post1" placeholder="Post"></textarea>
  </div>  
  <div id="ajaxDapos"></div>
  <input type="button" style="color:#FFA07A;font-size:15px" value="Submit" onclick="ajaxFunctapos()">
</form>
</div>

<div id="addposs">

 <h4>Add your Replay`s for the post`s hear</h4>
<form>
  <div class="half left cf">
  <input type="text" id="repid" name="repid" placeholder="Post id">
    <input type="text" id="repname" name="repname" placeholder="Name">
    <input type="email" id="repemail" name="repemail" placeholder="Email address">
  </div>
  <div>
   <br> <textarea   type="text" id="reppost" name="reppost" placeholder="Replay Message"></textarea>
  </div>  
  <div id="ajaxDaposs"></div>
  <input  type="button" style="color:#FFA07A;font-size:15px" value="Submit" onclick="ajaxFunctaposs()">
</form>
</div>

<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>If you have any Doubts Dont Hastiate to Contact me.</p>
  
  <p>Powered by <a href="#" target="_blank">selvaraj</a></p>
</footer>
	  </body>
	 <script language = "javascript" type = "text/javascript">
         <!--
            //Browser Support Code
            function ajaxFunctapos(){
               var ajaxRequest;  // The variable that makes Ajax possible!
               
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
               // Create a function that will receive data 
               // sent from the server and will update
               // div section in the same page.
          
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('ajaxDapos');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               
               // Now get the value from user and pass it to
               // server script.
          
				
               var name1 = document.getElementById('name1').value;
			   var post1 = document.getElementById('post1').value;
               	var email = document.getElementById('email').value;
				var subject = document.getElementById('subject').value;
			   var queryString = "?name1=" + name1;
			   var queryString = queryString+"&post1="+post1;
			     var queryString = queryString+"&email="+email;
				 var queryString = queryString+"&subject="+subject;
           
			   
		
			   
               ajaxRequest.open("GET", "addpost.php" + queryString, true);
			  /* alert(queryString);*/
			   
               ajaxRequest.send(null); 
			   
			   
            }
        
      </script>
	  <script language = "javascript" type = "text/javascript">
         <!--
            //Browser Support Code
            function ajaxFunctaposs(){
               var ajaxRequest;  // The variable that makes Ajax possible!
               
               try {
                  // Opera 8.0+, Firefox, Safari
                  ajaxRequest = new XMLHttpRequest();
               }catch (e) {
                  // Internet Explorer Browsers
                  try {
                     ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
                  }catch (e) {
                     try{
                        ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                     }catch (e){
                        // Something went wrong
                        alert("Your browser broke!");
                        return false;
                     }
                  }
               }
               
               // Create a function that will receive data 
               // sent from the server and will update
               // div section in the same page.
          
               ajaxRequest.onreadystatechange = function(){
                  if(ajaxRequest.readyState == 4){
                     var ajaxDisplay = document.getElementById('ajaxDaposs');
                     ajaxDisplay.innerHTML = ajaxRequest.responseText;
                  }
               }
               
               // Now get the value from user and pass it to
               // server script.
          
				var repid = document.getElementById('repid').value;
               var name1 = document.getElementById('repname').value;
			   var post1 = document.getElementById('reppost').value;
               	var email = document.getElementById('repemail').value;
			   var queryString = "?name1=" + name1;
			   var queryString = queryString+"&post1="+post1;
			   var queryString = queryString+"&repid="+repid;
			    var queryString = queryString+"&email="+email;
				 var queryString = queryString+"&subject="+subject;
           
			   
		
			   
               ajaxRequest.open("GET", "addreppost.php" + queryString, true);
			  /* alert(queryString);*/
			   
               ajaxRequest.send(null); 
			   
			   
            }
        
      </script>
	  <script>
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}

function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}
</script>
	  
		
</html>
