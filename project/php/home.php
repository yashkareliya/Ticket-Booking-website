<?php
session_start();
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
	<style>
		@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@500&family=Forum&family=Prompt&family=Vast+Shadow&display=swap');
* {box-sizing: border-box}
.mySlides {display: none}
<!--img {vertical-align: middle;}-->

/* Slideshow container */
.slideshow-container {
  position: relative;
  align-items: center;
	justify-content: center; 
  padding: 0;
  
}
.home{
	padding: 0%;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #97978D;
  
font-family: 'Cinzel', serif;
font-family: 'Forum', cursive;
font-family: 'Prompt', sans-serif;
font-family: 'Vast Shadow', cursive;
  position: absolute;
  bottom: 150px;
  width: 100%;
  text-align: center;
  display: block;
	font-size: 3rem;
	padding-bottom: 1rem;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
.home-about{
	display: flex;
	align-items: center;
	flex-wrap: wrap;
}
.home-about .imge{
	flex: 1 1 41rem;
}
.home-about .imge img{
	width: 100%;
}
.home-about .content{
	
	flex: 1 1 41rem;
	padding: 3rem;
	background: #eee;
}
.home-about .content h3{
	font-size: 3rem;
	color: #222;

}
.home-about .content p{
	font-size: 1.5rem;
	padding: 1rem 0;
	line-height: ;
	color: #222;

}

</style>

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


<!--home session start -->

	<section class="home">
		<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="home-slide-1.jpg" style="width:100%">
  <div class="text">“  Hang On to Your Hat...	We’re Going Cruising...!”</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="home-slide-2.jpg" style="width:100%">
  <div class="text">“Why go Anywhere when you can go Everywhere?”</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="home-slide-3.jpg" style="width:100%">
  <div class="text">“The only thing better than our ships are our prices!”</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094</a>
<a class="next" onclick="plusSlides(1)">&#10095</a>

</div>


	</section>

<!--home session end -->

<!--home about session start -->
	<section class="home-about">
		<div class="imge">
			<img src="aboutus.jpg" >
		</div>
		<div class="content">
			<h3> About US </h3>
			<p>Cruise Critic is the leading cruise reviews site, which hosts the largest cruise community in the world. More than six million people, from first-time cruisers to avid cruise fans, visit Cruise Critic each month to research and plan their cruises, connect with other cruisers and share their passion for cruising.</p>
			<a href="about.php" class="btn">read more</a>
		</div>
	</section>
	

<!--home about session end -->

<!--home package start-->
	<section class="home-packages">
		<h1 class="heading">Our Packages</h1>
		<div class="box-container">
			<div class="box">
				<div class="imge">
					<img src="package.jpg">
				</div>
				<div class="content">
					<h3>Adventure & Tour</h3>
					<p>“The only thing better than our ships are our prices!”</p>
					<a href="book_from.php" class="btn">Book now</a>
				</div>
			</div>
			<div class="box">
				<div class="imge">
					<img src="package.jpg">
				</div>
				<div class="content">
					<h3>Adventure & Tour</h3>
					<p>“The only thing better than our ships are our prices!”</p>
					<a href="book_from.php" class="btn">Book now</a>
				</div>
			</div>
			<div class="box">
				<div class="imge">
					<img src="package.jpg">
				</div>
				<div class="content">
					<h3>Adventure & Tour</h3>
					<p>“The only thing better than our ships are our prices!”</p>
					<a href="book_from.php" class="btn">Book now</a>
				</div>
			</div>
		</div>
		<div class="load-more"> 
			<a href="package.php" class="btn">Load more</a>
		</div>
	</section>

<!--home package end-->

<!--offer starr-->
<section class="home-offer">
	<div class="content">
	<h3> Upto 50% off </h3>
	<p>	Sweet As The Moment When The Discount Went 'Pop'</p>
	<a href="book_from.php" class="btn">Book now</a>

	</div>

</section>

<!--offer end -->












 <!--fotter start-->
 	<?php


include "footer.php";
?>



  <!--fotter end-->
  <script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>


	<!-- swiper js link -->

	<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

	<!--coustom js file link -->
	<script type="script.js"></script>

</body>
</html>