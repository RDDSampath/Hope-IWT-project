<?php
$con=new mysqli("localhost","root","","hims");
if ($con->connect_error)
{
die("Connection failed: " . $con->connect_error);
}

if(isset($_POST["paybtn"])){
$paymail = $_POST["pemail"];
$paypwd = $_POST["ppwd"];
$payplan = $_POST["pplan"];
$paymethod = $_POST["pmethod"];
$url ='register.php';

$sql= "INSERT INTO payment(email,password,insurancePlan,payMethod)VALUES(
'$paymail','$paypwd','$payplan','$paymethod')";
if($con->query($sql))
{
	echo "<script>window.location = 'form1.php'</script>";
}
else
{
	echo '<script>alert("Error:")</script>'. $con->error;
}
}
$con->close();
?>