<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<style>
body{
      margin: 0;
      padding: 0;
      font-family: sans-serif;
}
header{
      background: #00795f;
      width: 100%;
      padding: 30px 0;
      color: white;
      text-align: center;
}

a{
      text-decoration:none;
      color: inherit;
}

nav1 ul{
       width:100%;
}

nav {
      background: #43a286;
      overflow: hidden;
      color: white;
      padding: 0;
      text-align: center;
      margin: 0;
      -webkit-transition: max-height 0.4s;
      -ms-transition: max-height 0.4s;
      -moz-transition: max-height 0.4s;
      -o-transition: max-height 0.4s;
      transition: max-height 0.4s;
}

nav ul li{
      display: inline-block;
      padding: 20px;
}

nav ul li:hover{
      background-color: #399077
}

nav1 ul img{
      width: 16.39%;
      height: 200px;
      
}

nav1 ul{
      width: 100%;
      padding: 0;
      margin: 0 auto;
}

p{
      line-height: 1.5em;
      font-size: 0.9em;
      padding: 40px;
      width: 80%;
      margin: 0 auto;
      align: justify;
      text-align-last: left;
}

@-webkit-keyframes scroll{
      0%{
            -webkit-transform: translate(0, 0); 
        }
      100%{
             -webkit-transform: translate(-100%, 0);  
          }
}

.marlink{
     display: block;
     width: 100%;
     delay: 0;
     white-space: nowrap;
     overflow: hidden;
}

.marlink p{
     display: inline-block;
     padding-left: 100%;
     -webkit-animation: scroll 10s infinite linear;
}

.handle{
     width:100%;
     background: #005c48;
     text-align: center;
     boz-sizing: border-box;
     padding: 15px 10px;
     cursor: pointer;
     color: white;
     display: none;
}

@media screen and (max-width: 389px){

     @-webkit-keyframes blinker{
            0%{opacity: 1.0;}
            50%{opacity: 0.1;}
            100%{opacity: 1.0;}
}
     .marlink{
           text-decoration: blink;
	   -webkit-animation-name: blinker;
	   -webkit-animation-duration: 0.6s;
	   -webkit-animation-iteration-count: infinite;
	   -webkit-animation-timing-function: linear;
}
         
      nav1 ul{
           width: 100%;
           margin: 0 auto;
           padding: 0;
}
   
     nav1 ul img{
           width: 100%;
}
     p{
           width: 75%
}
     header{
           width: 100%
}
      
     nav ul{
           max-height: 0;
           width: 100%;
}
     .showing{
           max-height: 20em;
}
     nav ul li{
           box-sizing: border-box;
           width: 100%;
           padding: 15%
           text-align: left;
}
     .handle{
           display:block;
           width: 94.5%;
}
}

@media screen and (max-width: 649px) and (min-width: 390px) {
     .handle{
            width: 100%;  
  } 

      nav1 ul{
           width: 100%;
}
       nav1 ul img{
             width: 49.55%;
 }    
}
</style>

<body>

<header><h1>THE RISING PEOPLE WELFARE SOCIETY</h1></header>

<nav>
<ul>
<a href="index.php"><li>HOME</li></a>
<a href="#"><li>ABOUT US</li></a>
<a href="intern.php"><li>INTERNSHIP</li></a>
<a href="thumbnail.php"><li>GALLERY</li></a>
<a href="contact/x.php"><li>CONTACT US</li></a>
<a href="contact/x.php"><li>BLOG</li></a></ul>
<div class="handle">MENU</div>
</nav>
</body>
</html>