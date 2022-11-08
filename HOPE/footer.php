<!--START RIGHT COLUMN-->
<div class="rightcolumn">

<div class="search-container">
    <form action="/index.php">
      <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()"></form>
  </div>
  <br>
			  <!--Facebook like box-->
			  <div style="padding-bottom:5px;padding-top:5px;font-size:20px;text-align:center;background-color:black;color:white;">Like Us</div>
			<div style="
						width:100%;
						height:140px;
						margin-top:20px;margin-bottom:20px;
						background-color:white;
						border:1px solid black;">
						<div class="fb-page"
data-href="https://www.facebook.com/HOPE-Insurence-106147991671821" 
data-width="340"
data-hide-cover="false"
data-show-facepile="true"></div>
				
			</div>
			<script src="https://connect.facebook.net/us_EN/sdk.js#xfbml=1&amp;version=v2.5"></script>
			
<!--About us-->

    <a href="Over_View.php"><div style="text-align:center;background-color:transparent;">
		<h3 style="border:1px solid black;background-color:black;color:white;">About Us</h3>
		<div style="background-color:#000b;"><img src="image./logo1.png" style="width:60%;padding-top:5px;">
		<p style="color:white;padding-left:10px;padding-right:10px;">Today we are one of the leading <br>life insurance companies in Sri<br> 
		Lanka.Hope, is one of the most<br> dynamic and reputable companies <br>in Sri Lanka.</p></div>
    </div></a>
    <div style="text-align:center;">
		<h3 style="border:1px solid black;background-color:black;color:white;">Discount panel</h3>
		<div style="border-radius:10px;border:1px solid black;"><img src="image./Discount.jpg" style="width:100%;height:100%;border-radius:10px;"></div><br/>
		<div style="border-radius:10px;border:1px solid black;"><img src="image./Discount2.jpg" style="width:100%;height:100%;border-radius:10px;"></div><br/>
	</div>
  </div>
 <!--RIGHT COLUMN END-->
</div>	
<!--ROW END-->

<!--Start FOOTER 1-->
		<!--News update slides-->
<h4 style="text-align:center;margin:10px;padding:10px 10px;background-color:black;color:white;">News Updates</h4>
	<div class="newsbox">
		<a href="news1.php"><div class="newsimage"><img style="width:100%;height:100%;border-radius:10px;border:1px solid black;" src="image./news01.jpg" alt="news"></div></a>
		<a href="news2.php"><div class="newsimage"><img style="width:100%;height:100%;border-radius:10px;border:1px solid black;" src="image./news02.jpg" alt="news"></div></a>
		<a href="news3.php"><div class="newsimage"><img style="width:100%;height:100%;border-radius:10px;border:1px solid black;" src="image./news03.jpg" alt="news"></div></a>
		<a href="news4.php"><div class="newsimage"><img style="width:100%;height:100%;border-radius:10px;border:1px solid black;" src="image./news04.jpg" alt="news"></div></a>
		<a href="news5.php"><div class="newsimage"><img style="width:100%;height:100%;border-radius:10px;border:1px solid black;" src="image./news05.jpg" alt="news"></div></a>
	</div>
<!--Start FOOTER 2-->
	<div class="footer">
		<div class="footcolumn">
		<h3><b><u>RESOURCES</u></b></h3>
			 <a href="#">OUR PRODUCT</a><br>
			 <a href="#">ONLINE SERVICES</a><br>
			 <a href="#">NEWS </a><br>
			 <b><span style='font-size:30px;'>&#128231;</span> Subcribe To Our News Letters</b>
			 
			 <!--news Letters Mails-->
			 <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<input type="text" name="nemail" id="nemail" placeholder="Email Address" required>
				<input type="submit" value="submit" name="btnSubmit">
			 </form>
		</div>
		
		<!--foot center-->
		<div class="footcolumn">
			<a href="sindex.php"><img src="image./footlogo.png"alt="HOPE"width="30%" style="padding-top:20px;"></a>
			<br><div class="follow"><b>Follow Us On</b></div>
			
			<div><a href="https://www.facebook.com/"><img src="image./facebook.png" class="social"></a>
				<a href="https://www.instagram.com/"><img src="image./instagram.png" class="social"></a>
				<a href="https://www.twitter.com/"><img src="image./twitter.png" class="social"></a>
				<a href="https://www.linkedin.com/"><img src="image./linkedin.png" class="social"></a>
				<a href="https://myaccount.google.com/profile"><img src="image./google-plus.png" class="social"></a>
			</div>
		</div>
	
		<!--foot right-->	
		<div class="footcolumn">
			<h3><span style='font-size:30px;'>&#128222;</span>Contact Us</h3>
			<p><b>P-No-0412586925<br>
			Address-620/a,Main street,<br>
			Matara.</b></p>
			<h4>You Can Pay With</h4>
			<div>
				<a href="pay.php"><img src="image./visa.png" class="pay"></a>
				<a href="pay.php"><img src="image./mastercard.png" class="pay"></a>
				<a href="pay.php"><img src="image./jcb.png" class="pay"></a>
				<a href="pay.php"><img src="image./paypal.png" class="pay"></a>
			</div>
		</div>
	</div>
	<script>
function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}
</script>
<!--END FOOTER-->
</body>
</html>
<?php
require 'news_mail.php';
?>