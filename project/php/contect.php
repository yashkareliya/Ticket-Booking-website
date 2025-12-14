<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA_Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,intia-scale=1.0">
	<title>Book-form</title>

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


include "header.php";
?>

	<!-- header ends -->

		<div class="heading" style="background:url(book2.jpg)no-repeat">
			<h1>Contact Us</h1>

		</div>
		<!--booking start-->

			<section class="booking">
				
				<h1 class="heading_title"> Why Contact Us !?</h1>
					<form action="con1.php" method="post" class="book_from">

						<div class="flex">
							<div class="inputBox">
								<span>name :</span>
								<input type="text" placeholder="Enter your name " name="name">
								
							</div>
							<div class="inputBox">
								<span>email :</span>
								<input type="email" placeholder="Enter your Email " name="email">
								
							</div>
							<div class="inputBox">
								<span>phone :</span>
								<input type="number" placeholder="Enter your number " name="phone">
								
							</div>
							<div class="inputBox">
								<span>city :</span>
								<input type="text" placeholder="Enter your city " name="city">
								
							</div>
							<div class="inputBox">
								<span>Enter the message :</span>
								<textarea name="message" placeholder="Enter your message" name="message"></textarea>
								
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