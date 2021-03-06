
<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<title>Ration Shop</title>		
		<meta name="keywords" content="Ration shop" />
		<meta name="description" content="Indian ration shops">
		<meta name="author" content="dashingdash">

		 <!-- Mobile Metas -->
		<!--<meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/bootstrap.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.css">
		<!-- <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css" media="screen">
		<link rel="stylesheet" href="vendor/owlcarousel/owl.theme.default.min.css" media="screen"> -->
		<!-- <link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.css" media="screen">
 -->
		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<!-- <link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">
		<link rel="stylesheet" href="css/theme-animate.css"> -->

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css" media="screen">
		<link rel="stylesheet" href="vendor/circle-flip-slideshow/css/component.css" media="screen"> 

		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css">

		<!-- Theme Custom CSS -->
		 <link rel="stylesheet" href="css/custom.css"> 
		<link rel="stylesheet" href="owl-carousel/owl.carousel.css">
 
<!-- Default Theme -->
<link rel="stylesheet" href="owl-carousel/owl.theme.css">
 
<!--  jQuery 1.7+  -->
<!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
 <script src="vendor/jquery/jquery.js"></script>

<script src="owl-carousel/owl.carousel.js"></script>

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.js"></script>
		<style>
		 /*html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }*/
		 #map {
        height: 400px;
      }
      .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 300px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      .pac-container {
        font-family: Roboto;
      }

      #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }
      #target {
        width: 345px;
      }

   	#owl-demo .item{
  background: #d5e8f2;
  padding: 30px 0px;
  display: block;
  margin: 5px;
  color: #FFF;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  text-align: center;

}
</style>



<style>
.button {
    background-color: #4cafaf; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.button1 {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,255,255,0.4);
}
</style>

<script>

	if (window.confirm('Please install CORS extension in CHROME . Click OK to install ')) 
{
window.location.href='https://chrome.google.com/webstore/detail/cors/dboaklophljenpcjkbbibpkbpbobnbld?utm_source=chrome-ntp-icon';
};
	
	

</script>



<script>
	
