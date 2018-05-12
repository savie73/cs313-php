<html>

<body>

	<table>
		<tr>
			<th>Item</th>
		</tr>
	<?php

		session_start();

		foreach($_SESSION['items'] as $value) {
			echo '<tr><td>' . $value . '</td></tr>';
		}

	?>

	<button value="Checkout" onclick="location.href='checkout.php'">Checkout</button>

	</table>

</body>