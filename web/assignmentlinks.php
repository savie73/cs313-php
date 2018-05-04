<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" type="text/css" href="index.css">

<body>

<!-- Links (sit on top) -->
<?php
  require("nav.php");
?>


<!-- Add a background color and large text to the whole page -->
<div class="w3-large">

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">Links</span></h5>
    <ul style="list-style-position: inside;text-align: center;">
        <li><a href="" target="_self">Assignment 01</a></li>
        <li><a href="" target="_self">Assignment 02</a></li>
        <li><a href="" target="_self">Assignment 03</a></li>
        <li><a href="" target="_self">Assignment 04</a></li>
        <li><a href="" target="_self">Assignment 05</a></li>
        <li><a href="" target="_self">Assignment 06</a></li>
        <li><a href="" target="_self">Assignment 07</a></li>
        <li><a href="" target="_self">Assignment 08</a></li>
        <li><a href=""target="_self">Assignment 09</a></li>
        <li><a href="" target="_self">Assignment 10</a></li>
        <li><a href=""target="_self">Assignment 11</a></li>
        <li><a href=""target="_self">Assignment 12</a></li>
    </ul>  
   
</div>



<!-- End page content -->
</div>


<script>

// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
</script>


</body>
</html>