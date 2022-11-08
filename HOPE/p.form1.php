<?php
$con=new mysqli("localhost","root","","hims");
if ($con->connect_error)
{
die("Connection failed: " . $con->connect_error);
}
?>
<?php
if(isset($_POST["submitbtn"])){
$userid = $_POST["userId"];
$username= $_POST["userName"];
$dob = $_POST["dob"];
$email = $_POST["email"];
$pno = $_POST["phoneNumber"];
$pno = $_POST["phoneNumber"];
$pno = $_POST["phoneNumber"];

if($radioVal == "yes")
{
    echo("thank you !");
}
else if ($radioVal == "no")
{
    echo("ok i will help you");
}

$sql= "INSERT INTO help(name,contact,email,massege,feedback)VALUES('$name','$hcnum','$hemail','$masege','$radioVal')";
if($con->query($sql)){
echo '<script>alert("Your details, we received thank you!")</script>';
}
else{
echo '<script>alert("Error:")</script>'. $con->error;
}
}
$con->close();
?>