
<!DOCTYPE html>
<html>
<head>
<title>LOGIN PAGE</title>
<style>
/* Style the container for inputs */
.container {
  background-color: #f1f1f1;
  padding: 20px;
}
#message {
  display:none;
  background: #f1f1f1;
  color: #000;
  position: relative;
  padding: 20px;
  margin-top: 10px;
}

#message p {
  padding: 10px 35px;
  font-size: 18px;
}
/* Add a green text color and a checkmark when the requirements are right */
.valid {
  color: green;
}

.valid:before {
  position: relative;
  left: -35px;
  content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
  color: red;
}

.invalid:before {
  position: relative;
  left: -35px;
  content: "✖";
}
</style>

<?php
include_once'header.php';
?>
<?php
require 'login.inc.php';
?>
<?php
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `register` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: sindex.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/><button>Click here to <a href='login_page.php'>Login</a></button></div>";
				}
    }else{
		
?>
<!--*****************************************************START LEFT COLUMN**************************-->
	<div class="leftcolumn">
	<!--+++++++++++++++++++++++++++++++++++++++++++++++++++LOG IN -->
	<div class="login">
		<div class="logslid">
		
		<!--slide show****************************************************************-->
		<div class="slideshow-container">
		<div class="mySlides fade">
		  <img src="image./slide4.jpg" style="width:100%">
		</div>

		<div class="mySlides fade">
		  <img src="image./slide5.jpg" style="width:100%">
		</div>

		<div class="mySlides fade">
		  <img src="image./slide6.jpg" style="width:100%">
		</div>
		</div>
			<div style="text-align:center;margin-top:5%;">
			<span class="dot" onclick="currentSlide(1)"></span> 
			<span class="dot" onclick="currentSlide(2)"></span> 
			<span class="dot" onclick="currentSlide(3)"></span> 
		</div>
		<br>
		<!--Slide show java script code***********************************************-->

		<script>
		var slideIndex = 0;
		showSlides();

		function showSlides() {
		  var i;
		  var slides = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("dot");
		  for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";  
		  }
		  slideIndex++;
		  if (slideIndex > slides.length) {slideIndex = 1}    
		  for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		  }
		  slides[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " active";
		  setTimeout(showSlides, 3000); // Change image every 3 seconds
		}
		</script>		
		</div>
		
		<!--log in form**********************************************************************-->
		
		<div class="loginbox">
		<h3>LOG IN</h3><br><br>
		<div class="form">
			
		<form action="" method="post" name="login">
		
		User Name/E-mail*
		<input class="lognp" type="text" name="username" id="username" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>" required><br><br>
		Password*
		<input class="lognp" type="password" name="password" id="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
		<br><br>
		<input type="checkbox" id="remember" name="remember" value="yes"<?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?> >Remember Me<br><br>
		<input class="loginbtn" type="submit" name="submit" value="LOG IN"><br>
		<br><br>
		<a href="#"><p>Forgot your password ?</p></a> 
		
		</form>
		</div>
		<a href="register.php"><button class="loginbtn">Create Account >></button></a>
		</div>
	</div>
<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
<!--password validate javascript-->
	<script src="pwdvalid.js"></script>	
<!--+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++OUR PRODUCT-->
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<div class="Oproduct" style="background-color:black">
			<div style="color:white;border:5px solid #ddd;"><h4>Our Products</h4></div>
			<div style="height:150px;border:3px solid #ddd;">
			<a href="individuals_family.php"><div class="product"><img src="image./1 (1).png" alt="Familes and Indviduals"><br>Familes and Indviduals</div></a>
			<a href="#"><div class="product"><img src="image./1 (2).png" alt="Medicare Adavantage and part D plan"><br>Medicare Adavantage and part D plan</div></a>
			<a href="#"><div class="product"><img src="image./1 (3).png" alt="Dental"><br>Dental</div></a>
			<a href="mcsup.php"><div class="product"><img src="image./1 (4).png" alt="Medicare supplementary"><br>Medicare supplementary</div></a>
			</div>
		</div>
	</div>
<!--##################################################################LEFT COLUMN END#################################-->

<?php
include_once'footer.php';
?>
<?php } ?>