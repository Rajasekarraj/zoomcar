<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Payment Portal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>

  <div class="container">
<div class="row">
<!-- You can make it whatever width you want. I'm making it full width
on <= small devices and 4/12 page width on >= medium devices -->
<div class="col-xs-12 col-md-4">


<!-- CREDIT CARD FORM STARTS HERE -->
<div class="panel panel-default credit-card-box">
<div class="panel-heading display-table" >
<div class="row display-tr" >
<h3 class="panel-title display-td" >Payment Details</h3>
<div class="display-td" >                            
<img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
</div>
</div>                    
</div>
<div class="panel-body">
<form action="payment.php" method="post" role="form" id="payment-form">
<div class="row">
<div class="col-xs-12">
<div class="form-group">
<label for="cardNumber">CARD NUMBER</label>
<div class="input-group">
<input 
type="tel"
class="form-control"
name="cardNumber"
placeholder="Valid Card Number"
autocomplete="cc-number"
required autofocus 
/>
<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
</div>
</div>                            
</div>
</div>
<div class="row">
<div class="col-xs-7 col-md-7">
<div class="form-group">
<label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
<input 
type="tel" 
class="form-control" 
name="cardExpiry"
placeholder="MM / YY"
autocomplete="cc-exp"
required 
/>
</div>
</div>
<div class="col-xs-5 col-md-5 pull-right">
<div class="form-group">
<label for="cardCVC">CVV CODE</label>
<input 
type="tel" 
class="form-control"
name="cardCVC"
placeholder="CVV"
autocomplete="cc-csc"
required
/>
</div>
</div>
</div>
<p class="w3-center">
<button class="w3-button w3-section w3-blue w3-ripple" type="submit" name="submit" value="submit"> Submit </button>
</p>
<div class="row" style="display:none;">
<div class="col-xs-12">
<p class="payment-errors"></p>
</div>
</div>
</form>
</div>
</div>            
<!-- CREDIT CARD FORM ENDS HERE -->


</div>            



</div>
</div>

	<!-- If you're using Stripe for payments -->
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
	
</body>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery.payment/1.2.3/jquery.payment.min.js'></script>

  

    <script  src="js/index.js"></script>




</body>

</html>
<?php
include("email.php");
$conn=mysqli_connect("localhost","root","","zoomcar")
or die("cannot connected");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

session_start();
$res3=$_SESSION["res3"];
echo "<h2>The Booking Cost is: $res3</h2>";
if(isset($_POST["submit"]))
{
$cno=$_POST["cardNumber"];
$exp=$_POST["cardExpiry"];
$cvv=$_POST["cardCVC"];
$email=$_SESSION["email"];
$fname=$_SESSION["first_name"];
$sql="INSERT INTO payment (cno,exp,cvv,email) VALUES ('$cno','$exp','$cvv','$email')";
if (mysqli_query($conn,$sql)) 
{
$mess='
		                                 Hello!!!
										 
										 
										  
				Your Booking has been confirmed!!';
$mail->addAddress($email);
$mail->Subject = 'Booking Confirmation';
$mail->Body    = $mess;
if (!$mail->send()) {
      
  echo "Message error";
} else {
		echo'<script> window.location="disp.php"; </script> ';
   
}


exit();
}

else
{
echo"fail";
}

}
mysqli_close($conn);
?>