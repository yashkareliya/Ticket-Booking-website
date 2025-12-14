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

		<?php
			$connection= mysqli_connect('localhost','root','','book_db');
			if(isset($_GET['cruise_id'])){

				$cruise_id = $_GET['cruise_id'];
			

				$query = "select * from cruiseinfo where cruise_id='$cruise_id'";

  				$result = mysqli_query($connection,$query);
  				if(!$result){
  					echo "error";
  				}else{
  					
  					$row = mysqli_fetch_assoc($result);

  					print_r($row);
  				



			}

		}

		?>

		<?php

			if(isset($_POST['update'])){
				if(isset($_POST['cruise_newid'])){

					$cruise_newid=$_POST['cruise_newid'];

}
			
				$id=$_POST['id'];
				$name=$_POST['name'];
				$newlocation=$_POST['newlocation'];
				$newportname=$_POST['newportname'];

				$query = "update cruiseinfo set cruise_id='$id', cruise_name='$name', location='$newlocation', portname='$newportname'where cruise_id='$cruise_newid'";



				$result = mysqli_query($connection,$query);
  				if(!$result){
  					echo "error";
  				}else{
  					header('location:updatedata.php');

				}

			}
		?>





		<section class="booking">
				
				<h1 class="heading_title"> update data!</h1>
					<form action="update.php?cruise_newid=<?php echo $cruise_id; ?>" method="post" class="book_from">

						<div class="flex">
							<div class="inputBox">
								<span>cruise ID :</span>
								<input type="number" placeholder="Enter Cruise id " name="id" value="<?php echo $row['cruise_id']?>">
								
							</div>
							<div class="inputBox">
								<span>Cruise Name :</span>
								<input type="text" placeholder="Enter cruise name  " name="name" value="<?php echo $row['cruise_name']?>">
								
							</div>
							<div class="inputBox">
								<span>location :</span>
								<input type="text" placeholder="Enter corrent location " name="newlocation" value="<?php echo $row['location']?>">
								
							</div>
							<div class="inputBox">
								<span>Portname :</span>
								<input type="text" placeholder="Enter Portname " name="newportname" value="<?php echo $row['portname']?>">
								
							</div>
							
						</div>

						<input type="submit" class="btn" name="update" value="UPDATE">




					</form>

	</section>







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