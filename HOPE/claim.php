<!DOCTYPE html>
<html>
<head>
<title>Claim</title>
<style>
nav {
  float: left;
  width: 30%;
  height: 350px; /* only for demonstration, should be removed */
  background: #ccc;
  padding: 20px;
  
}
artical {
  float: left;
  padding: 20px;
  width: 70%;
  background-color:#ccc ;
  height: 350px;
}

section::after {
  content: "";
  display: table;
  clear: both;
}

@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }

.container {
  position: relative;
  font-family: Arial;
}

.text-block {
  position: absolute;
  bottom: 20px;
  right: 20px;
  background-color: black;
  color: white;
  padding-left: 20px;
  padding-right: 20px;
}
</style>
<?php 
include_once 'sheader.php';
?>
<!--*****************************************************START LEFT COLUMN**************************-->
	<br>
	<div class="leftcolumn" style="background-color:white;">
	<hr>
	<h2 style="background-color:MediumSeaGreen;"><B>Make a claim</B></h2>
	<hr>
<section>
	<nav>
	<h4 style="background-color:LightBlue;"><B>Documents Required</B></h4>
	<ul>
      <li>You should Download the request forms from the website, fill them and Email.</li>
      <li>A verification letter of your ID by a hospital should be attached with your documents.</li>
	</ul>

	<h4><B>Claim Documents</h4></B>
	<a href="Download/Dental Claim Form.pdf" ><button>download</button> Medical Claim Form</a>
	<a href="Download/Medical Claim Form.pdf" ><button>download</button>Denatal Claim Form</a>

	</nav>

<artical>
<h4 style="background-color:LightBlue;"><B>Additional documents should be submitted with the request form</h4></B>
	<ul>
      <li>Original claim form duly completed along with your signature</li>
      <li>Valid identity proof</li>
      <li>Doctor's prescription suggesting treatment in hospital</li>
      <li>Doctor's prescription advising diagnostic tests,medicines and consultations</li>
      <li>Indoor case papers</li>
      <li>Original pharmacy bills</li>
      <li>First Information Report, as required</li>
      <li>Policy details that include the policy number, name of the insured, address, and disease for which treatment is on</li>
        </ul>
</artiacal>
</section>
<img src="image./phone1.png" height="50" width="50"><h4><u><B>Support Team Hotline Numbers</B></u></h4>
0118342673<Br>
0115543257<Br>
0412235737<Br>
<hr>
<img src="image./email1.png" height="50" width="50"><h4><u><B>Email</B></u></h4>
hopehealthinsurance@gmail.com

<div class="container">
  <img src="image./claimpic.png" alt="image" style="width:100%;">
  <div class="text-block">
    <h3><b>Why You should get a Health Insurance</B></h3>
    <p>Here are six crucial reasons why you need to consider getting a health insurance plan today: </p>
    <h4><B>1. To fight lifestyle diseases</B></h4>

 <p>Lifestyle diseases are on the rise, especially among people under the age of 45. Illnesses like diabetes, obesity, respiratory problems, heart disease, all of which are prevalent among the older generation, are now rampant in younger people too. Some contributing factors that lead to these diseases include a sedentary lifestyle, stress, pollution, unhealthy eating habits, gadget addiction and undisciplined lives.</p> 
 <p>While following precautionary measures can help combat and manage these diseases, an unfortunate incident can be challenging to cope with, financially. Opting for Investing in a health plan that covers regular medical tests can help catch these illnesses early and make it easier to take care of medical expenses, leaving you with one less thing to worry about.</p> 
 <h4><B>2. To safeguard your family</B></h4>

 <p>When scouting for an ideal health insurance plan, you can choose to secure your entire family under the same policy rather than buying separate policies. Consider your ageing parents, who are likely to be vulnerable to illnesses, as well as dependent children. Ensuring they get the best medical treatment, should anything happen to them, is something you would not have to stress about if you have a suitable health cover. Research thoroughly, talk to experts for an unbiased opinion and make sure you get a plan that provides all-round coverage.</p> 
  <h4><B>3. To counter inadequate insurance cover</B></h4>
  <p>If you already have health insurance (for example, a policy provided by your employer) check exactly what it protects you against and how much coverage it offers. Chances are it will provide basic coverage. If your current policy does not provide cover against possible threats - such as diseases or illnesses that run in the family - it could prove insufficient in times of need. And with medical treatments advancing considerably, having a higher sum assured can ensure your every medical need is taken care of financially. But don't worry if you cannot afford a higher coverage plan right away. You can start low and gradually increase the cover.</p>
  <h4><B>4. To deal with medical inflation</B></h4>
  <p>As medical technology improves and diseases increase, the cost for treatment rises as well. And it is important to understand that medical expenses are not limited to only hospitals. The costs for doctor's consultation, diagnosis tests, ambulance charges, operation theatre costs, medicines, room rent, etc. are also continually increasing. All of these could put a considerable strain on your finances if you are not adequately prepared. By paying a relatively affordable health insurance premium each year, you can beat the burden of medical inflation while opting for quality treatment, without worrying about how much it will cost you.</p>
  <h4><B>5. To protect your savings</B></h4>
  <p>While an unforeseen illness can lead to mental anguish and stress, there is another side to dealing with health conditions that can leave you drained – the expenses. By buying a suitable health insurance policy, you can better manage your medical expenditure without dipping into your savings. In fact, some insurance providers offer cashless treatment, so you don't have to worry about reimbursements either. Your savings can be used for their intended plans, such as buying a home, your child's education and retirement. Additionally, health insurance lets you avail tax benefits, which further increases your savings. </p>
  <h4><B>6. Insure early to stay secured</B></h4>
  <p>Opting for a health insurance early in life has numerous benefits. Since you are young and healthier, you can avail plans at lower rates and the advantage will continue even as you grow older. Additionally, you will be offered more extensive coverage options. Most policies have a pre-existing waiting period which excludes coverage of pre-existing illnesses. This period will end while you are still young and healthy, thus giving you the advantage of exhaustive coverage that will prove useful if you fall ill later in life. </p>
</div>
</div>
</div>

<!--##################################################################LEFT COLUMN END#################################-->
<?php 
include_once 'footer.php';
?>
