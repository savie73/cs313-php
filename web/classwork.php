<?php

session_start();

$key_sessionCount = "session-count";

if(isset($_SESSION[$key_sessionCount])) {
	$_SESSION[$key_sessionCount]++;
} else {
	$_SESSION[$key_sessionCount] = 0;
}

	$sessionCount = $_SESSION[$key_sessionCount];
?>

<!DOCTYPE html>
<html>
<body>

You have visited the page : <?php echo $sessionCount; ?> times

</body>
</html>


session[] = post[]