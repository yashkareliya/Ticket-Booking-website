<?php

 	$connection= mysqli_connect('localhost','root','','book_db');


 	if(isset($_POST['send'])){
 		$name=$_POST['name'];
 		$email=$_POST['email'];
 		$phone=$_POST['phone'];
 		$city=$_POST['city'];
 		$message=$_POST['message'];
 		


 		$request= "insert into feedback(name, email, phone, city, message) values('$name','$email','$phone','$city','$message')";

 		mysqli_query($connection,$request);

 		header('location:feedback.php');


 	}else{
 		echo "somthing wents wrong try again .....";
 	}


?>