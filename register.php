<?php
require_once 'lib/Db.php' ;
require_once 'lib/Customer.php' ;
require_once 'lib/PasswordHash.php' ;
session_start();

$customer_obj = new Customer();
$customers = $customer_obj->getCustomers();
$password_hash = new PasswordHash();

if (isset($_POST) and !empty($_POST))
{
    
    $user_login = trim($_POST['login']);
    $user_password = trim($_POST['password']);
    foreach ($customers as $customer)
    {
      
        
        if ($customer['login']== $user_login and $password_hash->is_valid($user_password, $customer['password']))
            {
             
                $_SESSION['user'] = $customer; 
                header('Location: account/account.php');
                exit;
            }
    }
      $_SESSION['error'] = 'Такой пользователь не найден';
            header('Location: login.php');
            exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Papers - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
   <!--  Header -->
    <?php
      include_once 'partials/nav.php';
      ?>
    <!-- End Header -->

    <section class="ftco-cover" style="background-image: url(images/bg_1.jpg);" id="section-home" data-aos="fade"  data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center ftco-vh-75">
          <div class="col-md-7">
            <h1 class="ftco-heading mb-3" data-aos="fade-up" data-aos-delay="500">Авторизация</h1>
            <h2 class="h5 ftco-subheading mb-5" data-aos="fade-up"  data-aos-delay="600"> Для продолжения работы выполните АВТОРИЗАЦИЮ</h2>
            <!-- 
            <p data-aos="fade-up"  data-aos-delay="700"><a href="https://free-template.co/" target="_blank" class="btn btn-outline-white px-4 py-3" data-toggle="modal" data-target="#reservationModal">Go Get This Template</a></p> 
            -->
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
    
 <div class="ftco-section contact-section">
    <div class="container">
      <div class="row block-9">
        <div class="col-md-12">
          <form action="login.php" method="post">
            <div class="form-group">
              <input type="text" name="login" class="form-control" placeholder="Login">
            </div>
            <div class="form-group">
              <input type="text" name="first_name" class="form-control" placeholder="first_name">
            </div>
            <div class="form-group">
              <input type="text" name="Second_name" class="form-control" placeholder="Second_name">
            </div>
            <div class="form-group">
              <input type="text" name="last_name" class="form-control" placeholder="last_name">
            </div>
            <div class="form-group">
              <input type="tel" name="Telephone" class="form-control" placeholder="telephone">
            </div>
            <div class="form-group">
              <input type="mail" name="email" class="form-control" placeholder="email">
            </div>
            
            <div class="form-group">
              <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="form-group">
                   <input type="submit" value="Entrance" class="btn btn-primary py-3 px-5">
                  <!-- <botton><a href="account.php">Entrance</a></botton>-->
            </div>
          </form>
        
        </div>
      </div>
    </div>
  </div>
                  <!-- Footer -->
   <?php
      include_once 'partials/footer.php';
      ?>
                <!--end  Footer -->
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>