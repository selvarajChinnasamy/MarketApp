<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Market login</title>
    <meta name="description" content="Your Description Here">
    <meta name="keywords" content="bootstrap themes, portfolio, responsive theme">
    <meta name="author" content="ThemeForces.Com">
    
    <!-- Favicons
    ==================================================select options 5 lines css and script -->
	
  
  
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="css/css.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <script type="text/javascript" src="js/modernizr.custom.js"></script>

    <link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,100,800,900,400,200,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>

   
    <link rel="stylesheet" type="text/css" href="datepicker.css">

   

</head>
<body>
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

    <div id="tf-home">
        <div class="overlay">
            <div id="sticky-anchor"></div>
            <nav id="tf-menu" class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand logo" href="#"><?php echo"{$name}";?></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav navbar-right">
                        <li><a href="#tf-home">Home</a></li>
                        <!--<li><a href="#tf-service">Services</a></li>-->
                        <li><a href="#tf-portfolio">Portfolio</a></li>
                        <li><a href="#tf-about">Product Review</a></li>
                        <li><a href="#tf-contact">Contact</a></li>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>

            <div class="container">
                <div class="content">
                    <h1>Hi!&nbsp;&nbsp;<?php echo"{$name}";?> </h1>
                    <h3>Dealer</h3>
                    <br>
                    <a href="c.php" class="btn btn-primary my-btn">Product Select</a>
                    <a href="#tf-about" class="btn btn-primary my-btn2">Product Review</a>
                </div>
            </div>
        </div>
    </div>

    <!--<div id="tf-service">
        <div class="container">

            <div class="col-md-4">

                <div class="media">
                  <div class="media-left media-middle">
                    <i class="fa fa-motorcycle"></i>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Brand & Graphics Design</h4>
                    <p>Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>

            </div>

            <div class="col-md-4">

                <div class="media">
                  <div class="media-left media-middle">
                    <i class="fa fa-gears"></i>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Web Designer & Developer</h4>
                    <p>Cras sit amet nibh libero, in gravida nulla. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>

            </div>

            <div class="col-md-4">

                <div class="media">
                  <div class="media-left media-middle">
                    <i class="fa fa-heartbeat"></i>
                  </div>
                  <div class="media-body">
                    <h4 class="media-heading">Business Consultant</h4>
                    <p>Metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                  </div>
                </div>

            </div>
            
        </div>
    </div>-->

   <!-- <div id="tf-portfolio">
        <div class="container">
            <div class="section-title">
                <h3>My Latest Works</h3>
                <hr>
            </div>

            <div class="space"></div>

            <div class="row">
                <div class="col-md-4">
                    <img src="img/09.jpg" class="img-responsive">
                </div>

                <div class="col-md-4">
                    <img src="img/02.jpg" class="img-responsive">
                </div>

                <div class="col-md-4">
                    <img src="img/03.jpg" class="img-responsive">
                </div>
            </div>

            <div class="row toppadding">
                <div class="col-md-4">
                    <img src="img/04.jpg" class="img-responsive">
                </div>

                <div class="col-md-4">
                    <img src="img/05.jpg" class="img-responsive">
                </div>

                <div class="col-md-4">
                    <img src="img/06.jpg" class="img-responsive">
                </div>
            </div>

        </div>
    </div>-->

    <div id="tf-about">
        <div class="overlay">
		
				<form action="name.php" method="post">
<input  style="color:black" id='start_dt'  class='datepicker' value="<?php echo date('Y-m-d');?>" name="date">
<!--<input id='another_dt' class='myclass datepicker'>-->
<input type="submit" class="btn btn-primary my-btn dark" value="submit">

