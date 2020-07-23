<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.contact {
  padding: 25px 0 450px 0;
  background: url(http://cdn.desktopwallpapers4.me/wallpapers/world/1366x768/1/4916-blurred-city-street-1366x768-world-wallpaper.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.contact i {
  padding: 0 20px;
  font-size: 0.8em;
}

.contact h2 {
  font-family: 'Open Sans', sans-serif;
  font-size: 2.5em;
  border: 1px solid #555;
  background-color: rgba(0,0,0,0.6);
  padding-top: 20px;
  height: 75px;
  color: #fff;
  font-weight: 500;
  line-height: 40px;
  padding-left: 50px;
  text-align: center;
}

#comments {
  margin-top: 0;
}

#contactform {
  height: 215px;
}

#contactform .right {
  float: right;
}

#contactform input,
#contactform textarea {
  margin-bottom: 14px;
  width: 100%;
  outline: none;
  border: none;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 11px;
}

#contactform input {
  padding-left: 15px;
  height: 44px;
  border-radius: 0;
}

#contactform textarea {
  padding: 15px;
  height: 218px;
  border-radius: 0;
}

#contactform .btn {
  width: 100%;
  height: 50px;
  border-radius: 0;
  border: 1px solid #333;
  background: rgba(0,0,0,0.8);
  color: #fff;
}

#contactform .btn:hover {
  background: rgba(9,8,77,0.7);
}

#map-canvas {
  width: 100%;
  height: 135px;
  margin-bottom: 15px;
  border: 2px solid #fff;
}
</style>
</head>
<body>
 <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Contact Me<i class="fa fa-paper-plane-o"></i></h2>
                </div>
            </div>
            <div id="map-canvas"></div>
            <div class="row">
                <form method="post" action="contact.php" name="contactform" id="contactform">
                    <div class="col-md-6">
                        <fieldset>
                            <input name="name" type="text" id="name" size="30" placeholder="Name">
                            <br>
                            <input name="email" type="text" id="email" size="30" placeholder="Email">
                            <br>
                            <input name="phone" type="text" id="phone" size="30" placeholder="Phone">
                            <br>
                            <input name="human" type="text" id="human" size="30" placeholder="Prove your not a robot... What is 2+2?">
                            <br>
                        </fieldset>
                    </div>
                    <div class="col-md-6">
                        <fieldset>
                            <textarea name="comments" cols="40" rows="20" id="comments" placeholder="Message"></textarea>
                        </fieldset>
                    </div>
                    <div class="col-md-12">
                        <fieldset>
                            <button type="submit" class="btn btn-lg" id="submit" value="Submit">Send Message</button>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--Google Maps API-->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDnycWatbGyK6ldFqErjFtko1yeMclNUOA&amp;sensor=true"></script>
</body>
<script>
        function initialize() {
            var mapOptions = {
                center: new google.maps.LatLng(28.1823294, -82.352912),
                zoom: 9,
                mapTypeId: google.maps.MapTypeId.HYBRID,
                scrollwheel: false,
                draggable: false,
                panControl: true,
                zoomControl: true,
                mapTypeControl: true,
                scaleControl: true,
                streetViewControl: true,
                overviewMapControl: true,
                rotateControl: true,
            };
            var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
        }
        google.maps.event.addDomListener(window, 'load', initialize);
</script>

</html>