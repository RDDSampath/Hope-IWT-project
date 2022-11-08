<!DOCTYPE html>
<html>
<head>
<title>Medicare Supplementary</title>
<style>
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
	height:450px;
  background-color: white;
  padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}

<!------------ending by creating the upper part four images----------------->

<!----add a design line to the second theme----------->
.hrl{
border-top:1px solid black;
}
<!----------end------------>


* {
  box-sizing: border-box;
}
/* Create two equal columns that floats next to each other */
.medi_column {
  float: left;
  width: 70%;
  padding: 5px;
  height: 350px; /* Should be removed. Only for demonstration */
}
/* Clear floats after the columns */   <!.......not necessary.....>
.medi_row:after {
  content: "";
  display: table;
  clear: both;

}
.column10{
	float:left;
	text-align:center;
	width:40%;
	margin-left:5%;
	border:3px solid white;
}
</style>
<?php 
include_once 'sheader.php';
?>
<!--*****************************************************START LEFT COLUMN**************************-->
	<br>
	<div class="leftcolumn">
	<div class="nbody">
	<body>
	</div>
	
	



<!-- MAIN (Center website) -->
<div class="main">
<br>
<br>
<br>

<h2 style="text-align:center">Why choose medicare supplement insurance</h2>
<hr>

<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <img src="image/coin.jpg" alt="save money" style="width:100%;">
      <h2>Save money</h2>
      <p>Employers can offer their employees access to our wide network of health 
	  care services without expending lot of money.we’re able to adapt quickly and
	  support our customers whatever their needs in good or bad times.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="image/note.jpg" alt="" style="width:100%;height:200px;">
      <h2>Help education</h2>
      <p>We will help you to make your child’s dream become a reality as we can 
	     support their educational financial needs through the HOPE insurance plans 
		 as a part of our contribution.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="image/images.png" alt="our duty" style="width:100%;height:200px;">
      <h2>Responsible</h2>
      <p>By enabling more choice and flexibility for improved customer 
	  experience, we’re able to create healthier futures for our clients
	  and customers. We partner with them to help them look after their whole health.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="image/news.jpg" alt="informations" style="width:100%;height:200px;">
      <h2>Messages</h2>
      <p>We have provided facilities for our customers to get informed about current
	  medical field updates through our News feed and medical magazine page., people can
	  go through our Help page, Customer services page or contact us page</p>
    </div>
  </div>
<!-- END GRID -->
</div>

<!---------------------------------->
<br>

<h2 style="text-align:center">Medicare Supplement Plan Option</h2><hr>

<!-------------A-------------------->

<div class="row">
  <div class="column10" style="background-color:#aaa;">
    <h3>Plan A</h3><hr>
    <h3>Gold Plan - for those who need the most coverage.</h3><hr>
	
	    <b>Preventive care</b>
    <p>100% no waiting period</p>
	
	    <b>Major care</b>
    <p>50% after 12 months</p>
	
	
	
  </div>
  <div class="column10" style="background-color:#bbb;">
    <br>
      <b>Basic care</b>
    <p>70% after 6 months</p>
	
	<br>
	
    <b>Implants</b>
    <p>50% after 12 months</p>
	<br>
	
	<b>Deductibles</b>
  
	<p>Preventive care.</p>
    <p>$0 In-Network.</p>
    <p>$50 Out-of-Network.</p><br>
	
	
  </div>
</div>

<!-----------B--------------------->

<div class="row">
  <div class="column10" style="background-color:#aaa;">
    <h3>Plan B</h3><hr>
    <h3>Silver Plan- for those who need a lot but not everything</h3><hr>
	
	    <b>Preventive care</b>
    <p>80% no waiting period</p>
	
	    <b>Major care</b>
    <p>not couverd</p>
	
	
	
  </div>
  <div class="column10" style="background-color:#bbb;">
     <br>
  
      <b>Basic care</b>
    <p>50% after 6 months</p>
	
	<br>
	
    <b>implants</b>
    <p>50% after 12 months</p>
	
	<br>
	
	    <b>Deductibles</b>
        <p>Preventive care.</p>
	    <p>$0 In-Network.</p>
	    <p>$50 Out-of-Network.</p><br>
	
  </div>
</div>
<!-----------C--------------------->

<div class="row">
  <div class="column10" style="background-color:#aaa;">
    <h3>Plan C</h3><hr>
    <h3>Bronze Plan - for those who need lot of things.</h3><hr>
	
	    <b>Preventive</b>
    <p>100% no waiting period</p>
	
	    <b>Major care</b>
    <p>Not covered</p>
	
	 
	
  </div>
  <div class="column10" style="background-color:#bbb;">
    <br>
     <b>Basic care</b>
    <p>50% after 6 months</p>
	<br>
	
    <b>Implants</b>
    <p>Not covered</p>
	
	<br>
	    <b>Deductibles</b>
    <p>Preventive care.</p>
    <p>$0 In-Network.</p>
    <p>$50 Out-of-Network.</p>
	
  </div>
</div>

<!------------end--------------------->


</div>
	</div>
	
<!--##################################################################LEFT COLUMN END#################################-->
<?php 
include_once 'footer.php';
?>