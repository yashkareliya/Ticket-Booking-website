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
	
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
	<div class="heading" style="background:url(package2.jpg)no-repeat">
			<h1>Delete Data</h1>

		</div>

<!--delete data start-->
<div class="container-flude">
	<div class="heading_title" style="margin-top: 1.5rem; margin-bottom: 2rem; font-size:2.3rem;"> Delete data in Cruise Table !</div>
<table class="table table-dark table-striped" style="height:40px; margin-top: 2rem;margin-bottom: 2rem;   text-align: center;">
    <thead style="font-size: 1.5rem;">
      <tr style="height:40px;">
      	<th>Cruise ID</th>
      	<th>Cruise Nmae</th>
      	<th>location</th>
      	<th>Portname</th>
      	<th>designation</th>
      	<th>delete</th>
      </tr>
  </thead>
  <tbody>
  	<?php
  		$connection= mysqli_connect('localhost','root','','book_db');
  		$query = "select * from cruiseinfo";

  		$result = mysqli_query($connection,$query);
  		if(!$result){
  			echo "error";
  		}else{
  			while($row = mysqli_fetch_assoc($result)){
  				?>
  					<tr style="height:40px;">
      					<td><?php echo $row['cruise_id']; ?></td>
      					<td><?php echo $row['cruise_name']; ?></td>
      					<td><?php echo $row['location']; ?></td>
      					<td><?php echo $row['portname']; ?></td>
      					<td><?php echo $row['designation']; ?></td>
      					<td><a href="delete.php?cruise_id=<?php echo $row['cruise_id']; ?>" class="btn btn-success">Delete</a>
     				 </tr>


  				<?php

  			}
  		}


  	?>
  </tbody>

</table>
</div>


<!--delete data start-->



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