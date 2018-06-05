<?php

require("dbConnect.php");
$db = get_db();

?>

<?php
	$user = $_POST['username'];
	$password = $_POST['password'];

	$hashed = password_hash ( $password , PASSWORD_BCRYPT);

	try
{
	$query = 'INSERT INTO teamusers(username, password) VALUES(:username, :password)';
	$statement = $db->prepare($query);
	
	$statement->bindValue(':username', $user);
	$statement->bindValue(':password', $hashed);

	$statement->execute();
	
}
catch (Exception $ex)
{
	
	echo "Error with DB. Details: $ex";
	die();
}
die(); 
?>