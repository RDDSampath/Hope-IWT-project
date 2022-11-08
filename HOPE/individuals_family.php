<!DOCTYPE html>
<html>
<head>
<title>Individuals & family.php</title>
<style>
a:hover{
background-color: #ddd;
color: black;
}
.previous{
background-color: #F1F1F1;
color: black;
}
.round{
border-radius: 10%;
}
.container {
  position: relative;
  max-width: 60%;
  margin:10px;
}
.container .content {
  position: absolute;
  bottom: 0;
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1;
  width: 100%;
  padding: 20px;
}
.registerbtn{
width: auto;
padding: 10px 18px;
background-color: #F44336;
}
.registerbtn{
width: 100%;
text-align: center;
}
</style>
<?php 
include_once 'sheader.php';
?>
<!--*****************************************************START LEFT COLUMN**************************-->
	<br>
	<div class="leftcolumn">
<br><br>
	<div style="background-color:#000b;color:white;border-radius:20px;">
<a href="#" class="previous-round">&#8249;</a>
<div class="container">
  <img src="image./individual 2.jpg" alt="Individual" style="width:100%;">
  <div class="content">
    <h1>Health Insurance For Individuals And Family</h1>
    
  </div>
</div>
<h3>Individual and Family Insurance is one of our insurance type. This insurance plan can be purchased on health insurance exchanges during the annual open enrollment period.</h3>
<br>
<img src="image./individual 3.jpg" alt="IND" style="100%;">
<br>
<h3>Individual and Family health insurance plans are both required to cover the 9 essential health benifits.</h3>
<ul>
  <li>Outpatient Services </li>
  <li>Wellness Services </li>
  <li>Emergancy Services </li>
  <li>Hospitalization</li>
  <li>Maternity & Newborn care Services</li>
  <li>Mental healthcare Services</li>
  <li>Prescription Services</li>
  <li>Pediatric Services</li>
  <li>Laboratory Services</li>
</ul>  
<h3>A family policy is identical to an individual plan except that it will cover miltiple individuals.</h3>
<a href="register.php"><div style="text-align:center;Background-color:black;color:white;padding:20px 20px;">Register Now</div></a>
<br>
</div>
	</div>
<!--##################################################################LEFT COLUMN END#################################-->
<?php 
include_once 'footer.php';
?>