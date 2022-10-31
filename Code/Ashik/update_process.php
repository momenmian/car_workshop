<?php
require_once('dbconnect.php');
if(isset($_POST['appoint_date']) && isset($_POST['mechanic']) && isset($_POST['serial_no']) )
{	
	$a = $_POST['appoint_date'];
	$b = $_POST['mechanic'];
	$c = $_POST['serial_no'];

	$sql = " UPDATE mechanic_booking SET appoint_date = '$a', mechanic = '$b' WHERE serial_no = $c ";
	
	$result = mysqli_query($conn, $sql);
	
	if(mysqli_affected_rows($conn)){
		echo "Updated Successfully, Please Mechanic Booking List";
	}
	else{
		echo "Updated Failed";
		//header("Location:showresult.php");
	}
	
}


?>