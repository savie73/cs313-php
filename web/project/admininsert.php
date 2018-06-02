<?php


$brand = $_POST['brand'];
$product = $_POST['product'];
$price = $_POST['price'];
$image = $_POST['imageu'];
$skin_ids = $_POST['skint'];

require("dbConnect.php");
$db = get_db();
try
{
	$query = 'INSERT INTO foundation(brand, product, price, image) VALUES(:brand, :product, :price, :image)';
	$statement = $db->prepare($query);
	
	$statement->bindValue(':brand', $brand);
	$statement->bindValue(':product', $product);
	$statement->bindValue(':price', $price);
	$statement->bindValue(':image', $image);
	$statement->execute();
	// get the new id
	$found_it = $db->lastInsertId("found_id_seq");
	// Now go through each topic id in the list from the user's checkboxes
	foreach ($skin_ids as $skin_id)
	{
		echo "FoundId: $found_id, skinid: $skin_id";
		// Again, first prepare the statement
		$statement = $db->prepare('INSERT INTO foundation(found_id, skin_id) VALUES (:found_id, :skin_id)');
		$statement->bindValue(':found_id', $found_id;
		$statement->bindValue(':skin_id', $skin_ids);
		$statement->execute();
	}
}
catch (Exception $ex)
{
	
	echo "Error with DB. Details: $ex";
	die();
}
// finally, redirect them to a new page to actually show the topics
header("Location: showTopics.php");
die(); 
?>