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
    // echo "<form action='quizsubmitt.php' method ='post'>";
    // echo 'Book: <input type="text" name="Book"><br>';
    // echo 'Chapter: <input type="text" name="Chapter"><br>';
    // echo 'Verse: <input type="text" name="Verse"><br>';
    // echo '<textarea rows="4" cols="50"></textarea><br>';

    echo 'What is your skin type?<br>';
    foreach ($db->query('SELECT skin_id, type FROM skin_type') as $topic_row )
    {

        $id = $topic_row['skin_id'];
        echo "<input type='checkbox' name='skint[]' value='$skin_id'>" . $topic_row['type'] . "</br>";
    
    }
    echo "<input type ='submit'>";
    echo "</form>";
    ?>    