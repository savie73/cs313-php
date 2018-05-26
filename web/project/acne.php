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
<!DOCTYPE html>
<html>
<head>
<title>Shopping</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

  <script>

    function addToCart(item) {
      var xhttp = new XMLHttpRequest();
                xhttp.open("POST", "addToCart.php", true);
                xhttp.onreadystagechange = function() {
                    if (this.status == 200) {
                        document.getElementById("textFromServer").innerHtml = this.responseText;
                    }
                }
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("item=" + item);
    }

  </script>

<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
bodzy,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
</head>
<body class="w3-content" style="max-width:1200px">

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <h3 class="w3-wide"><b>Foundation Finder</b></h3>
  </div>
  <a href="/project/projectmain.php" class="w3-bar-item w3-button w3-padding">Home</a> 
  <a href="/project/dryskin.php" class="w3-bar-item w3-button w3-padding">Dry Skin</a> 
  <a href="/project/oilyskin.php" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('newsletter').style.display='block'">Oily Skin</a> 
  <a href="/project/acne.php"  class="w3-bar-item w3-button w3-padding">Acne Prone Skin</a>
  <a href="/project/combo.php" class="w3-bar-item w3-button w3-padding">Combination Skin</a> 
</nav>

<!-- Top menu on small screens -->
<header class="w3-bar w3-top w3-hide-large w3-black w3-xlarge">
  <div class="w3-bar-item w3-padding-24 w3-wide">Acne Prone</div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding-24 w3-right" onclick="w3_open()"><i class="fa fa-bars"></i></a>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">

  <!-- Push down content on small screens -->
  <div class="w3-hide-large" style="margin-top:83px"></div>
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left">Acne Prone</p>
    <p class="w3-right">
      <i class="fa fa-shopping-cart w3-margin-right" onclick="location.href='viewcart.php'"></i>
      <!-- //shoppping cart -->
      <i class="fa fa-search"></i>
    </p>
  </header>

  <!-- Image header -->
  <div class="w3-display-container w3-container">
    <img src="/project/images/esteebanner.jpg" alt="Jeans" style="width:100%">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
      <h1 class="w3-jumbo w3-hide-small">New arrivals</h1>
      <h1 class="w3-hide-large w3-hide-medium">New arrivals</h1>
      <h1 class="w3-hide-small">COLLECTION 2018</h1>
      <p><a href="#jeans" class="w3-button w3-black w3-padding-large w3-large">SHOP NOW</a></p>
    </div>
  </div>

  <div class="w3-container w3-text-grey" id="jeans">
    <p>8 items</p>
  </div>

  <!-- PRODUCT START 
  PRODUCT START 
  PRODUCT START
  PRODUCT START
  PRODUCT START
  PRODUCT START
  PRODUCT START
 -->
 <?php
    // $user_rating = $_GET["rating"];
    // $query = "SELECT m.title, m.year, r.code FROM movies m INNER JOIN ratings r ON m.rating_id = r.id WHERE r.code = :rating";
    // $statement = $db->prepare($query);
    // $statement->bindValue(":rating", $user_rating, PDO::PARAM_STR);
    // $statement->execute();
    // foreach ($statement->fetchAll(PDO::FETCH_ASSOC) as $movie)
    // {
    //     $title = $movie["title"];
    //     $year = $movie["year"];
    //     $rating = $movie["code"];
        
    //     echo "<li>$title ($year) - Rated $rating</li>";
    // }

  // foreach ($db->query('SELECT found_id FROM foundation_skin WHERE skin_id = 1')  as $row)
  // {
  //   echo 'brand: ' . $row['brand'];
  //   echo ' product name: ' . $row['product_name'];
  //   echo ' price: ' . $row['price'];
  //   echo ' image: ' . $row['image'];
  //   echo '<br/>';
  // }

  // $statement = $db->query('SELECT brand, product_name, price, image FROM foundation f INNER JOIN ');
  // while ($row = $statement->fetch(PDO::FETCH_ASSOC))
  // {
  //   echo 'user: ' . $row['brand'] . ' product_name: ' . $row['price'] . 'image' <br/>';
  // }
$stmt = $db->query('SELECT brand, prouduct_name, price, image FROM foundation');
$stmt->execute();
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
 foreach ($rows as $row)
{
 echo 'brand: ' . $row['brand'];
 echo ' product name: ' . $row['product_name'];
 echo ' price: ' . $row['price'];
 echo ' image: ' . $row['image'];
 echo '<br/>';
}

?>
  
  <!-- Product grid -->
  
   <!-- PRODUCT END 
  PRODUCT END 
  PRODUCTM END
  PRODUCT END
  PRODUCT END
  PRODUCT END
  PRODUCT END
 -->

  <!-- End page content -->
</div>


<script>
// Accordion 
function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

// Click on the "Jeans" link on page load to open the accordion for demo purposes
document.getElementById("myBtn").click();


// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
