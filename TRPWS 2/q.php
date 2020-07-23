<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Times New Roman;
  margin:15%;
padding-left:5%;
}
* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 10px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  border: 2px solid #ffffff;
  float: left;
  width: 300px;
  height: 300px;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 75px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 100%;
  max-width: 1200px;
}

/* The Close Button */
.close {
 color:white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
background-color:white;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
  cursor: pointer
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  height: auto;
  padding: 10px;
  margin-top: -50px;
  color: black;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
background-color:white;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;

}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgb(48,48,48);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {

  height: 90%;
  margin-bottom: -4px;

}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}

@media only screen and (max-width : 480px) {
   /* Smartphone view: 1 tile */
   .box,.column{
      width: 100%;
      padding-bottom: 100%;
   }
}
@media only screen and (max-width : 650px) and (min-width : 481px) {
   /* Tablet view: 2 tiles */
   .box,.column {
      width: 50%;
      padding-bottom: 50%;
   }
}
@media only screen and (max-width : 1050px) and (min-width : 651px) {
   /* Small desktop / ipad view: 3 tiles */
   .box,.column {
      width: 33.3%;
      padding-bottom: 33.3%;

   }
}
@media only screen and (max-width : 1290px) and (min-width : 1051px) {
   /* Medium desktop: 4 tiles */
   .box,.column {
      width: 25%;
      padding-bottom: 25%;
   }
}

</style>
<body>
<?php
require('header.php');
?>
<h2 style="text-align:center; font-family:algerian"><font size=10><B>RANDOM PICS OF OUR NGO</B></font></h2>

<div class="row">
  <div class="column">
    <img src="4.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="2.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="3.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="4.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="5.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="6.jpg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="7.jpg" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="8.jpg" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="9.jpg" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="10.jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="11.jpg" style="width:100%" onclick="openModal();currentSlide(11)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="12.jpg" style="width:100%" onclick="openModal();currentSlide(12)" class="hover-shadow cursor">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext"><font size=3 color=white><B>1 / 12</B></font></div>
      <img src="4.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"><font size=3 color=white><B>2 / 12</B></font></div>
      <img src="2.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"><font size=3 color=white><B>3 / 12</B></font></div>
      <img src="3.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"><font size=3 color=white><B>4 / 12</B></font></div>
      <img src="4.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"><font size=3 color=white><B>5 / 12</B></font></div>
      <img src="5.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"><font size=3 color=white><B>6 / 12</B></font></div>
      <img src="6.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"><font size=3 color=white><B>7 / 12</B></font></div>
      <img src="7.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"><font size=3 color=white><B>8 / 12</B></font></div>
      <img src="8.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"><font size=3 color=white><B>9 / 12</B></font></div>
      <img src="9.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"><font size=3 color=white><B>10 / 12</B></font></div>
      <img src="10.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"><font size=3 color=white><B>11 / 12</B></font></div>
      <img src="11.jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext"><font size=3 color=white><B>12 / 12</B></font></div>
      <img src="12.jpg" style="width:100%">
    </div>


    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <div class="column">
      <img class="demo cursor" src="4.jpg" style="width:100%" onclick="currentSlide(1)" alt="NATURE AND SUNRISE">
    </div>
    <div class="column">
      <img class="demo cursor" src="2.jpg" style="width:100%" onclick="currentSlide(2)" alt="TROLLTUNGA, NORWAY">
    </div>
    <div class="column">
      <img class="demo cursor" src="3.jpg" style="width:100%" onclick="currentSlide(3)" alt="MOUNTAINS AND FJORDS">
    </div>
<div class="column">
      <img class="demo cursor" src="4.jpg" style="width:100%" onclick="currentSlide(4)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="5.jpg" style="width:100%" onclick="currentSlide(5)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="6.jpg" style="width:100%" onclick="currentSlide(6)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="7.jpg" style="width:100%" onclick="currentSlide(7)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="8.jpg" style="width:100%" onclick="currentSlide(8)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="9.jpg" style="width:100%" onclick="currentSlide(9)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="10.jpg" style="width:100%" onclick="currentSlide(10)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="11.jpg" style="width:100%" onclick="currentSlide(11)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="12.jpg" style="width:100%" onclick="currentSlide(12)" alt="NORTHERN LIGHTS">
    </div>
</div>
</div>

<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
</body>
</html>