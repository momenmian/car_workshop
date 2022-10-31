<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Register </title>
			<?php include "UI.php";?>
			
		</head>

  <body>
	
	<section id = "section1">
		<div class="col-md-10" style="text-align: center; font-size: 100px; color:#2d2244"> Car Workshop </div>
                <div class="col-md-10" style="text-align: center; font-size: 26px;"> SIGN UP </div>
		
		<form action="register_process.php" class="form_design" method="post" style="color:White">
		<div class="col-md-10" style="text-align: center; font-size: 25px; color:#fbf7f7">

		Username <input type="text" placeholder="Enter Username" name="uname"> <br/>
		Email Address<input type="text" placeholder="Enter Email Address" name="email"> <br/>
		Password <input type="password" placeholder="Enter Password" name="pass"> <br/>
		Role <select name="role">  <option value="User"> User</option> </select> <br/>

			<button type="submit" value="Add to Database">Sign Up</button> <br><br>
        </div>               
		</form>
	</section>
<?php include "Footer.php";?>
  </body> 
</html>
