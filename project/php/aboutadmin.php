<?php
session_start();
if(!isset($_SESSION["username"]))
{
	header("location:login.php");
}


?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA_Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,intia-scale=1.0">
	<title>Home</title>

	<!-- swiper css link -->
	<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>
	

	<!--Fount link -->
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<!--css file link -->
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<!-- header starts -->
	
<?php


include "adminheader.php";
?>
		
	
		<!--booking start-->

			<section class="booking">
				
				<h1 class="heading_title"> Add about us</h1>
					<form action="add.php" method="post" class="book_from">

						<div class="flex">
							<div class="inputBox">
								<span>cruise ID :</span>
								<input type="number" placeholder="Enter Cruise id " name="cruise_id">
								
							</div>
							<div class="inputBox">
								<span>Cruise Name :</span>
								<input type="text" placeholder="Enter cruise name  " name="cruise_name">
								
							</div>
							<div class="inputBox">
								<span>location :</span>
								<input type="text" placeholder="Enter corrent location " name="location">
								
							</div>
							<div class="inputBox">
								<span>Portname :</span>
								<input type="text" placeholder="Enter Portname " name="portname">
								
							</div>
							<div class="inputBox">
								<span>Designation :</span>
								<input type="text" placeholder="Enter Designation " name="designation">
								
							</div>
							
						</div>

						<input type="submit" class="btn" name="send">




					</form>

	</section>




<!--home session start -->














 <!--fotter start-->
 <?php


include "footer.php";
?>


  <!--fotter end-->
 


	<!-- swiper js link -->

	<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

	<!--coustom js file link -->
	<script type="script.js"></script>

</body>
</html>