</form>
		
            <div class="container">
			
                <div class="row">
				
                    <div class="col-md-6 col-md-offset-6">
					
                        <h3 style="color:black">Product Review</h3>
                        <br>
                        <p style="color:black">Cras sit amet nibh libero, in gravida nulla. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        <p style="color:black">Metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                        <br>
                        <a href="#about" class="btn btn-primary my-btn dark">Product review</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- <div id="tf-why-me">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Why Hire Me</h3>
                        <br>
                        <ul class="list-inline why-me">
                            <li>
                                <h4>I Do Brand that Sells</h4>
                                <p>Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                            </li>
                            <li>
                                <h4>You will love my Designs</h4>
                                <p>Donec lacinia congue felis in faucibus. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                            </li>
                            <li>
                                <h4>I Deliver on Time</h4>
                                <p>Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                            </li>
                        </ul>
                        <a href="#tf-contact" class="btn btn-primary my-btn dark">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>-->

   <!-- <div id="tf-contact">
        <div class="container">
            <div class="section-title">
                <h3>Contact Me</h3>
                <p>Cras sit amet nibh libero, in gravida nulla. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.</p>
                <hr>
            </div>

            <div class="space"></div>

            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <form id="contact">
                      <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Name">
                      </div>
                      <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Email">
                      </div>
                      <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Website">
                      </div>
                      <div class="form-group">
                        <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary my-btn dark">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <nav id="tf-footer">
        <div class="container">
             <div class="pull-left">
                <p>2015 © Awesomess. All Rights Reserved. Designed and Coded by <a href="https://dribbble.com/jennpereira">Jenn</a> for <a href="https://themeforces.com">ThemeForces.Com</a></p>
            </div>
            <div class="pull-right"> 
                <ul class="social-media list-inline">
                    <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                    <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#"><span class="fa fa-pinterest"></span></a></li>
                    <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                    <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                    <li><a href="#"><span class="fa fa-behance"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>
   

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="js/main.js"></script>
	<script>
// Converts a date into '12-Oct-1984' format
function getDateString(dt) {
  return dt.getFullYear() + '-' + 
    ['01','02','03','04','05','06','07','08','09','10','11','12'][dt.getMonth()] + 
    '-0' + dt.getDate();
}

// Converts a date into 'July 2010' format
function getMonthYearString(dt) {
  return ['January','February','March','April','May','June','July',
          'August','September','October','November','December'][dt.getMonth()] +
         ' ' + dt.getFullYear();
}

// This is the function called when the user clicks any button
function chooseDate(e) {
  var targ; // Crossbrowser way to find the target (http://www.quirksmode.org/js/events_properties.html)
	if (!e) var e = window.event;
	if (e.target) targ = e.target;
	else if (e.srcElement) targ = e.srcElement;
	if (targ.nodeType == 3) targ = targ.parentNode; // defeat Safari bug

  var div = targ.parentNode.parentNode.parentNode.parentNode.parentNode; // Find the div
  var idOfTextbox = div.getAttribute('datepickertextbox'); // Get the textbox id which was saved in the div
  var textbox = document.getElementById(idOfTextbox); // Find the textbox now
  if (targ.value=='<' || targ.value=='>') { // Do they want the change the month?
    createCalendar(div, new Date(targ.getAttribute('date')));
    return;
  }
  textbox.value = targ.getAttribute('date'); // Set the selected date
  div.parentNode.removeChild(div); // Remove the dropdown box now
}

// Parse a date in d-MMM-yyyy format
function parseMyDate(d) {
  if (d=="") return new Date('NotADate'); // For Safari
  var a = d.split('-');
  if (a.length!=3) return new Date(d); // Missing 2 dashes
  var m = -1; // Now find the month
  if (a[1]=='Jan') m=0;
  if (a[1]=='Feb') m=1;
  if (a[1]=='Mar') m=2;
  if (a[1]=='Apr') m=3;
  if (a[1]=='May') m=4;
  if (a[1]=='Jun') m=5;
  if (a[1]=='Jul') m=6;
  if (a[1]=='Aug') m=7;
  if (a[1]=='Sep') m=8;
  if (a[1]=='Oct') m=9;
  if (a[1]=='Nov') m=10;
  if (a[1]=='Dec') m=11;
  if (m<0) return new Date(d); // Couldn't find the month
  return new Date(a[2],m,a[0],0,0,0,0);
}

