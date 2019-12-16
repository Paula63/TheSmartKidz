<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();

isset($_SESSION['loggedin']);
?>
<!DOCTYPE html>
<html lang="en">



<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>The Smart Kidz</title>

  <!-- Custom fonts for this theme -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   <link href="/css/quiz.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open Sans"/>
  

  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/map.css" />
   <script type="text/javascript" src='/js/Science_Questons1.js'></script>
</head>

<body id="page-top">

  <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="../index.php">The Smart Kidz</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
         <?php
          if(isset($_SESSION['loggedin']) == true) {
            echo '<li class="nav-item mx-0 mx-lg-3">';
           echo '<a href="php/profile.php"><i class="fas fa-user-circle col-xs-3 " ></i>Profile </a>';
            
            echo '<a href="php/logout.php"><i class="fas fa-sign-out-alt btn1" name = "submitbutton" ></i>Logout</a></div></li>';
          
          
            
              } else {
            
               echo ' <li class="nav-item mx-0 mx-lg-1">';
               echo '<div class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger btn text-white"  data-toggle="modal" data-target= "#portfolioModal2">Login/Register</a></div></li>';
         
             
             
                }     
          ?>
        </ul>
      </div>
    </div>
  </nav>


      <!-- Masthead Subheading -->
      <p class="masthead-subheading font-weight-light mb-0">The Smart Kidz</p>

    </div>
  </header>

  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="portfolio">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Science</h2>
      <div class="text-right"><a href="index.php"><button class="btn btn-danger" >
      <i class="fa fa-home pull-left " class="text-right"></i> Home</button></div></a></h2><p>
    </p>
    
      <a class="btn btn-primary p-3 col px-md-5" href="science html/sfirst_class.php" role="button">First Class</a> <p></p>
      <a class="btn btn-primary p-3 col px-md-5" href="science html/ssecond_class.php" role="button">Second Class</a> <p></p>
      <a class="btn btn-primary p-3 col px-md-5" href="science html/sthird_class.php" role="button">Third Class</a> <p></p>
      <a class="btn btn-primary p-3 col px-md-5" href="science html/sfourth_class.php" role="button">Fourth Class</a> <p></p>
      <a class="btn btn-primary p-3 col px-md-5" href="science html/sfifth_class.php" role="button">Fifth Class</a> <p></p>
      <a class="btn btn-primary p-3 col px-md-5" href="science html/ssixth_class.php" role="button">Sixth Class</a>

    </div>
  </section>




  <!-- Copyright Section -->
  <section class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; Your Website 2019</small>
    </div>
  </section>

  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>

  

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/freelancer.min.js"></script>
 
  


 

</body>

</html>
