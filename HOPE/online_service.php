<!DOCTYPE html>
<html>
<head>
<title>Online service</title>
<style>
making the box of online services-------------------------------
.box{
  
  background-image:url("image/d.jpg");
  width: 60%;
  height:10%;
  border: 5px solid black;
  padding: 10px;
  margin: 10px;
}
.boxx{
  background-image:url("image/d.jpg");
  width: 50%;
  height:10%;
  border: 5px solid black;
  padding: 5px;
  margin: 5px;
}

ul.menu{
 list-style-type:none;
 margin:0;
 padding:0;
 overflow:hidden;
}



li.a{
 color:black;
 display:block;
 text-align:center;
 padding:14px 16px;
 text-decoration:none;
}

li a:hover{
 background-color:dodgerblue;
}


<!---------------images in a one line------------------>
/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900%) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
  <!----------------------------image gallery-slide showing------------------------->


img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next and previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: WHITE;
  font-weight: bold;
  font-size: 50px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}



.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.4;
}

.active,
.demo:hover {
  opacity: 1;
}

</style>
<?php 
include_once 'sheader.php';
?>
<!--*****************************************************START LEFT COLUMN**************************-->
	<br>
	<div class="leftcolumn">
	<br>
	<center>
	<div class="boxx"><br>
	<h2 style="padding-top:10px;padding-bottom:10px;">ONLINE SERVICES</h2>
	<ul class="menu">
	    <a href=""><li class="menu"><h2 style="padding-top:10px;padding-bottom:10px;"><a href="">Pay Online</a></h2></li></a>
		<br>
		
	    <a href=""><li class="menu"><h2 style="padding-top:10px;padding-bottom:10px;display:block;">E-form</h2></li></a>
	<br>
	</ul>  
	</div>
	</center>
	<br>

<h4 style="text-align:center;margin:10px;padding:10px 10px;background-color:dodgerblue;color:black;">Our Products</h4>
<br>
<!-- images in Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <img src="image/medicare.jpg" alt="medicare supplement" style="width:100%">
      <h3>Medicare Supplement Insurance.</h3>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="image/families.png" alt="families" style="width:100%">
      <h3>Health Insurance For Individuals and Families.</h3>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="image/dental.jpg" alt="dental" style="width:100%">
      <h3>Dental Insurance Plans.</h3>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="image/plans.jpg" alt="plans" style="width:100%">
      <h3>Medicare Plans And Part d Plans</h3>
    </div>
  </div>
<!-- END GRID -->
</div>
<br><br>

<!--------------creating image gallery--slide showing------------------>
<br><br>

 <h2 style="text-align:center">ONLINE SERVICES</h2>

<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 4</div>
    <img src="image/hope.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 4</div>
    <img src="image/word.png" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 4</div>
    <img src="image/plans.jpg" style="width:100%">
  </div>
  
      <div class="mySlides">
    <div class="numbertext">4 / 4</div>
    <img src="image/worddd.png" style="width:100%">
  </div>
  
  
  
<!----------close slide show upper section---------->  
    
  <a class="prev" onclick="plusSlides(-1)"></a>
  <a class="next" onclick="plusSlides(1)"></a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="image/hope.png" style="width:100%" onclick="currentSlide(1)" alt="WE ARE ..HOPE..">
    </div>
    <div class="column">
      <img class="demo cursor" src="image/word.png" style="width:100%" onclick="currentSlide(2)" alt="MAKE IT YOURS...">
    </div>
    <div class="column">
      <img class="demo cursor" src="image/plans.jpg" style="width:100%" onclick="currentSlide(3)" alt="KEEP YOUR DOCTOR NEAR YOU...">
    </div>
    
    <div class="column">
      <img class="demo cursor" src="image/worddd.png" style="width:100%" onclick="currentSlide(4)" alt="HEALTH IS WEALTH..">
    </div>
	
  </div>
</div>
  <!---------------close image gallery--slide show---bellow section------------>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>  
	</div>
	
<!--##################################################################LEFT COLUMN END#################################-->
<?php 
include_once 'footer.php';
?>