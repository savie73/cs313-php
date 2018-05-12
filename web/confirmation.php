<html>

<body>

	<?php
		session_start();

		echo 'Thank you ' . $_POST['name'] . ' for your order.<br>';
		echo 'Your order is being shipped to ' . $_POST['address'] . '<br>';
		echo 'Any shipping updates for your order will be emailed to ' . $_POST['email'] . '<br>';

		echo '<h1>Items You Ordered</h1><br>';

		foreach($_SESSION['items'] as $value) {
			echo $value . '<br>';
		}
	?>