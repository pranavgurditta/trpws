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
padding-left:5%;
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
</head>
<body>

<h1 style="background:black;color:white"><center>CORE MEMBERS</center></h1>

<div class="responsive">
  <div class="gallery">
      <img src="../images/kuwarjeet.jpg" alt="Trolltunga Norway" width="150" height="150">
    <div class="desc"><B>KUWARJEET SINGH </B></div>

    <div class="desc"><B>MARKETING</B></div>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
      <img src="../images/Harman.jpg" alt="Forest" width="150" height="150">
    <div class="desc"><B>HARMANJEET KAUR </B></div>
    <div class="desc"><B>ACADEMICS</B></div>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
      <img src="../images/saloni.JPG" alt="Northern Lights" width="150" height="150">
    <div class="desc"><B>SALONI GOEL</B></div>
    <div class="desc"><B>DESIGNING</B></div>

  </div>
</div>

<div class="responsive" style="margin-bottom:5%">
  <div class="gallery">
   
      <img src="../images/Avleen.jpg" alt="Mountains" width="150" height="150">
    <div class="desc"><B>AVLEEN KAUR</B></div>
    <div class="desc"><B>ACADEMICS</B></div>

  </div>
</div>

<div class="responsive">
  <div class="gallery">
   
      <img src="../images/Pranav.jpg" alt="Mountains" width="150" height="150">
    <div class="desc"><B>PRANAV GURDITTA</B></div>
    <div class="desc"><B>WEB DEVELOPMENT</B></div>

  </div>
</div>

<div class="responsive">
  <div class="gallery">
   
      <img src="../images/sachin1.jpg" alt="Mountains" width="150" height="150">
    <div class="desc"><B>SACHIN NARULA</B></div>
    <div class="desc"><B>WEB DEVELOPMENT</B></div>

  </div>
</div>
<div class="clearfix"></div>

</body>
</html>