var latitude;
var longitude;
navigator.geolocation.getCurrentPosition(function(position) {
latitude = position.coords.latitude;
longitude = position.coords.longitude;
//alert("Latitude : " + latitude + " Longitude: " + longitude);

$.ajax({
  dataType: 'json',
  type: 'GET',
  url: 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='+latitude+','+longitude+'&rankby=distance&type=grocery_or_supermarket&key=AIzaSyBl6sF6nP8wXzmjiQl1GOPyXi4d1lVWcfI',
   success: function(data) {
            //$("body").append(JSON.stringify(data));

			var lat = [];
			
			var lng = [];
			var icon = [];
			var id = [];
			var name = [];
			var place_id = [];
			var vicinity = [];
			
			var str='';
			var str1='';
			var str_shop='';
			var truncstr;
			$.each(data.results,function(i,data)
			{
				name.push(data.name);
				//console.log(name);
				id.push(data.id);
				truncstr=data.id;
				truncstr=truncstr.substring(0,5);
				str+='{"item" :"<span class=';
				str+="'item'><a href='shop.php?id=";
				str+=truncstr;
				str+="'><h1>";
				str+=data.name;
				str+='</h1><h2>';
				lat.push(data.geometry.location.lat);
				lng.push(data.geometry.location.lng);
				//console.log(lat[i]);
				//console.log(lng[i]);
				
				icon.push(data.icon);
				//console.log(icon[i]);
				
				id.push(data.id);
				//console.log(id[i]);
				
				place_id.push(data.place_id);
				
				str+='id=';
				//truncstr=data.id;
				//truncstr=truncstr.substring(0,5);
				str+=truncstr;
				str+='</h2><h2>'
				vicinity.push(data.vicinity);
				str+=data.vicinity ;
				str+='</h2></a></span>"},';


				str_shop+='{ "id" : "';
				str_shop+=truncstr;
				str_shop+='","name": "';
				str_shop+=data.name;
				str_shop+='","add": "';
				str_shop+=data.vicinity;
				str_shop+='"}'

								
				
				
			});
			
			str1='{"owl" : ['+str;
			str1+='{"item" :"<span class=';
				str1+="'item'><h1>";
				str1+='</h1><h2>';
				str1+='</h2></span>"}'+']}';
				
			$(document).ready(function() {
				 $("#data").val(str1);
			$(document).ready(function() {
				 $("#data1").val(str_shop);
			})
			

			
			//document.getElementById('owl-demo').innerHTML+=str;
			/*$(document).ready(function() {
					
					$.ajax({
					    type: "POST",
					    url: "data.php",
					    data:{ text1: str },
					    success: function(data){
					        console.log(data); 
					    }
					})
				
			});*/			

			
			 /*$.post('index.php',{text1:str},function(result){
			      alert("posted");
			  })*/
			//console.log(str);
			/*$.post('data.php', str, function(data) {
		   
		    alert('the data was successfully sent to the server');
			});*/

    }
});
			
			
 }, function(err) {
    if(err.code == 1) {
       alert("Error: Access is denied!");
    }
    
    else if( err.code == 2) {
       alert("Error: Position is unavailable!");
    }
  });
 

		



</script>
 <!-- <?php   
//error_reporting(0);
//$var = $_POST['text1'];// this fetches your post action

//echo 'this is my variable: ' . $var; // this outputs the variable
?> --> 





		<!--[if IE]>
			<link rel="stylesheet" href="css/ie.css">
		<![endif]-->

		<!--[if lte IE 8]>
			<script src="vendor/respond/respond.js"></script>
			<script src="vendor/excanvas/excanvas.js"></script>
		<![endif]-->
	
</head>
<body class="one-page" data-target=".single-menu" data-spy="scroll" data-offset="200">

<div class="body">
	<header id="header" class="single-menu flat-menu">
		<div class="container">
			<div class="logo">
				<!-- <a href="index.html"> -->
					<img alt="Ration cart" width="111" height="90" data-sticky-width="82" data-sticky-height="50" src="img/ration_logo.png">
				<!-- </a> -->
			</div>
			<button class="btn btn-responsive-nav btn-inverse" data-toggle="collapse" data-target=".nav-main-collapse">
				<i class="fa fa-bars"></i>
			</button>
		</div>
		<div class="navbar-collapse nav-main-collapse collapse">
			<div class="container">
				<!-- <ul class="social-icons">
					<li class="facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook">Facebook</a></li>
					<li class="twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter">Twitter</a></li>
					<li class="linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin">Linkedin</a></li>
				</ul> -->

				<nav class="nav-main">
					<ul class="nav nav-pills nav-main" id="mainMenu">
						<li>
							<a  href="#" id='home'>Home</a>
						</li>
						<!-- <li class="dropdown active">
							<a data-hash class="dropdown-toggle" href="#home">
								Home
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li><a href="index.html">Default Home</a></li>
								<li><a href="index-one-page.html">One Page Website</a></li>
							</ul>
						</li> -->
						<!-- <li>
						<a href="http://free-website-translation.com/" id="ftwtranslation_button" hreflang="en" title="" style="border:0;">translate</a> <script type="text/javascript" src="http://free-website-translation.com/scripts/fwt.js" /></script>
						</li>-->
						<li class="dropdown ">
							<a  class="dropdown-toggle" href="#">
								Language
								<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">English</a></li>
								<li><a href="#">Hindi</a></li>
							</ul>
						</li>
						<li>
							<a  href="#slider">Search for shops	</a>
						</li>
						<!-- <li>
							<a data-hash href="#features">Features</a>
						</li> -->
						<li>
							<a  href="#team">Price list</a>
						</li>
						<li class="dropdown">
							<a  href="#">Login/Register
							<i class="fa fa-angle-down"></i>
							</a>
							<ul class="dropdown-menu">
								<li><a href="javascript:{}" onclick="document.getElementById('showshop').submit();">As a Customer</a></li>
								<li><a href="../loginmongo/login2.php">As a shopkeeper</a></li>
							</ul>	
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
</div><hr>
<br>
<div class="container">
	<div class="row">
			<div class="col-md-12"> 
				<!-- <input id="pac-input" class="controls" type="text" placeholder="Search Box"> -->
				<div id="map"></div>
			</div>
	</div>	<br><hr><br><br>
</div>
<!-- <div class="container" id='slider'>
	<div id="owl-demo" class="owl-carousel owl-theme">
		</div>
</div> -->

<div id='slider'>
<br><br>
<form action="data.php" method="post" id="showshop">
<input type="text" name="data" id='data' hidden>
<input type="text" name="data1" id="data1" hidden>
<center>
<button type="submit" name="showshop" class="button button2">See Shops Nearby</button></center>
</form>
<br><br>
</div>



<!-- <script>
 $(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
    jsonPath : "json/data1.json" ,
    autoPlay : 2000
  });
 
});
</script> -->

