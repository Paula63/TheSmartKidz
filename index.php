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
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <!-- Theme CSS -->
  <link href="css/freelancer.min.css" rel="stylesheet">
  </head>
  <body id="page-top">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger">The Smart Kidz</a>
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
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content for warn the user to Log in or Register-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Warning</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         <p><strong><span style="font-family: Impact, Charcoal, sans-serif; color: rgb(209, 72, 65); font-size: 24px;">Please Register in Order to Proceed!!</span></strong></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      </div>
    <!-- Masthead Subheading -->
      <p class="masthead-subheading font-weight-light mb-0">The Smart Kidz</p>
    </div>
   <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content for the wron password-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Warning</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
<p><strong><span style="font-family: Impact, Charcoal, sans-serif; color: rgb(209, 72, 65); font-size: 24px;">Incorrect Password or Email!!</span></strong></p>        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
    </div>
	<div class="modal fade" id="myModal3" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content for the wron password-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Warning</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
<p><strong><span style="font-family: Impact, Charcoal, sans-serif; color: rgb(209, 72, 65); font-size: 24px;">Registration has been made sucessufully </span></strong></p>        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
    </div>
	<div class="modal fade" id="myModal4" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content for the wron password-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Warning</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
<p><strong><span style="font-family: Impact, Charcoal, sans-serif; color: rgb(209, 72, 65); font-size: 24px;">Semeone is using this email already</span></strong></p>        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
    </div>
 

  <!-- Portfolio Section -->
  <section class="page-section portfolio" id="portfolio">
    <div class="container">

      <!-- Portfolio Section Heading -->
      <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Categories</h2>

      <!-- Icon Divider -->
      <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>

      <!-- Portfolio Grid Items -->
      <div class="row">

        <!-- Portfolio Item 1 -->
        <div class="col-md-6 col-lg-4">
          <?php
          if(isset($_SESSION['loggedin']) == true) {
            echo '<a href ="maths.php">';
          }else {
            echo'<a data-toggle="modal" data-target="#myModal">';
          }
          ?>
         
          <div class="portfolio-item mx-auto">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white" >
                <i class="text-center text-white fa-3x">Maths</i>
              </div>
            </div>
            <img class="img-fluid" src="img/categories/maths.jpg" alt="">
          </div>
        </div>
          </a>
        <!-- Portfolio Item 2 -->
        <div class="col-md-6 col-lg-4">
           <?php
          if(isset($_SESSION['loggedin']) == true) {
            echo '<a href="geography.php">';
          }else {
            echo'<a data-toggle="modal" data-target="#myModal">';
          }
          ?>
          
          <div class="portfolio-item mx-auto">
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="text-center text-white fa-3x">Geography</i>
              </div>
            </div>
            <img class="img-fluid" src="img/categories/geography.jpg" alt="">
          </div>
        </div>
        </a>
        <!-- Portfolio Item 3 -->
        <div class="col-md-6 col-lg-4">
            <?php
          if(isset($_SESSION['loggedin']) == true) {
            echo '<a href= "english.php">';
          }else {
            echo'<a data-toggle="modal" data-target="#myModal">';
          }
          ?>
          <div class="portfolio-item mx-auto" >
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
               <i class="text-center text-white fa-3x">English</i>
              </div>
            </div>
            <img class="img-fluid" src="img/categories/english.jpg" alt="">
          </div>
        </div>
          </a>
        <!-- Portfolio Item 4 -->
        <div class="col-md-6 col-lg-4">
                      <?php
          if(isset($_SESSION['loggedin']) == true) {
            echo '<a href ="science.php">';
          }else {
            echo'<a data-toggle="modal" data-target="#myModal">';
          }
          ?>
          <div class="portfolio-item mx-auto" >
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="text-center text-white fa-3x">Science</i>
              </div>
            </div>
            <img class="img-fluid" src="img/categories/science.jpg" alt="">
          </div>
        </div>
        </a>
        <!-- Portfolio Item 5 -->
        <div class="col-md-6 col-lg-4">
           <?php
          if(isset($_SESSION['loggedin']) == true) {
            echo '<a href="arts.php">';
          }else {
            echo'<a data-toggle="modal" data-target="#myModal">';
          }
          ?>
          <div class="portfolio-item mx-auto" >
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
               <i class="text-center text-white fa-3x">Arts</i>
              </div>
            </div>
            <img class="img-fluid" src="img/categories/arts.jpg" alt="">
          </div>
        </div>
        </a>
        <!-- Portfolio Item 6 -->
        <div class="col-md-6 col-lg-4">
            <?php
          if(isset($_SESSION['loggedin']) == true) {
            echo '<a href="history.php">';
          }else {
            echo'<a data-toggle="modal" data-target="#myModal">';
          }
          ?>
          
          
          <div class="portfolio-item mx-auto" >
            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
              <div class="portfolio-item-caption-content text-center text-white">
                <i class="text-center text-white fa-3x">History</i>
              </div>
            </div>
            
            <img class="img-fluid" src="img/categories/history.jpg" alt="">
          </div>
        </div>
           </a>
      </div>
      <!-- /.row -->
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
<!-- Portfolio Modal  -->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">
            <i class="fas fa-times"></i>
          </span>
        </button>
        <div class="modal-body text-center">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-sm-8">
                <!-- Portfolio Modal - Title -->
                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" data-toggle="modal" data-target="#myModal2">Login</h2>
                <!-- Icon Divider -->
            <div class="modal-dialog cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Modal cascading tabs-->
      <div class="modal-c-tabs">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
          <li class="nav-item">
          <a class="nav-link active" data-toggle="tab" href="#panel7" role="tab"><i class="fas fa-user mr-1"></i>
              Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel8" role="tab"><i class="fas fa-user-plus mr-1"></i>
              Register</a>
          </li>
        </ul>
        <!-- Tab panels -->
        <div class="tab-content">
          <!--Panel 7-->
          <div class="tab-pane fade in show active" id="panel7" role="tabpanel">
           <form method="post" action="php/authenticate.php">
            <!--Body-->
            <div class="modal-body mb-1">
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="email"  name="email" placeholder="Email" id="username" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" name ="email" type="email" for="modalLRInput10">Your email</label>
              </div>
              <div class="md-form form-sm mb-4">
                <i class="fas fa-lock prefix"></i>
               <input type="password"  name="password" placeholder="Password" id="password"  class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" name="password" type="password" for="modalLRInput11">Your password</label>
              </div>
              <div class="text-center mt-2">
                <button class="btn btn-info" name="login-button">Log in <i class="fas fa-sign-in ml-1"></i></button>
              </div>
            </div>
            <p class="font-small dark-grey-text text-right d-flex justify-content-center mb-3 pt-2"> or Sign in
          with:</p>
            <div class="row my-3 d-flex justify-content-center">
          <!--Facebook-->
          <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-facebook-f text-center"></i></button>
          <!--Twitter-->
          <button type="button" class="btn btn-white btn-rounded mr-md-3 z-depth-1a"><i class="fab fa-twitter"></i></button>
          <!--Google +-->
          <button type="button" class="btn btn-white btn-rounded z-depth-1a"><i class="fab fa-google-plus-g"></i></button>
        </div>
            </form>
            <!--Footer-->
            <div class="options text-center text-md-right mt-1">
                <p>Not a member? <a href="#panel8" class="blue-text">Sign Up</a></p>
                <p>Forgot <a href="#" class="blue-text">Password?</a></p>
              </div>
          </div>
		 
		 
		   
          <!--/.Panel 7-->

          <!--Panel 8-->
          <div class="tab-pane fade" id="panel8" role="tabpanel">
