<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Times New Roman;
   margin:15;
padding-left:5%;
}
* {
  box-sizing: border-box;
}
mySlides
{
margin:10px;
}

.mySlides>img
{
height:700px;
}

.row > .column {
  padding: 10px; 10px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
 border: 2px solid #ffffff;
  float:left;
width: 300px;
  height: 300px;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 70px;
  left: 0;
  top: 0;
  width: 101.5%;
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
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
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
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
background-color:black;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
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
      width: 98%;
      padding-bottom: 100%;
   }
.mySlides>img
{
height:400px;
}

}
@media only screen and (max-width : 650px) and (min-width : 481px) {
   /* Tablet view: 2 tiles */
   .box,.column {
      width: 50%;
      padding-bottom: 50%;
   }
.mySlides>img
{
height:400px;
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
h2
{
text-align:center;
color:white; background-color:#00795f;
}
HEAD
{
color:white; background-color:#00795f;
}

</style>
<a href="thumbnail.php" style="COLOR:WHITE">&#x2190 Back</a>
<h2>Random Pics of our NGO</h2>
</head>
<body style="background: #43a286">


<div class="row">
  <div class="column">
    <img src="../images/1 (1).jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="../images/4 (2).jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="../images/3 (3).jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="column">
    <img src="../images/2 (4).jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (5).jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (6).jpg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (7).jpg" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (8).jpg" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (9).jpg" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (10).jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (11).jpg" style="width:100%" onclick="openModal();currentSlide(11)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (12).jpg" style="width:100%" onclick="openModal();currentSlide(12)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (13).jpg" style="width:100%" onclick="openModal();currentSlide(13)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (14).jpg" style="width:100%" onclick="openModal();currentSlide(14)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (15).jpg" style="width:100%" onclick="openModal();currentSlide(15)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (16).jpg" style="width:100%" onclick="openModal();currentSlide(16)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (17).jpg" style="width:100%" onclick="openModal();currentSlide(17)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (18).jpg" style="width:100%" onclick="openModal();currentSlide(18)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (19).jpg" style="width:100%" onclick="openModal();currentSlide(19)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (20).jpg" style="width:100%" onclick="openModal();currentSlide(20)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (21).jpg" style="width:100%" onclick="openModal();currentSlide(21)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (22).jpg" style="width:100%" onclick="openModal();currentSlide(22)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (23).jpg" style="width:100%" onclick="openModal();currentSlide(23)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (24).jpg" style="width:100%" onclick="openModal();currentSlide(24)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (25).jpg" style="width:100%" onclick="openModal();currentSlide(25)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/3 (26).jpg" style="width:100%" onclick="openModal();currentSlide(26)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/1 (27).jpg" style="width:100%" onclick="openModal();currentSlide(27)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/3 (28).jpg" style="width:100%" onclick="openModal();currentSlide(28)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/1 (29).jpg" style="width:100%" onclick="openModal();currentSlide(29)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/1 (30).jpg" style="width:100%" onclick="openModal();currentSlide(30)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/3 (31).jpg" style="width:100%" onclick="openModal();currentSlide(31)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (32).jpg" style="width:100%" onclick="openModal();currentSlide(32)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (33).jpg" style="width:100%" onclick="openModal();currentSlide(33)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (34).jpg" style="width:100%" onclick="openModal();currentSlide(34)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (35).jpg" style="width:100%" onclick="openModal();currentSlide(35)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (36).jpg" style="width:100%" onclick="openModal();currentSlide(36)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (37).jpg" style="width:100%" onclick="openModal();currentSlide(37)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (38).jpg" style="width:100%" onclick="openModal();currentSlide(38)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (39).jpg" style="width:100%" onclick="openModal();currentSlide(39)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (40).jpg" style="width:100%" onclick="openModal();currentSlide(40)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (41).jpg" style="width:100%" onclick="openModal();currentSlide(41)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (42).jpg" style="width:100%" onclick="openModal();currentSlide(42)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (43).jpg" style="width:100%" onclick="openModal();currentSlide(43)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (44).jpg" style="width:100%" onclick="openModal();currentSlide(44)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (45).jpg" style="width:100%" onclick="openModal();currentSlide(45)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (46).jpg" style="width:100%" onclick="openModal();currentSlide(46)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (47).jpg" style="width:100%" onclick="openModal();currentSlide(47)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (48).jpg" style="width:100%" onclick="openModal();currentSlide(48)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (49).jpg" style="width:100%" onclick="openModal();currentSlide(49)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (50).jpg" style="width:100%" onclick="openModal();currentSlide(50)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (51).jpg" style="width:100%" onclick="openModal();currentSlide(51)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (52).jpg" style="width:100%" onclick="openModal();currentSlide(52)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (53).jpg" style="width:100%" onclick="openModal();currentSlide(53)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (54).jpg" style="width:100%" onclick="openModal();currentSlide(54)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (55).jpg" style="width:100%" onclick="openModal();currentSlide(55)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (56).jpg" style="width:100%" onclick="openModal();currentSlide(56)" class="hover-shadow cursor">
  </div>
<div class="column">
    <img src="../images/2 (57).jpg" style="width:100%" onclick="openModal();currentSlide(57)" class="hover-shadow cursor">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 </div>
      <img src="../images/1 (1).jpg" style="width:100% ">
    </div>
    <div class="mySlides">
      <div class="numbertext">2</div>
      <img src="../images/4 (2).jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">3 </div>
      <img src="../images/3 (3).jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">4 </div>
      <img src="../images/2 (4).jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">5 </div>
      <img src="../images/2 (5).jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">6 </div>
      <img src="../images/2 (6).jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">7 </div>
      <img src="../images/2 (7).jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">8 </div>
      <img src="../images/2 (8).jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">9 </div>
      <img src="../images/2 (9).jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">10 </div>
      <img src="../images/2 (10).jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">11 </div>
      <img src="../images/2 (11).jpg" style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">12 </div>
      <img src="../images/2 (12).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">13 </div>
      <img src="../images/2 (13).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">14 </div>
      <img src="../images/2 (14).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">15 </div>
      <img src="../images/2 (15).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">16 </div>
      <img src="../images/2 (16).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">17 </div>
      <img src="../images/2 (17).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">18 </div>
      <img src="../images/2 (18).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">19 </div>
      <img src="../images/2 (19).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">20 </div>
      <img src="../images/2 (20).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">21 </div>
      <img src="../images/2 (21).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">22 </div>
      <img src="../images/2 (22).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">23 </div>
      <img src="../images/2 (23).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">24 </div>
      <img src="../images/2 (24).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">25 </div>
      <img src="../images/2 (25).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">26 </div>
      <img src="../images/3 (26).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">27 </div>
      <img src="../images/1 (27).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">28 </div>
      <img src="../images/3 (28).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">29 </div>
      <img src="../images/1 (29).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">30 </div>
      <img src="../images/1 (30).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">31 </div>
      <img src="../images/3 (31).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">32 </div>
      <img src="../images/2 (32).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">33 </div>
      <img src="../images/2 (33).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">34 </div>
      <img src="../images/2 (34).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">35 </div>
      <img src="../images/2 (35).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">36 </div>
      <img src="../images/2 (36).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">37 </div>
      <img src="../images/2 (37).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">38 </div>
      <img src="../images/2 (38).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">39 </div>
      <img src="../images/2 (39).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">40 </div>
      <img src="../images/2 (40).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">41 </div>
      <img src="../images/2 (41).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">42 </div>
      <img src="../images/2 (42).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">43 </div>
      <img src="../images/2 (43).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">44 </div>
      <img src="../images/2 (44).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">45 </div>
      <img src="../images/2 (45).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">46 </div>
      <img src="../images/2 (46).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">47 </div>
      <img src="../images/2 (47).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">48 </div>
      <img src="../images/2 (48).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">49 </div>
      <img src="../images/2 (49).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">50 </div>
      <img src="../images/2 (50).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">51 </div>
      <img src="../images/2 (51).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">52 </div>
      <img src="../images/2 (52).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">53 </div>
      <img src="../images/2 (53).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">54 </div>
      <img src="../images/2 (54).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">55 </div>
      <img src="../images/2 (55).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">56 </div>
      <img src="../images/2 (56).jpg" style="width:100%">
    </div>
<div class="mySlides">
      <div class="numbertext">57 </div>
      <img src="../images/2 (57).jpg" style="width:100%">
    </div>
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

    <div class="column">
      <img class="demo cursor" src="../images/1 (1).jpg" style="width:100%"  onclick="currentSlide(1)" alt="NATURE AND SUNRISE">
    </div>
    <div class="column">
      <img class="demo cursor" src="../images/4 (2).jpg" style="width:100% " onclick="currentSlide(2)" alt="TROLLTUNGA, NORWAY">
    </div>
    <div class="column">
      <img class="demo cursor" src="../images/3 (3).jpg" style="width:100% " onclick="currentSlide(3)" alt="MOUNTAINS AND FJORDS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (4).jpg" style="width:100%" onclick="currentSlide(4)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (5).jpg" style="width:100%" onclick="currentSlide(5)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (6).jpg" style="width:100%" onclick="currentSlide(6)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (7).jpg" style="width:100%" onclick="currentSlide(7)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (8).jpg" style="width:100%" onclick="currentSlide(8)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (9).jpg" style="width:100%" onclick="currentSlide(9)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (10).jpg" style="width:100%" onclick="currentSlide(10)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (11).jpg" style="width:100%" onclick="currentSlide(11)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (12).jpg" style="width:100%" onclick="currentSlide(12)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (13).jpg" style="width:100%" onclick="currentSlide(13)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (14).jpg" style="width:100%" onclick="currentSlide(14)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (15).jpg" style="width:100%" onclick="currentSlide(15)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (16).jpg" style="width:100%" onclick="currentSlide(16)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (17).jpg" style="width:100%" onclick="currentSlide(17)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (18).jpg" style="width:100%" onclick="currentSlide(18)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (19).jpg" style="width:100%" onclick="currentSlide(19)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (20).jpg" style="width:100%" onclick="currentSlide(20)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (21).jpg" style="width:100%" onclick="currentSlide(21)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (22).jpg" style="width:100%" onclick="currentSlide(22)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (23).jpg" style="width:100%" onclick="currentSlide(23)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (24).jpg" style="width:100%" onclick="currentSlide(24)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (25).jpg" style="width:100%" onclick="currentSlide(25)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/3 (26).jpg" style="width:100%" onclick="currentSlide(26)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/1 (27).jpg" style="width:100%" onclick="currentSlide(27)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/3 (28).jpg" style="width:100%" onclick="currentSlide(28)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/1 (29).jpg" style="width:100%" onclick="currentSlide(29)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/1 (30).jpg" style="width:100%" onclick="currentSlide(30)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/3 (31).jpg" style="width:100%" onclick="currentSlide(31)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (32).jpg" style="width:100%" onclick="currentSlide(32)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (33).jpg" style="width:100%" onclick="currentSlide(33)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (34).jpg" style="width:100%" onclick="currentSlide(34)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (35).jpg" style="width:100%" onclick="currentSlide(35)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (36).jpg" style="width:100%" onclick="currentSlide(36)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (37).jpg" style="width:100%" onclick="currentSlide(37)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (38).jpg" style="width:100%" onclick="currentSlide(38)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (39).jpg" style="width:100%" onclick="currentSlide(39)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (40).jpg" style="width:100%" onclick="currentSlide(40)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (41).jpg" style="width:100%" onclick="currentSlide(41)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (42).jpg" style="width:100%" onclick="currentSlide(42)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (43).jpg" style="width:100%" onclick="currentSlide(43)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (44).jpg" style="width:100%" onclick="currentSlide(44)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (45).jpg" style="width:100%" onclick="currentSlide(45)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (46).jpg" style="width:100%" onclick="currentSlide(46)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (47).jpg" style="width:100%" onclick="currentSlide(47)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (48).jpg" style="width:100%" onclick="currentSlide(48)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (49).jpg" style="width:100%" onclick="currentSlide(49)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (50).jpg" style="width:100%" onclick="currentSlide(50)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (51).jpg" style="width:100%" onclick="currentSlide(51)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (52).jpg" style="width:100%" onclick="currentSlide(52)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (53).jpg" style="width:100%" onclick="currentSlide(53)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (54).jpg" style="width:100%" onclick="currentSlide(54)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (55).jpg" style="width:100%" onclick="currentSlide(55)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (56).jpg" style="width:100%" onclick="currentSlide(56)" alt="NORTHERN LIGHTS">
    </div>
<div class="column">
      <img class="demo cursor" src="../images/2 (57).jpg" style="width:100%" onclick="currentSlide(57)" alt="NORTHERN LIGHTS">
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