<script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?&libraries=places">

      var map;
      var infowindow;
	  var pos;
      	function initMap() {	
			infowindow =new google.maps.InfoWindow();
		
			if (navigator.geolocation) {
	          navigator.geolocation.getCurrentPosition(function(position) {
	            pos = {
	              lat: position.coords.latitude,
	              lng: position.coords.longitude
	            };
				console.log(pos);
				
				map = new google.maps.Map(document.getElementById('map'), {
				center: pos,
				zoom: 12
				});
				
				var service = new google.maps.places.PlacesService(map);
				service.nearbySearch({
				location: pos,
				radius: 15000,
				type: ['grocery_or_supermarket']
				}, callback);
				
	          }, function() {
	            handleLocationError(true, infoWindow, map.getCenter());
	          });
	        } else {
	          // Browser doesn't support Geolocation
	          handleLocationError(false, infoWindow, map.getCenter());
	        }
      



      }
	  
	  function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
      }
	  
      function callback(results, status) {
        if (status === google.maps.places.PlacesServiceStatus.OK) {
          for (var i = 0; i < results.length; i++) {
            createMarker(results[i]);
          }
        }
      }
	  
	  function createMarker(place) {
        var placeLoc = place.geometry.location;
        var marker = new google.maps.Marker({
          map: map,
          position: place.geometry.location
        });

        google.maps.event.addListener(marker, 'click', function() {
          infowindow.setContent(place.name);
          infowindow.open(map, this);
        });
      }


</script>
	
  
  
    <script src="https://maps.googleapis.com/maps/api/js?&key=AIzaSyBl6sF6nP8wXzmjiQl1GOPyXi4d1lVWcfI&libraries=places&callback=initMap" async defer></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJ87l6pY49ZYlQUBafZQAXKjHQcNElnYc&libraries=places&callback=initAutocomplete"
         async defer></script> -->
	

        <!--  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> -->
	
  		
		<!-- <script src="vendor/jquery/jquery.js"></script> -->
		<script src="vendor/jquery.appear/jquery.appear.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.js"></script>
		<script src="vendor/jquery-cookie/jquery-cookie.js"></script>
		<script src="vendor/bootstrap/bootstrap.js"></script>
		<script src="vendor/common/common.js"></script>
		<script src="vendor/jquery.validation/jquery.validation.js"></script>
		<script src="vendor/jquery.stellar/jquery.stellar.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
		<!-- <script src="vendor/jquery.gmap/jquery.gmap.js"></script> -->
		<script src="vendor/isotope/jquery.isotope.js"></script>
		<!-- <script src="vendor/owlcarousel/owl.carousel.js"></script>
		<script src="vendor/jflickrfeed/jflickrfeed.js"></script>-->
		<script src="vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="vendor/vide/vide.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>
		
		<!-- Specific Page Vendor and Views -->
		<!-- <script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="vendor/circle-flip-slideshow/js/jquery.flipshow.js"></script>
		<script src="js/views/view.home.js"></script>
		<script src="js/views/view.contact.js"></script> -->
		
		
		<!-- Theme Custom -->
		<script src="js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>
		 
 	</body>
</html>
