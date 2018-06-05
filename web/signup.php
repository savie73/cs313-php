<?php

require("dbConnect.php");
$db = get_db();

?>

<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="createuser.php" method="POST">
  User name:<br>
  <input type="text" name="username">
  <br>
   Password<br>
  <input type="password" name="password">
  <br><br>
  <input type="submit" value="Sign Up">
</form> 


</body>
</html>
