<!DOCTYPE html>
<html>
<head>
<title>LOGIN PAGE</title>
<style>
.thankbox{                          /* adding a box top of the page*/
  background-color: lightgreen;
  width: 80%;
  height:40%;
  border: 5px solid #04AA6D;
  padding: 10px;
  margin: 10px;
}

.contactbox{                      /*adding design to the contact box*/
 background-color: #f1f1f1;
 width: 50%;
 height:40%;
 border: 5px solid  #2196F3;
 padding: 10px;
 margin: 10px;
}
calldetails{                 /*add design to the contact list*/ 
  width: 320px;
  padding: 10px;
  border: 5px solid gray;
  margin: 0;
}
</style>

<?php
include_once'sheader.php';
?>
<div class="leftcolumn">
<br><br><br><br><br>
	<div class="thankbox"><br>
	<h2>Thank you for the information you have provided so far.</h2>
	<br><br>
	<ul>
	    <p><li>This notification serves as confirmation that your request to change the details has been approved.
	
        <li>Should you have any questions or concerns regarding this matter, please feel free to
        contact us through mail or the given contacts bellow for further details.
	  
	    <li>Otherwise, we thank you for being a valued part of 
	    <b>HOPE Health Insuarance</b>.</p>
	   
	   <br>
	   
	   
	   <align-text:right>
	   
	
	   
	   <a href="form1.php"><input type="button"  style="width:150px; height:50px; "name="BACK" value="BACK"></a>
	   </align-text:right>
	   <br><br>
	</ul>
	   
	</div>
	
	<br><br><br>
	
	<div class="contactbox"><br>
	
	<h3>For more information</h3><hr><br>
	
	<h4>Call us -></h4>
	<img src="image/call.gif" alt="call us" style="width:130px; height:130px;">
	
	045-1234567890-Mr.John <br>
	071-2345672134-Mrs.Ann
	<br><hr>
	<br>
	
	<h4>Email us -></h4>
	<img src="image/mail.gif" alt="call us" style="width:130px; height:130px;">
	HOPE Insurance@gmail.com<br>
	Health care@gmail.com
	</div>
	
		</div>
<!--LEFT COLUMN END-->

<?php
include_once'footer.php';
?>