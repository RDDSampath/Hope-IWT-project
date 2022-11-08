<?php
// Start the session
session_start();
//Linking the configuration file
require 'config.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>form</title>
<style>
table,th,td{             
border:1px solid black;   
}

.onlineform_hr{
	border-top:2px solid black;
}
</style>
<?php 
include_once 'sheader.php';
?>
<!--START LEFT COLUMN-->
	<br>
	<div class="leftcolumn">
	
	<form  name="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<br>
	
<h3 style="background-color:white;color:blue;">E-Form <img src="image./book.gif" alt="book" style="width:300px;height:150px;"></h3>

<hr class="onlineform_hr">
<br><br>

<table width="85%" style="background-color:lightblue;color:green;">

<tr><th><h2>Request to change User Details.</h2></th></tr>

<br>

<tr><td><h3>Please fill this below form to change your details.
 If you want to change futher more pleace feel free to cotact us by 
 given contact numbers.</h3>  
<br>
<br>

<h2>Your Information</h2><hr>
<br>

	<label for="userId">Enter your Hope ID number: </label><br>
	<input type="text" id="userId" name="userId" placeholder="xxxx"><br><br>
	
	<label for="user_name">User name: </label><br>
	<input type="text" id="user_name" name="userName"><br><br>
	
	<label for="date">Date of birth: </label><br>
	<input type="date" id="date" name="dob" placeholder="xx/xx/xxxx"><br><br>
	
<h2>Change your details</h2><hr>
<br>

	<label for="email">E - mail: </label><br>
	<input type="email" id="email" name="email" placeholder="abc@gmail.com">
	
	<br><br>
	
	<label for="phone_number">Telephone number: </label><br>
	<input type="tel" id="phone_number" name="phoneNumber" plceholder="123-456-7890"><br><br>
	
	<label for="address">Address: </label><br>
	<textarea name="message" style="width:300px; height:70px;"></textarea><br><br>
	
	<label for="Payment-method">Payment-method: </label><br>
	<select name="pmethod">
	<option value="VISA">VISA</option>
	<option value="MasterCard">MasterCard</option>
	<option value="PayPal">PayPal</option>
	</select>
	<br><br>
	<br>
	
	<center>
	<input type="submit" style="width:150px; height:50px; "name="submit" value="Submit">
	<!--have to link to the form-2 button from NEXT button.-->
	
	<a href="form2.php"><input type="button" style="width:150px; height:50px; "name="next" value="NEXT"></a>
	<center>
	<br>
	<br>
	<br>
	
</td></tr>
</table>
</form>
	</div>
<!--LEFT COLUMN END-->
<?php 
include_once 'footer.php';
?>
