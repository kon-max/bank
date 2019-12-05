<?php
//require_once 'lib/Db.php' ;
//require_once 'lib/Customer.php' ;
require_once '../config.php';
session_start();
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$account_info=[];
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
           }
/* выводим информацию о Клиенте*/
if (isset($_SESSION['user']))
{
    $id=(int)trim($_GET['user']);
    $sql="SELECT * FROM customers WHERE `user`=".$с_id;
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
}


 mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bank</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include_once 'style.php'?>
   
  </head>
  <body>
  <input type="checkbox" id="nav-toggle" hidden>
   <!-- Header -->
    <?php
      include_once '../partials/nav.php';
      ?>
    <!--END Header -->

    <section class="ftco-cover" style="background-image: url(../images/bg_1.jpg);" id="section-home" data-aos="fade"  data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center ftco-vh-75">
          <div class="col-md-7">
            <h1 class="ftco-heading mb-3" data-aos="fade-up" data-aos-delay="500">Данные ползователя</h1>
            <h2 class="h5 ftco-subheading mb-5" data-aos="fade-up"  data-aos-delay="600">просмотр/внесение изменений</h2>    
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    <!-- боковое меню -->
    <?php include_once 'account_lib/left_menu.php'; ?>
    <!-- конец бокового меню -->
 <div class="ftco-section contact-section"> 
    <div class="container">
     <div class="row block-9">
        <div class="col-md-9">
           <?php foreach ($account_info as $a_info):?>
            <div class="form-group">
                <?php echo $a_info['first_name'];
                echo $a_info ['second_name'];
                echo $a_info ['last_name'];
                ?>
            </div>
            <div class="form-group">
                <output type="text" name="balanse" class="form-control"> <?php echo $a_info['balance']; ?> 
                </output>
            </div>
            <div class="form-group">
                <output type="text" name="email" class="form-control"></output>
            </div>
            <div class="form-group">
                <output type="text" name="telephone" class="form-control"></output>
            </div>
            <?php endforeach; ?>
         </div>
        </div>
    </div>
    <a href="../index.php">Выход</a>
  </div>
    
                       
                        <!-- footer -->
 <?php include_once '../partials/footer.php'; ?>
                      <!-- end footer -->

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
    
  </body>
</html>