<!DOCTYPE html>
<html>
<head>
<title>pay online</title>
<style>
.rinput{margin-top:10px;width:60%;height:30px;float:right;}
 .rsinput{margin-top:10px;width:30%;height:30px;float:right;}
 .rlabel{width:40%;float:left;color:white;padding-left:40px;}
 .submitr{background-color:Green;color:white;
 padding:20px 20px;margin-bottom:30px;
 width:35%;
 }
 .submitr:hover{background-color:red;}
 .onlinepay_Imgg{
	 float:center;
	 width:20%;
	 float:left;
	 padding:20px 20px;
 }
</style>
<?php 
include_once 'sheader.php';
?>
<!--*****************************************************START LEFT COLUMN**************************-->
	<br>
	<div class="leftcolumn">
	<div style="background-color:#000b;margin-top:10px;border-radius:20px;">
	<h2 style="text-align:center;width:100%;border-radius:20px;padding:10px 0 10px  0">
	Pay online</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<div style="width:80%">
	
	<div class="rlabel">Email</div>
	<input class="rinput" type="text" name="pemail" pattern="+@globex.com" size="30" required><br><br>
	
	<div class="rlabel">password</div>
	<input class="rinput" type="text" name="ppwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required><br><br>
<br>
<br>	
<div class="rlabel">Type of insurance plan</div>
<select name="pplan" class="rinput">
	<option value="Medicare Supplement Insurance">Medicare Supplement Insurance</option>
	<option value="Health Insurance For Individuals And Families">Health Insurance For Individuals And Families</option>
	<option value="Dental Insurance Plans">Dental Insurance Plans</option>
	<option value="Medicare Plans And Part d Plans">Medicare Plans And Part d Plans</option>
</select>	
<br>
<br>
<br>
<div name="pmethod" class="rlabel">Select a payment Method:</div>
<select name="pmethod" class="rinput">
	<option value="VISA">VISA</option>
	<option value="Master Card">Master Card</option>
	<option value="Paypal">Paypal</option>
</select>
<br><br><br>
<br><div style="float:right;background-color:white; width:60%;height:80px;border-radius:10px;">
			<img src="image/visa.png" class="onlinepay_Imgg">
			<img src="image/mastercard.png" class="onlinepay_Imgg">
			<img src="image/jcb.png" class="onlinepay_Imgg">
			<img src="image/paypal.png" class="onlinepay_Imgg">
	</div>
	</div>
<br><br><br>
<br><br><br>
<center><a href="form1.php"><input class="submitr" type="submit" name="paybtn" value="Pay"></center></a>
	</form>
	</div>
	</div>
<!--##################################################################LEFT COLUMN END#################################-->
<?php
require 'p.pay.php';
?>
<?php 
include_once 'footer.php';
?>