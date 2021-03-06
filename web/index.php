<!DOCTYPE html>
<html>
<title>Savannah Pyle</title>
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


<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag">CS 313-02</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white outline" style="font-size:90px">Savannah<br>Pyle</span>
  </div>
  
</header>

<!-- Add a background color and large text to the whole page -->
<div class=" w3-large">

<!-- About Container -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT ME</span></h5>
    <p>Hey there! Welcome to my homepage! My name is Savannah and I will give my self a little background! I am from Lancaster, CA and I am the oldest of 5. I served a mission in Seoul, South Korea and it was the bestttt. I am Senior offcially this year and I cannot WAIT to graduate. I have an internship this fall with the church's ICS department being a web developer in Microsoft SharePoint. I am so excited. This semester I am taking some pretty hard classess. I am taking Human Computer Interaction, IOS Development, Intro to Web Design(got to get that one credit), Software Engieering 1, and this class!</p>
    <p>When I am not working or studying I am generally watching Netflix or working on my Makeup Blog. I have to admit I am pretty obssessed with it and I think it's really fun, and a great way for women to feel more confident! </p>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>“My dad used to say makeup was a shallow girl's sport, but it's not. It's armor.”</i></p>
       <p><i>- Courtney Summers.</i></p>
    </div>
    <img src="makeup.jpg" id="images" class="w3-margin-top">
    <img src="milani.jpg" id="images" class="w3-margin-top">
    <p><strong>Copyright:</strong> all pictures of makeup are created and taken by me</p>
   
    <img src="sethandsav.jpg" id="portraitimage" class="w3-margin-top">
    <p><strong>My Husband and I</strong></p>
   
  </div>
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