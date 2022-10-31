<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Admin Panel </title>
		<?php include "UI.php";?>
		</head>
  <body>

	
  	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#3BB9FF"> Car Workshop </div>
			<div class="col-md-10" style="text-align: center;font-size: 25px; color:#2d2244"> 
				

				<a href="booking_list.php" style="margin-left: 20px; "> Booking List </a> 
				<a href="home.php" style="margin-left: 20px;"> Sign Out </a> <br><br><br>
				 
				 
			</div>
		</div>
	</section>
	
<section id = "section1">
	<div class="col-md-10" style="text-align: center">
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#3BB9FF"> Booking List Search </div>
		
		<form action="showresult.php" class="form_design" method="post"> 
		<div class="col-md-10" style="text-align: center; font-size: 25px; color:#fbf7f7">
			Serial Number: <input type="text" name="serial_no"> <br/>
			
			<button type="submit" value="Search"> Search </button>
			</div>
		</form>

	</section>

	<?php include "Footer.php";?>
</body>
</html>