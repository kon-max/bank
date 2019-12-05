<?php
//require_once 'lib/Db.php' ;
//require_once 'lib/Customer.php' ;

// Create connection
//$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//if (!$conn) {
//    die("Connection failed: " . mysqli_connect_error());
//            }

session_start();

if (!isset($_SESSION['user']) or empty($_SESSION['user']))
    {
    header('Location:../login.php');
        
    }

if (isset($_GET['с_id']) and !empty($_GET['с_id']))
{
    $id=(int)trim($_GET['с_id']);
    $sql="SELECT * FROM `news` WHERE `с_id`=".$С_id;
    $result = mysqli_query($conn, $sql);
    $row=mysqli_fetch_assoc($result);
}
//    mysqli_close($conn);
      
//$customer_obj = new Customer();
//$customers = $customer_obj->getCustomers();

//$hash= password_hash('Вася', PASSWORD_DEFAULT);

//echo $hash;

//$is_valid=password_verify('Вася', $hash);

//var_dump($is_valid);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Papers - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="test.css">
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
            <h1 class="ftco-heading mb-3" data-aos="fade-up" data-aos-delay="500">Личный кабинет</h1>
            <h2 class="h5 ftco-subheading mb-5" data-aos="fade-up"  data-aos-delay="600">просмотр</h2>    
            <!-- <p data-aos="fade-up"  data-aos-delay="700"><a href="https://free-template.co/" target="_blank" class="btn btn-outline-white px-4 py-3" data-toggle="modal" data-target="#reservationModal">Go Get This Template</a></p> -->
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <!-- боковое меню -->
    <nav class="nav">
    <label for="nav-toggle" class="nav-toggle" onclick></label>
    <h2 class="logo">menu</h2>
   <ul>
   <li><a href="#1">Данные ползьзователя</a>
   <li><a href="#2">Работа с балансом</a>
   <li><a href="#3">Новости для пользователя</a>
   <li><a href="#4">Выход</a>
    </ul>
   </nav>
    <!-- конец бокового меню -->
    
 <div class="ftco-section contact-section"> 
    <div class="container">
    
     <div class="row block-9">
        <div class="col-md-9">
            <div class="form-group">
            <output type="text" name="base_name" class="form-control"> <?php echo $row['first_name'.'second_name'.'last_name']; ?></output>
            </div>
            <div class="form-group">
            <output type="text" name="balanse" class="form-control"> <?php echo $row['balance']; ?> 
            </output>
            </div>
            <div class="form-group">
            <output type="text" name="email" class="form-control"></output>
            </div>
            <div class="form-group">
            <output type="text" name="telephone" class="form-control"></output>
            </div>
         </div>
        </div>
     <h2> Ваш Баланс</h2>
        <div class="row block-9">
        <div class="col-md-2">
            <output type="text" name="balanse" class="form-control"></output>
        </div>
        </div>
      <h2>Пополнить баланс</h2>
        <div class="row block-9">
        <div class="col-md-2">
              <input type="text" name="cash" class="form-control" placeholder="Укажите сумму"><br>
         </div>
         </div>
          <div class="row block-9">
        <div class="form-group">
               <input type="submit" value="Добавить" class="btn btn-primary py-3 px-5"> 
            </div>
            </div>
    </div>
    <a href="../index.php">Выход</a>
  </div>
                       
                        <!-- footer -->
 <?php
      include_once '../partials/footer.php';
      ?>
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