// This creates the calendar for a given month
function createCalendar(div, month) {
  var idOfTextbox = div.getAttribute('datepickertextbox'); // Get the textbox id which was saved in the div
  var textbox = document.getElementById(idOfTextbox); // Find the textbox now
  var tbl = document.createElement('table');
  var topRow = tbl.insertRow(-1);
  var td = topRow.insertCell(-1);
  var lastMonthBn = document.createElement('input');
  lastMonthBn.type='button'; // Have to immediately set the type due to IE
  td.appendChild(lastMonthBn);
  lastMonthBn.value='<';
  lastMonthBn.onclick=chooseDate;
  lastMonthBn.setAttribute('date',new Date(month.getFullYear(),month.getMonth()-1,1,0,0,0,0).toString());
  var td = topRow.insertCell(-1);
  td.colSpan=5;
  var mon = document.createElement('input');
  mon.type='text';
  td.appendChild(mon);
  mon.value = getMonthYearString(month);
  mon.size=15;
  mon.disabled='disabled';
  var td = topRow.insertCell(-1);
  var nextMonthBn = document.createElement('input');
  nextMonthBn.type='button';
  td.appendChild(nextMonthBn);
  nextMonthBn.value = '>';
  nextMonthBn.onclick=chooseDate;
  nextMonthBn.setAttribute('date',new Date(month.getFullYear(),month.getMonth()+1,1,0,0,0,0).toString());
  var daysRow = tbl.insertRow(-1);
  daysRow.insertCell(-1).innerHTML="Mon";
  daysRow.insertCell(-1).innerHTML="Tue";
  daysRow.insertCell(-1).innerHTML="Wed";
  daysRow.insertCell(-1).innerHTML="Thu";
  daysRow.insertCell(-1).innerHTML="Fri";
  daysRow.insertCell(-1).innerHTML="Sat";
  daysRow.insertCell(-1).innerHTML="Sun";
  
  // Make the calendar
  var selected = parseMyDate(textbox.value); // Try parsing the date
  var today = new Date();
  date = new Date(month.getFullYear(),month.getMonth(),1,0,0,0,0); // Starting at the 1st of the month
  var extras = (date.getDay() + 6) % 7; // How many days of the last month do we need to include?
  date.setDate(date.getDate()-extras); // Skip back to the previous monday
  while (1) { // Loop for each week
    var tr = tbl.insertRow(-1);
    for (i=0;i<7;i++) { // Loop each day of this week
      var td = tr.insertCell(-1);
      var inp = document.createElement('input');
      inp.type = 'button';
      td.appendChild(inp);
      inp.value = date.getDate();
      inp.onclick = chooseDate;
      inp.setAttribute('date',getDateString(date));
      if (date.getMonth() != month.getMonth()) {
        if (inp.className) inp.className += ' ';
        inp.className+='othermonth';
      }
      if (date.getDate()==today.getDate() && date.getMonth()==today.getMonth() && date.getFullYear()==today.getFullYear()) {
        if (inp.className) inp.className += ' ';
        inp.className+='today';
      }
      if (!isNaN(selected) && date.getDate()==selected.getDate() && date.getMonth()==selected.getMonth() && date.getFullYear()==selected.getFullYear()) {
        if (inp.className) inp.className += ' ';
        inp.className+='selected';
      }
      date.setDate(date.getDate()+1); // Increment a day
    }
    // We are done if we've moved on to the next month
    if (date.getMonth() != month.getMonth()) {
      break;
    }
  }
  
  // At the end, we do a quick insert of the newly made table, hopefully to remove any chance of screen flicker
  if (div.hasChildNodes()) { // For flicking between months
    div.replaceChild(tbl, div.childNodes[0]);
  } else { // For creating the calendar when they first click the icon
    div.appendChild(tbl);
  }
}

