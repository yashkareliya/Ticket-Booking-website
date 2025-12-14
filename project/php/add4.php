
<?php

 	$connection= mysqli_connect('localhost','root','','book_db');


 	if(isset($_POST['send'])){
 		$image=$_POST['image'];
 		$price=$_POST['price'];
 		$detail=$_POST['detail'];
 	
 		$request= "insert into gallary(image, price, detail) values('$image','$price','$detail')";

 		mysqli_query($connection,$request);

 		header('location:addeconomic.php');


 	}else{
 		echo "somthing wents wrong try again .....";
 	}


?>	
