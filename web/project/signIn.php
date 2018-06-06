<?php

session_start();
$badLogin = false;

if (isset($_POST['txtUser']) && isset($_POST['txtPassword']))
{
	
	$username = $_POST['txtUser'];
	$password = $_POST['txtPassword'];
	
	require("dbConnect.php");
	$db = get_db();
	$query = 'SELECT password FROM login WHERE username=:username';
	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);
	$result = $statement->execute();
	if ($result)
	{
		$row = $statement->fetch();
		$hashedPasswordFromDB = $row['password'];
		if (password_verify($password, $hashedPasswordFromDB))
		{
			
			$_SESSION['username'] = $username;
			header("Location: projectmain.php");
			die(); 
		}
		else
		{
			$badLogin = true;
		}
	}
	else
	{
		$badLogin = true;
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<style>
body, html {
    height: 100%;
    font-family: Arial, Helvetica, sans-serif;
}

* {
    box-sizing: border-box;
}

.bg-img {
    /* The image used */
    background-image: url("main.png");

    min-height: 380px;

    /* Center and scale the image nicely */
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* Add styles to the form container */
.container {
    position: absolute;
    right: 0;
    margin: 20px;
    max-width: 300px;
    padding: 16px;
    background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for the submit button */
.btn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.btn:hover {
    opacity: 1;
}
</style>

</head>

<body>
<div>

<?php
if ($badLogin)
{
	echo "Incorrect username or password!<br /><br />\n";
}
?>

<div class="bg-img">
<h1 class="w3-left">Foundation Finder</h1>
<h1 class="w3-left">Please sign in below:</h1>

<form id="mainForm" action="signIn.php" method="POST">
	 <div class="container">

	<label for="txtUser">Username</label> 	
	<input type="text" id="txtUser" name="txtUser" placeholder="Username">
	<br /><br />

	<label for="txtPassword">Password</label>
	<input type="password" id="txtPassword" name="txtPassword" placeholder="Password">
	<br /><br />
	Or <a href="signUp.php">Sign up</a> for a new account.

	<input type="submit" value="Sign In" />
	</div>
</form>
</div>
<br><br>

<!-- Or <a href="signUp.php">Sign up</a> for a new account. -->

</div>

</body>
</html>