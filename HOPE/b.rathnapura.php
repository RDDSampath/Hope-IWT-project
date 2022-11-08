<!DOCTYPE html>
<html>
<head>
<title>Branch</title>
<?php 
include_once 'sheader.php';
?>
<!--*****************************************************START LEFT COLUMN**************************-->
	<br>
	<div class="leftcolumn">
	<?php
$con = mysqli_connect("localhost","root","","hims");
$query=("select* from Branch where branchId='HB0005'");
$result=mysqli_query($con,$query); 
$rows=mysqli_fetch_assoc($result);
?>
<div style="width:100%;height:100px;
background-color:black;color:white;
text-align:center;padding-top:15px;
border-radius:20px;"><h1> Branch Details</h1></div>



<table style="margin-top:20px;border:1px solid white;width:98%;background-color:#000d;color:white;font-size:20px;padding-left:50px;">
	<tr><td>
	<h3>Select Branch:</h3>
	</td><td>
	<div class="dropdown"style="margin-left:30%;" >
    <button style="padding:18px 18px;background-color:black;color:white;">Select Branch >
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <div>
      <a href="branch.php">Matara</a>
      <a href="b.deniyaya.php">Deniyaya</a>
	  <a href="b.aluthgama.php">Aluthgama</a>
	  <a href="b.rathnapura.php">Rathnapura</a>
	  <a href="b.badulla.php">Badulla</a>
	  </div>
    </div>
  </div>
	</td><tr>
	
	<tr><td>
	<h3>Branch Name :</h3>
	</td><td>
	<div style="text-align:center;"><?php echo $rows['branch_name']; ?><br></div>
	</td></tr><tr><td>
	<h3>Branch Code :</h3>
	</td><td>
	<div style="text-align:center;"><?php echo $rows['branch_code']; ?><br></div>
	</td></tr><tr><td>
	<h3>Location :</h3>
	</td><td>
	<div style="text-align:center;"><?php echo $rows['location']; ?><br></div>
	</td></tr><tr><td rowspan="4">
	<h3>Address :</h3>
	</td><td>
	<div style="text-align:center;"><?php echo $rows['p_no']; ?>,<br></div>
	</td></tr><tr><td>
	<div style="text-align:center;"><?php echo $rows['street']; ?>,</div>
	</td></tr><tr><td>
	<div style="text-align:center;"><?php echo $rows['city']; ?>.<br></div>
	</td></tr><tr><td>
	<div style="text-align:center;"><?php echo $rows['postal_code']; ?><br></div>
	</td></tr><tr><td>
	<h3>Fax :</h3>
	</td><td>
	<div style="text-align:center;"><?php echo $rows['fax']; ?><br></div>
	</td></tr><tr><td>
	<h3>Telephone :</h3>
	</td><td>
	<div style="text-align:center;"><?php echo $rows['tele_no']; ?><br></div>
	</td></tr><tr><td>
	<h3>Email :</h3>
	</td><td>
	<div style="text-align:center;"><?php echo $rows['branch_email']; ?><br></div>
	</td></tr><tr><td>
	<h3>Open Time :</h3>
	</td><td>
	<div style="text-align:center;"><?php echo $rows['working_time']; ?>Hours<br></div>
	</td></tr><tr><td>
	<h3>Parking :</h3>
	</td><td>
	<div style="text-align:center;"><?php echo $rows['parking_place']; ?><br></div>
	</td></tr>
</table>
	</div>
	
<!--##################################################################LEFT COLUMN END#################################-->
<?php 
include_once 'footer.php';
?>