// This is called when they click the icon next to the date inputbox
function showDatePicker(idOfTextbox) {
  var textbox = document.getElementById(idOfTextbox);
  
  // See if the date picker is already there, if so, remove it
  x = textbox.parentNode.getElementsByTagName('div');
  for (i=0;i<x.length;i++) {
    if (x[i].getAttribute('class')=='datepickerdropdown') {
      textbox.parentNode.removeChild(x[i]);
      return false;
    }
  }

  // Grab the date, or use the current date if not valid
  var date = parseMyDate(textbox.value);
  if (isNaN(date)) date = new Date();

  // Create the box
  var div = document.createElement('div');
  div.className='datepickerdropdown';
  div.setAttribute('datepickertextbox', idOfTextbox); // Remember the textbox id in the div
  createCalendar(div, date); // Create the calendar
  insertAfter(div, textbox); // Add the box to screen just after the textbox
  return false;
}

// Adds an item after an existing one
function insertAfter(newItem, existingItem) {
  if (existingItem.nextSibling) { // Find the next sibling, and add newItem before it
    existingItem.parentNode.insertBefore(newItem, existingItem.nextSibling); 
  } else { // In case the existingItem has no sibling after itself, append it
    existingItem.parentNode.appendChild(newItem);
  }
}

// This is called when the page loads, it searches for inputs where the class is 'datepicker'
function datePickerInit() {
  // Search for elements by class
  var allElements = document.getElementsByTagName("*");
  for (i=0; i<allElements.length; i++) {
    var className = allElements[i].className;
    if (className=='datepicker' || className.indexOf('datepicker ') != -1 || className.indexOf(' datepicker') != -1) {
      // Found one! Now lets add a datepicker next to it  
      var a = document.createElement('a');
      a.href='#';
      a.className="datepickershow";
      a.setAttribute('onclick','return showDatePicker("' + allElements[i].id + '")');
      var img = document.createElement('img');
      img.src='data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAIAAACQkWg2AAAABGdBTUEAAK/INwWK6QAAABh0RVh0U29mdHdhcmUAUGFpbnQuTkVUIHYzLjM2qefiJQAAAdtJREFUOE+Vj+9PUnEUxvPvar3xja96Q1hGEKG0ubZqbfHCNqIVA4eYLAwFp0LYD4iIJEdeRGGZwDAEcUOn9oNIvPcGgjBQfHE69/YFihe1zs59du7d83nOuR0AcOq/CgEqWbaHDqaD+clF1rLAmija6MsZ5vb0s9nB1xm168s9x67y6Y7q2TaXjo8tVKjUTv7Zt61pAkwt/UA3zFwFuxysV2BKAuYeMAnBcBaGukDdCaozaLg5sUGAiQDLA3IIDIBfAfO34N118PaDRwYvRfBcCMrTaLg2liTAOEW3NjzpBZsMpqUwKQaLCMYvwGMhjArQIDfGCTDqy3EAX47lfVTnCo3qCnOzJ8IpW6pJR2IEGHn7/bBaR5MLO8y8CtPuKO2J0nMfGdKr+5uZ4kVdhAD6N99K1bo7ynB5vHpj3AZ0NxWBbs0KAbTur8VKfTbGeFcbkc1sfnBHuA1CzTIB7js/H5SPffFW3q9sau2PDdLhxkl3X+wiQCVYf4Jt3h1Itmb8iBvEusZJd2a2CuXjxXUWU5dSnAZ5/b0QkOobgMKWzh8eMcXaXr6aYSqfcuXtbAkdbS3RfSD/MGDfvGFO9ZuSfY/ilx/GLumi57Vhgfp9W597ECJA2/a/v/4ENLpYKsDo3kgAAAAASUVORK5CYII=';
      img.title='Show calendar';
      a.appendChild(img);
      insertAfter(a, allElements[i]);
    }
  }
}

// Hook myself into the page load event
if (window.addEventListener) { // W3C standard
  window.addEventListener('load', datePickerInit, false);
} else if (window.attachEvent) { // Microsoft
  window.attachEvent('onload', datePickerInit);
}
</script>

  </body>
</html>