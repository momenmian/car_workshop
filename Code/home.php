<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title> Home </title>
<?php include "UI.php";?>
		</head>

  <body>
	
	
	
	<section id = "section1">
		<div class="col-md-10" style="text-align: center; font-size: 100px; color:#3BB9FF"> Car Workshop </div><br><br><br>
                <div class="col-md-10" style="text-align: center; font-size: 50px;"> SIGN IN </div>
		
		<form action="signin_process.php" class="form_design" method="post" style="color:White">
			<div class="col-md-10" style="text-align: center; font-size: 25px; color:#3090C7">
			Username <input type="text" placeholder="Enter Username" name="fname"> <br/>
			Password <input type="password" placeholder="Enter Password" name="pass"> <br/>
			<button type="submit" value="Sign In">Sign In</button> <br><br>
                        <label> Not a member yet ? </label>
                        <a href="register.php"> Register </a><br>
			</div>
		</form>
	</section>
<?php include "Footer.php";?>
  </body> 
</html>

