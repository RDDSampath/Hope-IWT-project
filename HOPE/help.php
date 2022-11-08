<!DOCTYPE html>
<html>
<head>
<title>Help</title>
<style>
/*for contact us page*/
.header {
  background-color: #e6e6fa;
  padding: 20px;
  text-align: center;
  font-size: 50px;
  font-family: "Lucida Console", "Courier New", monospace;
}

#hdimage{
	
	float:left;
	width:100%;
	height:300px;
	margin-top:5px;
	
}

p{
	padding-top:0px;
	text-align:center;
	background-color:#e6e6fa;
}


.buttons{
	width: 49%;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
	background-color:#2f4f4f;
	color: white;
	
	
}


/*w3.....................*/

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  background-color: #FFFFFF;
}

input[type=email], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  background-color: #FFFFFF;
}

.textarea{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  background-color: #FFFFFF;
}

input[type=.submit] {
  width: 100%;
  background-color: #6495ed;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=.submit]:hover {
  background-color: #45a049;
}

.divi {
	margin-top:20px;
	border-radius: 5px;
	background-image:url("../image/help2.jpg");
	padding: 20px;
}
/*end of help css*/
</style>

<?php 
include_once 'sheader.php';
?>
<!--*****************************************************START LEFT COLUMN**************************-->
	<br>
	<div class="leftcolumn">
	<!--------------------------begining of help page------------------->
		<img id="hdimage" src="image/helptop.jpg"width="100%" alt="help icon"> <!--image on top-->
		<p class="header">Helps</p><hr>
	
			
		<a href="branch.php"><input class="buttons" type="button" id="branch" name="branch" value="Branches"></a>
			
		<a href="#"><input class="buttons" href="faq.html" type="button" id="faq" name="faq" value="FAQs"></a>
		<div class="divi">
			<p>Write your messages to us</p>
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<label for="name">Name :</label><br>
				<input type="text" id="hname" name="hname" placeholder="Name" ><br><br>
				
				<label for="cNum">Contact number:</label><br>
				<input type="text" id="cNum" name="hcnum" placeholder="07XXXXXXXX" required pattern="[0-9]{10}"><br><br>
				
				<label for="email">E-Mail:</label><br>
				<input type="email" id="mail" name="hmail" placeholder="Email" ><br><br>
				
				<textarea class="textarea" rows="6" cols="55%" id="massege" name="massege" placeholder="Type Your message" required></textarea><br><br>
		
				<p>This page is helpful for you?</p>
				<input type="radio" id="yes" name="choice" value="Yes">
				<label for="yes" >YES</label><br>
				<input type="radio" id="no" name="choice" value="No">
				<label for="yes" >NO</label><br><BR>
				<input type="submit" name="submitbtn" value="Submit">
			</form>
		</div> <!--end of help page-->
	</div>
	
<!--##################################################################LEFT COLUMN END#################################-->
<?php
require 'p.help.php';
?>
<?php 
include_once 'footer.php';
?>