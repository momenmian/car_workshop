<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Update Booking </title>
<?php include "UI.php";?>
		</head>

  <body> 
	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#3BB9FF"> Car Workshop </div>
			<div class="col-md-10" style="text-align: center;font-size: 25px; color:#2d2244"> 
				
				<a href="admin_panel.php" style="margin-left: 20px;"> Main Menu </a> 
				<a href="booking_list.php" style="margin-left: 20px;"> Booking List </a> 
				<a href="home.php" style="margin-left: 20px;"> Sign Out </a> <br><br><br>
				 
			</div>
		</div>
	</section>
	
	<section id = "section1">
	<div class="col-md-10" style="text-align: center">
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#3BB9FF"> Search Result </div>
		<div style="margin-left:10%; margin-right:10%; margin-top:50px; margin-bottom:50px;opacity: 0.7;text-align:center;background:#B0E0E6;">
			<div class="row" style="padding:5px;"> 
			</div>	
				
			
	
	<div class="row" style="padding:20px;">
	<div class="col-md-10" style="text-align: center; font-size: 18px; color:#0d0f0e">

	<section id = "section1">
		<form action="update_process.php" class="form_design" method="post">
<?php
require_once("dbconnect.php");

if(isset($_POST['serial_no'])){
	
	$a = $_POST['serial_no'];
	
	$sql = "SELECT appoint_date, mechanic FROM mechanic_booking WHERE serial_no ='$a' ";  
	
	$result = mysqli_query($conn, $sql);
	
	
	if(mysqli_num_rows($result)>0 )
	{
	  while($row = mysqli_fetch_array($result))
	  {
		echo  'Serial Number: <input type="text" name="serial_no" value=" '.$a.'" required> <br/>'; 
		echo  'Appointment Date: <input type="date" name="appoint_date" value="'.$row['appoint_date'].'" required> <br/>';   
		echo  'Mechanic Name: <select name="mechanic"> 
		<option value= "Mechanic 1"> Mechanic 1</option>
		<option value= "Mechanic 2"> Mechanic 2</option>
		<option value= "Mechanic 3"> Mechanic 3</option>
		<option value= "Mechanic 4"> Mechanic 4</option>
		<option value= "Mechanic 5"> Mechanic 5</option>
		value="'.$row['mechanic'].'" required> </select> <br/>';	

	   }
	}
}
	
	else{
		echo "Serial Number is wrong";
	}
?>
			<br/>
			<button type="submit" value="Update"> Update </button>
			</div>
		</form>

	</div>
	</div>
	</section>

<?php include "Footer.php";?>
  </body> 
</html>

