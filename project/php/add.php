<?php

 	$connection= mysqli_connect('localhost','root','','book_db');


 	if(isset($_POST['send'])){
 		$cruise_id=$_POST['cruise_id'];
 		$cruise_name=$_POST['cruise_name'];
 		$location=$_POST['location'];
 		$portname=$_POST['portname'];
 		$designation=$_POST['designation'];

 		$request= "insert into cruiseinfo(cruise_id, cruise_name, location, portname, designation) values('$cruise_id','$cruise_name','$location','$portname','$designation')";

 		mysqli_query($connection,$request);

 		header('location:adminhome.php');


 	}else{
 		echo "somthing wents wrong try again .....";
 	}


?>