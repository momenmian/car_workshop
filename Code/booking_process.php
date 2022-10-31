<?php
require_once('dbconnect.php');

if(isset($_POST['name']) && isset($_POST['address']) && isset($_POST['phone']) && isset($_POST['license_no']) && isset($_POST['engine_no']) && isset($_POST['appoint_date']) && isset($_POST['mechanic']))
{	
	$b = $_POST['name'];
	$c = $_POST['address'];
	$d = $_POST['phone'];
	$e = $_POST['license_no'];
	$f = $_POST['engine_no'];
	$g = $_POST['appoint_date'];
	$h = $_POST['mechanic'];
	
	$sql = " INSERT INTO mechanic_booking VALUES(FLOOR(RAND()*(20-10+1))+1000000, '$b', '$c', '$d', '$e', '$f', '$g', '$h') ";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){
		echo "Mechanic Booked Successfully";
		//header("Location:user_panel.php");
	}
	else{
		echo "Added Failed";
		//header("Location:user_panel.php");
	}
	
}
?>