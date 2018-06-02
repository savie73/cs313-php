<?php
    $dbUrl = getenv('DATABASE_URL');

    $dbopts = parse_url($dbUrl);
    
    $dbHost = $dbopts["host"];
    $dbPort = $dbopts["port"];
    $dbUser = $dbopts["user"];
    $dbPassword = $dbopts["pass"];
    $dbName = ltrim($dbopts["path"],'/');
    
    $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    ?>
    <?php 
    
    echo '<form action="results.php" method="post">';
    echo 'What is your price range?<br>';
    echo '<input type="radio" name="price" value="cheap" checked>Drug Store<br>';
    echo '<input type="radio" name="price" value="pricey">High End<br>';

    

    echo 'What is your skin type?<br>';
    foreach ($db->query('SELECT skin_id, type FROM 
        skin_type') as $topic_row )
    {

        $skin_id = $topic_row['skin_id'];
        echo "<input type='radio' name='skint' value='$skin_id'>" . $topic_row['type'] . "</br>";
    
    }
    echo '<input type ="submit">';
    echo '</form>';
    ?>    