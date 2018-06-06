<? 

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Montserrat for headings, Cardo for copy-->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700|Cardo:400,400italic,700">
    <!-- Lightbox-->
    <link rel="stylesheet" href="vendor/lightbox2/css/lightbox.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
<?php
    if ($badLogin)
    {
      echo "Incorrect username or password!<br /><br />\n";
    }
?>
    <section id="intro" style="background-image: url('img/ein-steig.jpg');" class="intro">       
      <div class="overlay"></div>
      <div class="content">
        <div class="container clearfix">
          <div class="row">
            <div class="col-lg-8 col-md-12 mx-auto">
              <p class="italic">Foundation Finder</p>
              <form id="mainForm" action="createAccount.php" method="POST">
				<div class="container">
					<h1>Sign up for a new account</h1>
					<p class="italic">Let's find your perfect match.</p>
				<input type="text" id="txtUser" name="txtUser" placeholder="Username">
				<label for="txtUser">Username</label>
				<br /><br />

				<input type="password" id="txtPassword" name="txtPassword" placeholder="Password"></input>
				<label for="txtPassword">Password</label>
				<br /><br />

				<input type="submit" value="Create Account" />
                  </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- intro end-->
    
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/lightbox2/js/lightbox.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;amp;sensor=false"> </script>
    <script src="js/front.js"></script>
  </body>
</html>