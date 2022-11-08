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
		$email = stripslashes($_REQUEST['email']);
		$email = mysqli_real_escape_string($con,$email);
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		$dob = stripslashes($_REQUEST['dob']);
		$pnum = stripslashes($_REQUEST["pnum"]);
		$ccode = stripslashes($_REQUEST["countryCode"]);
		$nat = stripslashes($_REQUEST["nation"]);
		$city = stripslashes($_REQUEST["city"]);
		$pcode = stripslashes($_REQUEST["pcode"]);
		$pno = stripslashes($_REQUEST["postno"]);
		$rd = stripslashes($_REQUEST["road"]);
		$like = stripslashes($_REQUEST["feedback"]);

		$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `register` (userName, password, email, trn_date, dob, poNumber, countryCode, nationality, city, postalCode, postNo, road, newsAlert) VALUES ('$username', '".md5($password)."', '$email', '$trn_date', '$dob', '$pnum', '$ccode', '$nat', '$city', '$pcode', '$pno', '$rd', '$like')";
        $result = mysqli_query($con,$query);
        if($result){
        echo '<script>alert("user name password saved!")</script>';
		echo "<div class='form'><h3>You are registered successfully.</h3><br/>Click here to <a href='Login_page.php'>Login</a></div>";
        }
    }else{
		echo '<script>alert("Error:")</script>'. $con->error;
	}
$con->close();
 ?>
	