<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> User Panel </title>
		<?php include "UI.php";?>
		</head>
	<body>	
	<section id="header">
		<div class="row">  
			<div class="col-md-10" style="text-align: center; font-size: 100px; color:#3BB9FF"> Car Workshop </div>
			<div class="col-md-10" style="text-align: center; font-size: 25px; color:#2d2244"> 
				
				<a href="home.php" style="margin-left: 20px;"> Sign Out </a> <br><br>
				 
			</div>
		</div>
	</section>
<section id = "section1">
	<div class="col-md-10" style="text-align: center">
		<div class="col-md-10" style="text-align: center; font-size: 60px; color:#3BB9FF"> Mechanic Booking </div>
		
		<form action="booking_process.php" class="form_design" method="post"> 
		<div class="col-md-10" style="text-align: center; font-size: 25px; color:#3090C7">
			Name: <input type="text" name="name"> <br/>
            Address:<input type="text" name="address"> <br/> 
			Phone: <input type="text" name="phone"> <br/>
			Car License Number: <input type="text" name="license_no"> <br/> 
			Car Engine Number: <input type="text" name="engine_no"> <br/> 
			Appointment Date: <input type="date" name="appoint_date"> <br/> 
			Mechanic: <select name="mechanic">
				<option value= "Mechanic 1"> Mechanic 1</option>
				<option value= "Mechanic 2"> Mechanic 2</option>
				<option value= "Mechanic 3"> Mechanic 3</option>
				<option value= "Mechanic 4"> Mechanic 4</option>
				<option value= "Mechanic 5"> Mechanic 5</option>
			</select> <br/> <br/>
			
			<button type="submit" value="Add to Database"> Book </button>
			</div>
		</form>

	</section>

	<?php include "Footer.php";?>
</body>
</html>