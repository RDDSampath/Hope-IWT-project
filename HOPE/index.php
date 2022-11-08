<?php
require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>HOME PAGE</title>
<?php 
include_once 'header.php';
?>
<!--*****************************************************START LEFT COLUMN**************************-->
	<br>
	<div class="leftcolumn">
		<div style="background-color:white;border-radius:20px;width:100%;text-align:center;font-family:Comic Sans MS;font-size:50px;padding-top:5px;color:black;">
		<div><b>HOPE</b>
		<div style="color:red;font-size:15px;font-family:papyrus;">HOPE Your Future</div></div>
		</div><br>
		<!--Slid show-->
		
		<div class="slideshow-container">
		<div class="mySlides fade">
		  <div class="numbertext"></div>
		  <img src="image./slide1.jpg" style="width:100%">
		  <div class="text">HEALTH</div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext"></div>
		  <img src="image./slide2.jpg" style="width:100%">
		  <div class="text">CARE</div>
		</div>

		<div class="mySlides fade">
		  <div class="numbertext"></div>
		  <img src="image./slide3.jpg" style="width:100%">
		  <div class="text">Protect</div>
		</div>
		</div>
		<br>

		<div style="text-align:center">
		  <span class="dot" onclick="currentSlide(1)"></span> 
		  <span class="dot" onclick="currentSlide(2)"></span> 
		  <span class="dot" onclick="currentSlide(3)"></span> 
		</div>

		<!--Slide show java script code-->
		<script src="myscripts.js"></script>
		<!--***************************-->
		<div class="Oproduct" style="background-color:black">
			<div style="color:white;border:5px solid #ddd;"><h4>Our Products</h4></div>
			<div style="height:150px;border:3px solid #ddd;">
			<a href="individuals_family.php"><div class="product"><img src="image./1 (1).png" alt="Familes and Indviduals"><br>Familes and Indviduals</div></a>
			<a href="partdplan.php"><div class="product"><img src="image./1 (2).png" alt="Medicare Adavantage and part D plan"><br>Medicare Adavantage and part D plan</div></a>
			<a href="dental.php"><div class="product"><img src="image./1 (3).png" alt="Dental"><br>Dental</div></a>
			<a href="mcsup.php"><div class="product"><img src="image./1 (4).png" alt="Medicare supplementary"><br>Medicare supplementary</div></a>
			</div>
		</div>
	</div>
	
<!--##################################################################LEFT COLUMN END#################################-->
<?php 
include_once 'footer.php';
?>
