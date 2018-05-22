<!DOCTYPE html>
<html>
<title>Booking</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body style="background-image:url(signup.jpg); background-repeat: inherit">
<br>
<br>
<br>
<br>
<div style="margin-left:30%; margin-right:30%">
<form action="booking.php" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" >
<h2 class="w3-center">Booking Details</h2>
 
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
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="email" type="email" placeholder="Email" required>
    </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-calendar-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="pickd" type="date" placeholder="PickDate" required maxlength="30">
    </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-calendar-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="dropd" type="date" placeholder="DropDate" required maxlength="30">
    </div>
</div>

<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-car"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="dist" type="text" placeholder="Distance" required>
    </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-clock-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="pick" type="text" placeholder="Pickup" required>
    </div>
</div>
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-clock-o"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="drop" type="text" placeholder="Drop" required>
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
$fname=$_POST["first_name"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$pickd=$_POST["pickd"];
$dropd=$_POST["dropd"];
$dist=$_POST["dist"];
$pick=$_POST["pick"];
$drop=$_POST["drop"];
$temp=$dist-25;
if($temp>0){
	$res1=25*8;
	$res2=$temp*12;
	$res3=$res1+$res2;
}
else{
	$res3=$dist*8;
}
$_SESSION["res3"]=$res3;
$sql="INSERT INTO booking (name,phone,email,pickd,dropd,dist,pick,droptime) VALUES ('$fname','$phone','$email','$pickd','$dropd','$dist','$pick','$drop')";
if (mysqli_query($conn,$sql)) 
{

echo'<script> window.location="payment.php"; </script> ';

exit();
}
else
{
echo"fail";
}

}
mysqli_close($conn);
?>