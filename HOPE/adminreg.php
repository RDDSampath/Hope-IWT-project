
<?php
$con=new mysqli("localhost","root","","hims");
if ($con->connect_error)
{
die("Connection failed: " . $con->connect_error);
}
?>

<?php
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['username'])){
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `adminreg` (userName, password) VALUES ('$username', '".md5($password)."')";
        $result = mysqli_query($con,$query);
        if($result){
        echo '<script>alert("user name password saved!")</script>';
		echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
		echo '<script>alert("Error:")</script>'. $con->error;
	}
$con->close();
 ?>

<body>
<h2>Register Admin</h2>
<form name="registration" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
admin name:<input type="text" name="username">
password: <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
<input type="submit" name="submit">

</form>
</body>