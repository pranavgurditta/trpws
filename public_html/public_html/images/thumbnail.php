<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width,initial-scale=1.0">
<style>
div.gallery {
    border: 2px groove #000000;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: 300px;

}

div.desc {
    padding: 8px;
    text-align: center;
color:black;
}


.responsive {
    padding: 0 6px;
   float: left;
    width: 23.41%;
box-sizing: border-box;
}

@media only screen and (max-width: 700px){
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
box-sizing: border-box;
    }
}

@media only screen and (max-width: 500px){
    .responsive {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
</style>
<?php
require('header.php');
?>

</head>
<body>

<h2><center><B><font face="algerian" size=10>GALLERY</font></B></center></h2>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="pics1.php">
      <img src="images/poster1.jpg"  width="150" height="150">
    </a>
    <div class="desc"><B>STUDY TIME</B></div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="pics2.php">
      <img src="images/poster2.jpg"  width="150" height="150">
    </a>
    <div class="desc"><B>FUN TIME</B></div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="pics3.php">
      <img src="images/education_1.jpg"  width="150" height="150">
    </a>
    <div class="desc"><B>GREAT TIME</B></div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="pics4.php">
      <img src="images/education_2.jpg" width="150" height="150">
    </a>
    <div class="desc"><B>DRAWING COMPETITION</B></div>
  </div>
</div>

<div class="clearfix"></div>

</body>
<?php
require('footer.php');
?>
</html>