<form action="php/insert.php" method="POST">
            <!--Body-->
            <div class="modal-body">
              <div class="md-form form-sm mb-5">
                <i class="fas fa-envelope prefix"></i>
                <input type="email" name="email" id="modalLRInput12" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput12">Your email</label>
              </div>

              <div class="md-form form-sm mb-5">
                <i class="fas fa-lock prefix"></i>
                <input type="password" name="password" id="modalLRInput13" class="form-control form-control-sm validate">
                <label data-error="wrong" data-success="right" for="modalLRInput13">Your password</label>
              </div>
	
              <div class="text-center form-sm mt-2">
                <button class="btn btn-info" type="submit">Sign up <i class="fas fa-sign-in ml-1"></i></button>
              </div>
			  
            </div>
            </form>
            <!--Footer-->
            <div class="modal-footer">
              <div class="options text-right">
                <p class="pt-1">Already have an account? <a href="#" class="blue-text">Log In</a></p>
              </div>
            </div>
          </div>
          <!--/.Panel 8-->
        </div>

      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
             <script>  
 $(document).ready(function(){  
      $('#login_button').click(function(){  
           var username = $('#username').val();  
           var password = $('#password').val();  
           if(username != '' && password != '')  
           {  
                $.ajax({  
                     url:"action.php",  
                     method:"POST",  
                     data: {username:username, password:password},  
                     success:function(data)  
                     {  
                          //alert(data);  
                          if(data == 'No')  
                          {  
                               alert("Wrong Data");  
                          }  
                          else  
                          {  
                               $('#loginModal').hide();  
                               location.reload();  
                          }  
                     }  
                });  
           }  
           else  
           {  
                alert("Both Fields are required");  
           }  
      });  
      $('#logout').click(function(){  
           var action = "logout";  
           $.ajax({  
                url:"action.php",  
                method:"POST",  
                data:{action:action},  
                success:function()  
                {  
                     location.reload();  
                }  
           });  
      }); 
	  
	  
 });  
 </script>
              
              </div>
            </div>
          </div>
        <button class="btn btn-primary" href="#" data-dismiss="modal">
                  <i class="fas fa-times fa-fw"></i>
                  Close Window
        </button>
        </div>
      </div>
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
