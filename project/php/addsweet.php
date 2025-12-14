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
	<title>Add sweet package</title>

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

	<!-- header ends -->

		<div class="heading" style="background:url(book2.jpg)no-repeat">
			<h1>Add sweet package</h1>

		</div>
		<!--booking start-->

			<section class="booking">
				
				<h1 class="heading_title"> Add sweet package  !</h1>

					<form action="add3.php" method="post" class="book_from">

						<div class="flex">
							<div class="inputBox">
								<span>image :</span>
								<input type="file" placeholder="Enter your image" name="image">
								
							</div>
							<div class="inputBox">
								<span>price :</span>
								<input type="numbers" placeholder="Enter the price" name="price">
								
							</div>
							<div class="inputBox">
								<span>detail :</span>
								<input type="text" placeholder="Enter the detail for image " name="detail">
								
							</div>
							
						</div>

						<input type="submit" class="btn" name="send">




					</form>
				


				
			</section>

		<!--booking end-->

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





