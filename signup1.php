<!DOCTYPE html>
<html>
<title>Signup</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
<style>
  body
  {
  	background-image:url(signup.jpg);
    background-repeat:no-repeat;
    background-size:cover;
  	background-position: center;
	margin-center: 200px;
  }
</style>
</head>
<body>
<br>
<br>
<br>
<br>
<div style="margin-left:30%; margin-right:30%">
<form action="signup1.php" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-green w3-margin" >
<h2 class="w3-center">SIGNUP</h2>
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="first_name" type="text" placeholder="Name" required maxlength="30">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="phone" type="text" placeholder="Phone number" required maxlength="30">
    </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-calendar-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="dob" type="date" placeholder="DOB" required maxlength="30">
    </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-mars"></i></div>
    <div class="w3-rest">
     <select name="gender"  class="w3-input w3-border" >
    <option value="MALE"> MALE </option>
    <option value="FEMALE">FEMALE</option>
    <option value="OTHER">OTHER</option>
	
  </select>
    </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-building"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="city" type="text" placeholder="CITY" required>
    </div>
</div>
<p class="w3-center">
<button class="w3-button w3-section w3-green w3-ripple" type="submit" name="submit" value="submit"> Submit </button>
</p>
</form>
</div>
</body>
</html> 

 <?php 

$conn=mysqli_connect("localhost","root","","zoomcar")
or die("cannot connected");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

if(isset($_POST["submit"]))
{
session_start();
$fname=$_POST["first_name"];
$phone=$_POST["phone"];
$dob=$_POST["dob"];
$gender=$_POST["gender"];
$city=$_POST["city"];
$_SESSION["first_name"]=$fname;
$_SESSION["phone"]=$phone;
$_SESSION["dob"]=$dob;
$_SESSION["gender"]=$gender;
$_SESSION["city"]=$city;
echo'<script> window.location="signup2.php"; </script> ';
mysqli_close($conn);
}
?>