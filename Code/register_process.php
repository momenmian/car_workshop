<?php

require_once('dbconnect.php');

if(isset($_POST['uname']) && isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['role'])){
	

	$a = $_POST['uname'];
	$b = $_POST['email'];
	$c = $_POST['pass'];
	$d = $_POST['role'];
        

	$sql = " INSERT INTO user_info VALUES ( '$a', '$b', '$c', '$d' ) ";
	
	
	$result = mysqli_query($conn, $sql);
	
	
	if(mysqli_affected_rows($conn)){
		header("Location:home.php");
		
	}
	else{
		//echo "Insertion Failed";
		header("Location:register.php");
	}
	
}

?>
