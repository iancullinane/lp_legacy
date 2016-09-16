<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <title>Contact Us | LP Commercial Cleaning</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Towns serviced by LP Commercial Cleaning expert professional insured commercial cleaning company serving Massachusetts">
  <meta name="author" content="craft.main">
	

  <?php include 'views/head_includes.html'; ?>


  <script>
    function initialize() {
      var mapCanvas = document.getElementById('map_canvas');
      var mapOptions = {
        center: new google.maps.LatLng(42.297569, -71.420435),
        zoom: 8,
        mapTypeId: google.maps.MapTypeId.ROADMAP
      }
      var map = new google.maps.Map(mapCanvas, mapOptions)
    }
    google.maps.event.addDomListener(window, 'load', initialize);
  </script>



	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <![endif]-->
    </head>







    <body data-spy="scroll" data-target=".navbar" id="top">
     

     <?php include 'views/navbar.html' ?>
<!-- End Navbar-->




<?php include 'views/contact_us_loc.php'; ?>

 <?php include 'views/sticky.html'; ?>


<footer>
  <div class="footer-lower">
   <div class="container">
    <div class="row">
     <p class="span6 copy">
      LP Commercial Cleaning LLC &copy; 2014 
    </p>
    <div class="span6">
      <ul class="mini-social pull-right">
      <li>
        <a href="#" title="Facebook" class="a-icon facebook"></a>
      </li>
      <li>
        <a href="#" title="Email Us" class="a-icon email"></a>
      </li>
    </ul>
  </div>
</p>
</div>
</div>
</div>
</footer>

<?php include 'views/footer_includes.html'; ?>
</script>
</body>
</html>
