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
<form action="signup2.php" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-green w3-margin" >
<h2 class="w3-center">CREDENTIALS</h2>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="email" type="email" placeholder="Email" required>
    </div>
</div>


<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="pass" type="password" placeholder="Password" required minlength="8" maxlength="12">
    </div>
</div>
<p class="w3-center">
<button class="w3-button w3-section w3-blue w3-ripple" type="submit" name="submit" value="submit"> Submit </button>
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
$email=$_POST["email"];
$pass=$_POST["pass"];
$_SESSION["email"]=$email;
$fname=$_SESSION["first_name"];
$phone=$_SESSION["phone"];
$dob=$_SESSION["dob"];
$gender=$_SESSION["gender"];
$city=$_SESSION["city"];
$sql="INSERT INTO signup1 (name,phone,dob,gender,city,email,pass) VALUES ('$fname','$phone','$dob','$gender','$city','$email','$pass')";
if (mysqli_query($conn,$sql)) 
{

echo'<script> window.location="card.php"; </script> ';

exit();
}
else
{
echo"fail";
}

}
mysqli_close($conn);
?>