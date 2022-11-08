<?php
//Linking the configuration file
require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Over View</title>
<?php
include_once 'sheader.php';
?>
<!--*****************************************************START LEFT COLUMN**************************-->
	<div class="leftcolumn"><br>
	<!--+++++++++++++++++++++++++++++++++++++++++++++++++SLIDE SHOW 2-->
	<div class="slideshow-container">

<div class="mySlides fade">
  <img src="image./slide7.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <img src="image./slide8.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <img src="image./slide9.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
<!--java script slide show 3-->
<script src="bod_cm_sm.js"></script>

	<!--+++++++++++++++++++++++++++++++++++++++++++++++++LIST-->
	<div class="olist">
		<a href="Over_View.php"><div  class="olist2"><center><div class="minh">Over View</div></center><img src="image./ov.png" width="100%" height="160px" alt="news"></div></a>
		<a href="Board_of_Directors.php"><div  class="olist2"><center><div class="minh">Board of Directors</div></center><img src="image./bod.jpg" width="100%" height="160px" alt="news"></div></a>
		<a href="Corporate_Management.php"><div  class="olist2"><center><div class="minh">Corporate Management</div></center><img src="image./cm.jpg" width="100%" height="160px" alt="news"></div></a>
		<a href="Sales_Management.php"><div  class="olist2"><center><div class="minh">Sales Management</div></center><img src="image./sm.jpg" width="100%" height="160px" alt="news"></div></a>
	</div><br>
	<!--+++++++++++++++++++++++++++++++++++++++++++++++Over view-->
	<div style="background-color:black;color:white;text-align:center;padding:10px 10px;">OVER VIEW</div>
	<div style="background-image: url('image./body5.jpg');text-align:center;height:1270px;">
	<br>
	<span style='font-size:100px;float:left;'>&#128104;</span>
	<p class="coment2" style="font-size:30px;"><br>who is this "HOPE"?</p>
	<span style='font-size:100px;float:right;'>&#128105;</span>
	<p class="coment1" style="padding-left:10px;padding-right:10px;">
	<br>
	Today we are one of the leading life insurance companies in Sri Lanka.
	Hope, is one of the most dynamic and reputable companies in Sri Lanka.
	</p>
	<br><br><br><br>
	<span style='font-size:100px;float:left;'>&#128104;</span>
	<p class="coment2" style="font-size:30px;"><br>What is this do?</p>
	<span style='font-size:100px;float:right;'>&#128105;</span>
	<p class="coment1" style="padding-left:10px;padding-right:10px;"><br>
	We are in the business of protecting people. We are natural in creativity 
	and disruptive innovations that strive to improve the living standards of 
	both Sri Lankan youth and the elderly.
	</p>
	<br><br><br><br>
	<span style='font-size:100px;float:left;'>&#128104;</span>
	<p class="coment2" style="font-size:30px;"><br>Vision ?</p>
	<span style='font-size:100px;float:right;'>&#128105;</span>
	<p class="coment1" style="padding-left:10px;padding-right:10px;"><br>
	To revolutionize insurance in Sri Lanka through world-class innovations and 
	deliver extraordinary stakeholder value</p>
	<br><br><br><br>
	<span style='font-size:100px;float:left;'>&#128104;</span>
	<p class="coment2" style="font-size:30px;"><br>Mission ?</p>
	<span style='font-size:100px;float:right;'>&#128105;</span>
	<p class="coment1" style="padding-left:10px;padding-right:10px;"><br>
	We exist to nurture your well-being, so you can enjoy life today</p>
	<br><br><br><br>
	</div>
	</div>
<!--##################################################################LEFT COLUMN END#################################-->
<?php
include_once'footer.php';
?>
