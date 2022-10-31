<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Booking List </title>
<?php include "UI.php";?>
		</head>

  <body> 

     
	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#3BB9FF"> Car Workshop </div>
			<div class="col-md-10" style="text-align: center;font-size: 25px; color:#2d2244"> 
				
				<a href="admin_panel.php" style="margin-left: 20px;"> Main Menu </a>
				<a href="home.php" style="margin-left: 20px;"> Sign Out </a> <br><br><br>
				 
			</div>
		</div>
	</section>
	
	<section id = "section1">
	<div class="col-md-10" style="text-align: center">
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#3BB9FF"> Booking List </div>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;opacity: 0.7;text-align:center;background:#B0E0E6;">
			<div class="row" style="padding:5px;"> 
			</div>	
				
			
	
	<div class="row" style="padding:20px;">
	<div class="col-md-10" style="text-align: center; font-size: 18px; color:#0d0f0e">
<?php

require_once("dbconnect.php");


	$sql = "SELECT * FROM mechanic_booking ";  
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_num_rows($result)>0 )
	{
	  while($row = mysqli_fetch_array($result))
	  {
		echo "<br> Serial Number: ". $row[0]."<br>";
		echo "<br> Client Name: ". $row[1]."<br>";
		echo "<br> Phone: ". $row[3]."<br>";
		echo "<br> Car Registration Number: ". $row[4]."<br>";
		echo "<br> Appointment Date: ". $row[6]."<br>";
		echo "<br> Mechanic Name: ". $row[7]."<br>";
		echo "</br>";   
	  }
	  }
	else{
		echo "No Booking";
	}
	

?>
	</div>
	</div>
	</section>
	
<?php include "Footer.php";?>
  </body> 
</html>

