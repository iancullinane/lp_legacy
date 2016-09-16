<!DOCTYPE html>
<html lang="en">
<head>
  <?php $name = "Belmont";?>
  <meta charset="utf-8">
  <title><?php echo $name;?> Commercial Cleaning | LP Commercial Cleaning | <?php echo $name;?> Cleaning</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="LP Commercial Cleaning for cleaning services in the <?php echo $name;?>, MA area">
  
  <meta name="author" content="craft.main">
  

  <?php include 'views/head_includes.html'; ?>

  



  </head>



    <body data-spy="scroll" data-target=".navbar" id="top">
     <?php 
      
      include "views/navbar.html"; 
     ?> 

    
    

    <div class="landing-wide">
      <div class="container">
          <div class="row-fluid ">
              <h1 class="span12">Commercial Cleaner <?php echo $name;?>, MA</h1>

              <p>We offer a wide range of cleaning services to <?php echo $name;?>, MA. Headquarted at 20 Stony Brook Rd, Framingham, MA, 01702 our 100% fully insured cleaners are able to service the greater central and Eastern Massachusetts areas. Full service and light duty cleaning services and more available to the <?php echo $name;?> area.</p>

              <div class="hero-pattern-button">
                    <a href="#newsletter" class="btn btn-lg btn-success">Contact Us</a>
                </div>
          </div>
    
        </div>
    </div>



     <!-- <div class="container spacer"></div> -->

     <?php include 'views/service.html'; ?>


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
