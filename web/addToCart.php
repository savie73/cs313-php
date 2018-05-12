<?php

	$item = $_POST["item"];

	array_push($_SESSION['items'], $item);

	foreach($_SESSION['items'] as $key=>$value) {
		echo 'The value of ' . $key . " is " . $value . '<br>';
	}
?>