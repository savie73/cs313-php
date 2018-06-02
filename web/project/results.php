<?php
// Start the session
session_start();

  if (!isset($_SESSION['items'])) {
    $_SESSION['items'] = array();
  }

  try
{
    $dbUrl = getenv('DATABASE_URL');
    $dbopts = parse_url($dbUrl);
    
    $dbHost = $dbopts["host"];
    $dbPort = $dbopts["port"];
    $dbUser = $dbopts["user"];
    $dbPassword = $dbopts["pass"];
    $dbName = ltrim($dbopts["path"],'/');
    
    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}

?>
<?php 
	
	$source = $_POST['price'];
	if ($source === cheap)
	{
		$source = 20;
		$stmt = $db->query('SELECT price FROM foundation 
			(CASE WHEN price <= 20)');
		$stmt->execute();
		$rows = $stmt->fetchAll(PDO:: FETCH_ASSOC);
		foreach ($rows as $row)
		{
			echo 'brand: ' . $row['brand'];
		    echo ' product name: ' . $row['product_name'];
		    echo ' price: ' . $row['price'];
		    echo '<img src="' . $row['image'] . '" alt="alt text" height="42" width="42" />';
		    echo '<br/>';
		}
	}

	else ($source === pricey)
	{
		$source = 21;
		$stmt = $db->query('SELECT price FROM foundation 
			(CASE WHEN price >= 21)');
		$stmt->execute();
		$rows = $stmt->fetchAll(PDO:: FETCH_ASSOC);
		foreach ($rows as $row)
		{
			echo 'brand: ' . $row['brand'];
		    echo ' product name: ' . $row['product_name'];
		    echo ' price: ' . $row['price'];
		    echo '<img src="' . $row['image'] . '" alt="alt text" height="42" width="42" />';
		    echo '<br/>';
		}
	}

	if($source)
 ?>