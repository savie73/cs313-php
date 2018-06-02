<?php
/**********************************************************
* File: showTopics.php
* Author: Br. Burton
* 
* Description: This file retrieves the scriptures and topics
* from the DB.
***********************************************************/
require("dbConnect.php");
$db = get_db();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Foundation and Skin Type List</title>
</head>

<body>
<div>

<h1>Foundation and Skin Type List</h1>

<?php
try
{
	$statement = $db->prepare('SELECT found_id, brand, product_name, price, image FROM foundation');
	$statement->execute();
	// Go through each result
	while ($row = $statement->fetch(PDO::FETCH_ASSOC))
	{
		echo '<p>';
		echo '<strong>' . $row['brand'] . ' ' . $row['product_name'] . ':';
		echo $row['price'] . '</strong>' . ' - ' . $row['image'];
		echo '<br />';
		echo 'Topics: ';
		// get the topics now for this scripture
		$stmtTypes = $db->prepare('SELECT type FROM skin_type t'
			. ' INNER JOIN foundation_skin st ON st.found_id = t.skin_id'
			. ' WHERE st.found_id = :found_id');
		$stmtTypes->bindValue(':found_id', $row['found_id']);
		$stmtTypes->execute();
		// Go through each topic in the result
		while ($topicRow = $stmtTypes->fetch(PDO::FETCH_ASSOC))
		{
			echo $topicRow['type'] . ' ';
		}
		echo '</p>';
	}
}
catch (PDOException $ex)
{
	echo "Error with DB. Details: $ex";
	die();
}
?>

</div>

</body>
</html>