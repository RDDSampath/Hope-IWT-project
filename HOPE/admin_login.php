<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<style>
.previous{
background-color: #f1f1f1;
color: black;
}
.round{
border-radius: 50%;
}
h2{
text-align: center;
}

input[type=text], input[type=password]{
width: 100%;
padding: 12px 15px;
margin:8px 0;
display:inline-block;
bborder: 1px solid #ccc;
box-sizing: border-box;
}
button{
background-color:Lightblue;
color: black;
padding: 14px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 100%;
}
button:hover{
opacity:0.8;
}
.cancelbtn{
width:auto;
padding: 8px 12px ;
background-color:#F44336;
}
.imgcontainer{
text-align:center;
float:center;
}
img.avatar{
width: 40%;
body-radius:50%;
}
.container{
padding:12px;
}
span.psw{
float:right;
padding-top:16px;
}
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
.cancelbtn{
width:30%;
}
</style>
<?php 
include_once 'header.php';
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
        $query = "SELECT * FROM `adminreg` WHERE username='$username' and password='".md5($password)."'";
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
	<br>
	<div class="leftcolumn">
	
	<br>
	<div style="background-color:#000a;color:white;border-radius:20px;">
<h2 style="border-radius:20px 20px 0 0 ;"><br> Member Login <br><br></h2>
<br>
<center><img src="image./avatar.jpg" alt="Avatar"></center>
<br>
<div class="container">
<label for="AID"><b>Admin ID</b></label>

<input type="text" placeholder="Enter Admin ID" name="username"value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>" required>
<label for="Psw"><b>Password</b></label>

<input type="password" placeholder="Enter Password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
<input type="submit" name="submit" value="login">
<label>
<input type="checkbox" checked="checked" name="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?>>Remember me</label>
</div>
<div class="container" style="background-color:#f1f1f1">
<button type="button" class="cancelbtn">Cancel</button>
</div>
</form>
	</div>
	</div>
<!--##################################################################LEFT COLUMN END#################################-->
<?php 
include_once 'footer.php';
?>
<?php } ?>