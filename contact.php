<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Contact</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='css/woocommerce-layout.css' type='text/css' media='all'/>
<link rel='stylesheet' href='css/woocommerce-smallscreen.css' type='text/css' media='only screen and (max-width: 768px)'/>
<link rel='stylesheet' href='css/woocommerce.css' type='text/css' media='all'/>
<link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'/>
<link rel='stylesheet' href='style.css' type='text/css' media='all'/>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Oswald:400,500,700%7CRoboto:400,500,700%7CHerr+Von+Muellerhoff:400,500,700%7CQuattrocento+Sans:400,500,700' type='text/css' media='all'/>
<link rel='stylesheet' href='css/easy-responsive-shortcodes.css' type='text/css' media='all'/>
<style>
form {
    width: 300px;
    margin: 0 auto;
}
</style>
</head>
<body class="home page page-template page-template-template-portfolio page-template-template-portfolio-php">
				<header class="entry-header">
				<h1 class="entry-title">Contact</h1>
				</header>
				<!-- .entry-header -->
				<div class="entry-content">
						
					<!-- BEGIN MAP -->
					<div>
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3888.8137719326282!2d77.6685147!3d12.9196878!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae12dcf0ec5527%3A0x88fc48082def5e52!2sOdessa!5e0!3m2!1sen!2sin!4v1526793687067" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
						
					<div class="wpcmsdev-columns">
						<div class="column column-width-one-half">
							<h4>Quick Contact</h4>						
							
							<form class="wpcf7" method="post" action="contact.php" id="contactform">
								<div class="form">
									<p><input type="text" name="name" placeholder="Name"></p>
									<p><input type="text" name="email" placeholder="E-mail Address"></p>
									<p><textarea name="comment" rows="3" placeholder="Message"></textarea></p>
									<p class="w3-center">
<button class="w3-button w3-section w3-blue w3-ripple" type="submit" name="submit" value="submit"> Submit </button>
</p>
								</div>
							</form>
							
						</div>
					</div>
				</div>
				<!-- .entry-content -->
				</article>
				</main>
				<!-- #main -->
			</div>
			<!-- #primary -->
		</div>
		<!-- #content -->
	</div>
	<!-- .container -->
	<footer id="colophon" class="site-footer">
	<div class="container">
		<div class="site-info">
			<h1 style="font-family: 'Herr Von Muellerhoff';color: #ccc;font-weight:300;text-align: center;margin-bottom:0;margin-top:0;line-height:1.4;font-size: 46px;">Zoomcars</h1>
		Travel <i class="fa fa-love"></i><a href="https://bootstrapthemes.co">around the world</a>

		</div>
	</div>
	</footer>
	<a href="#top" class="smoothup" title="Back to top"><span class="genericon genericon-collapse"></span></a>
</div>
<!-- #page -->
<script src='js/jquery.js'></script>
<script src='js/plugins.js'></script>
<script src='js/scripts.js'></script>
<script src='js/masonry.pkgd.min.js'></script>
<script src='js/validate.js'></script>
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
$name=$_POST["name"];
$email=$_POST["email"];
$comment=$_POST["comment"];;
$sql="INSERT INTO feedback (name,email,message) VALUES ('$name','$email','$comment')";
if (mysqli_query($conn,$sql)) 
{

echo'<script> window.location="disp.php"; </script> ';

exit();
}
else
{
echo"fail";
}

}
mysqli_close($conn);
?>