<?php
	session_start();
	$connection= mysqli_connect('localhost','root','','book_db');

		$username=$_POST['username'];
		$password=$_POST['password'];


		$sql="select *from login where username='".$username."' AND password='".$password."'";

		$result=mysqli_query($connection,$sql);

		$row=mysqli_fetch_array($result);

		if($row["usertype"]=="user")
		{
			$_SESSION["username"]=$username;
			header("location:home.php");
		}
		else if($row["usertype"]=="admin")
		{
			$_SESSION["username"]=$username;
			header("location:adminhome.php");
		}
		else{
			echo "....";
		}



?>