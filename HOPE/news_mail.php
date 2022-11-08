<?php
$con=new mysqli("localhost","root","","hims");
if ($con->connect_error)
{
die("Connection failed: " . $con->connect_error);
}
?>
<?php
if(isset($_POST["btnSubmit"])){
$nemail = $_POST["nemail"];
$sql= "INSERT INTO news_emails(email)VALUES('$nemail')";
if($con->query($sql)){
echo '<script>alert("Your Email sent, we received thank you!")</script>';
}
else{
echo '<script>alert("Error:")</script>'. $con->error;
}
}
$con->close();
?>