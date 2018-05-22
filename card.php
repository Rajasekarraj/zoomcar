<!DOCTYPE html>
  <html>
    <head>
	<title>Login</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script> 
$(document).ready(function(){
        $("form").animate({left: '250px'});
});
</script> 

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">
	</script>
<script> 
$(document).ready(function(){
        $("body").animate({left: '250px'});
});
</script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
<!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  <script>
		   $(document).ready(function() {
    Materialize.updateTextFields();
  });
  </script>
  <style>
  .card {
 height:400px;
}
.body{
	background-color:powderblue;
}
  </style>
  </head>
  <body background ="maxresdefault.jpg">
  <div class="container">
  <div class="jumbotron"> 
   <br><br><br>
   
  </div>
  </div>  
  <div class="row container">
  <div class="container">
  <div class="row valign-wrapper">
    <div class="col s6 offset-s3 valign">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">LOG IN</span>
		    </div>
			<div class="card-action">

			<form class="col s12" style="font-weight:bold"  method="post" action="card.php">
    <div class="row">
        <div class="input-field col s12">
          <input id="email" name="email" type="email" class="validate">
          <label class="active" for="email"><i class="w3-xxlarge fa fa-envelope"></i> Email</label>
        </div>
      </div>
	   <div class="row">
        <div class="input-field col s12">
          <input id="pass" name="pass" type="password" class="validate">
          <label  class="active" for="password"><i class="w3-xxlarge fa fa-key"></i> Password</label>
        </div>
		<p class="w3-center">
<button class="w3-button w3-section w3-blue w3-ripple" type="submit" name="submit" value="submit"> Submit </button>
</p>
  </form>

        </div>
		</div>
      </div>
    </div>
  </div>
</div>
    
		<!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
  <?php 
  
   $email=$pass="";
 
  $conn=mysql_connect("localhost","root","")
or die("cannot connected");
mysql_select_db("zoomcar",$conn);
 

  if ((isset($_POST["email"]))&&(isset($_POST["pass"]))&&(isset($_POST["submit"])))
  {
$email=$_POST["email"];
$pass=$_POST["pass"];
session_start();
 $_SESSION["email"]=$email;
$result=mysql_query("SELECT * FROM signup1 WHERE email='$email' AND pass='$pass'");
$row=mysql_num_rows($result);
if($row==1)
{

echo "sucess";
header('location:rules.php');
}
else
{
echo "<br> <br> <h6> check your email and password <h6>";

}
}


?>
