<?php
	$connection= mysqli_connect('localhost','root','','book_db');
	$cruise_id=$_GET['cruise_id'];
	$query = "DELETE FROM CRUISEINFO WHERE CRUISE_ID ='$cruise_id'";

	$data=mysqli_query($connection,$query);

	if($data)
	{
		echo "DELETEED FROM DATA BASE";
	}
	else
	{
		echo "ERROR";
	}

?>