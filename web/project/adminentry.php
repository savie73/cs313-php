<?php
/**********************************************************
* File: topicEntry.php
* Author: Br. Burton
* 
* Description: This is the PHP file that the user starts with.
*   It has a form to enter a new scripture and topic.
*   It posts to the insertTopic.php page.
***********************************************************/
// The DB connection logic is in another file so it can be included
// in each of our different PHP files.
require("dbConnect.php");
$db = get_db();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Product Entry</title>
</head>

<body>
<div>

<h1>Enter A New Product</h1>

<form id="mainForm" action="admininsert.php" method="POST">

    <input type="text" id="brand" name="brand"></input>
    <label for="brand">Brand</label>
    <br /><br />

    <input type="text" id="product" name="product"></input>
    <label for="product">Product Name</label>
    <br /><br />

    <input type="text" id="price" name="price"></input>
    <label for="price">Price</label>
    <br /><br />

    <input type="text" id="imageu" name="imageu"></input>
    <label for="imageu">Image URL</label>
    <br /><br />

    <label for="txtContent">Content:</label><br />
    <textarea id="txtContent" name="txtContent" rows="4" cols="50"></textarea>
    <br /><br />

    <label>Skin Type</label>br /><

<?php

try
{

    foreach ($db->query('SELECT skin_id, type FROM 
        skin_type') as $topic_row )
    {

        $skin_id = $topic_row['skin_id'];
        echo "<input type='radio' name='skint' value='$skin_id'>" . $topic_row['type'] . "</br>";
    
    }
}
catch (PDOException $ex)
{
    // Please be aware that you don't want to output the Exception message in
    // a production environment
    echo "Error connecting to DB. Details: $ex";
    die();
}
?>

    <br />

    <input type="submit" value="Add to Database" />

</form>


</div>

</body>
</html>