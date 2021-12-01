<?php include('../php/sendemail.php') ?>
<?php include('../php/server.php') ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ioanna House</title>
  <link rel = "icon" href ="/images/logo4.png" type = "image/x-icon">
  <link rel="stylesheet" type="text/css" href="../css/menu.css">
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <link rel="stylesheet" href="../css/photostyle.css">
  <link rel="stylesheet" href="../css/communication.css">
  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">


</head>
<body>

  <?php
    if (isset($_GET['logout'])) {
    	session_destroy();
    	unset($_SESSION['username']);
    	header("location: ../links/communication.php");
    }
  ?>


  <div class="menu">
    <ul class="loginlanguage">
      <?php  if (isset($_SESSION['msg'])) : ?>
        <li class="loginbtnn"><a href="../links/communication.php?logout='1'">Logout | </a></li>
      <?php endif ?>

      <?php  if (!isset($_SESSION['msg'])) : ?>
        <li class="loginbtn">Login | </li>
      <?php endif ?>

      <li class="language">| En <i class="fas fa-caret-down"></i>
          <div class="dropdown-content">
            <a href="#">FR</a>
            <a href="#">RUS</a>
            <a href="#">GRM</a>
          </div>
      </li>
    </ul>


    <ul class="menulist">
      <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
      <li><a href="https://www.airbnb.gr/rooms/18351727?source_impression_id=p3_1585001030_lFeJ8fgm0lidmYvp" target="_blank"><span class="iconify icon:fa-brands:airbnb icon-inline:false"></span></a></li>
      <li><a href="../index.php" class="list">House</a></li>
      <li><a href="../links/facilities.html" class="list">Facilities</a></li>
      <li class="dest"><a href="../links/directions.php" class="list">Directions</a></li>
      <li><a href="../index.php"><img src="../images/logo4.png"class="logo"></a></li>
      <li><a href="../links/gallery.php" class="list">Gallery</a></li>
      <li><a href="../links/communication.php" class="list">Communication</a></li>
      <li><a href="../links/announcements.php" class="list">Announcements</a></li>
    </ul>
  </div>

  <div class="loginout">

    <div class="exitbtn">&times;</div>
    <form method="post" action="" id="loginform">
      <div class="login">
        <?php include('../php/errorslogin.php'); ?>

        <ul>
          <li class="errorss"></li>
          <li><input type="text" class="loginitem" placeholder="E-mail" name="email" id="email"></li>
          <li><input type="password" class="loginitem" id="password" placeholder="Password" name="password"></li>
          <li><button  id="loginbtn"class="stylebutton loginitem" name="loginbtn">Log in</button></li>
          <li><input type="button" value="Create an Account"class="stylebutton accountbutton loginitem"></li>
        </ul>
    </div>
  </form>


  <form method="post" action="" id="registerform">
    <div class="register">
      <?php include('../php/errorsregister.php'); ?>
        <ul>
          <div class="errorssreg"></div>
          <li><input type="text" class="loginitem" placeholder="Name" name="name" id="name"></li>
          <li><input type="text" class="loginitem"  placeholder="Lastname" name="lastname" id="lastname"></li>
          <li><input type="text" class="loginitem"  placeholder="Country" name="country" id="country"></li>
          <li><input type="text" class="loginitem"  placeholder="Address" name="address" id="address"></li>
          <li><input type="text" class="loginitem"  placeholder="Email" name="email" id="emailr"></li>
          <li><input type="text" class="loginitem"  placeholder="Telephone" name="telephone" id="telephone"></li>
          <li><input type="text" class="loginitem"  placeholder="AFM" name="afm" id="afm"></li>
          <li><input type="password" class="loginitem"  placeholder="Password" name="password" id="passwordr"></li>
          <li><button id="registerbtn" class="registerbutton loginitem stylebutton" name="registerbtn">Create Account</button></li>
          <li><input type="button" value="Back to Login"class="backtologin loginitem stylebutton"></li>
        </ul>
      </div>
    </form>
  </div>



  <div class="pimg5"></div>

  <div class="blurred-box">

    <div class="commbox">
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
      <ul>
        <li><input type="text" class="commitem" placeholder="Full Name" name="fullname"></li>
        <li><input type="text" class="commitem" placeholder="Subject" name="subject"></li>
        <li><input type="text" class="commitem" placeholder="E-mail" name="email"></li>
        <li><textarea rows="4" cols="100" placeholder="Enter Your Question Here" name="text"></textarea></li>
        <li><button type="submit" class="commitem commbtn" name="send">Send</button></li>
        <li><label class="confirm" class="commitem" ><?php include('../php/errorsemail.php'); ?></label></li>
      </ul>
    </form>
    </div>

  </div>

  <script src="../js/menuup.js" type="text/javascript"></script>
  <script src="../js/reservation.js" type="text/javascript"></script>
  <script src="../js/loginout.js" type="text/javascript"></script>
  <script src="../js/communication.js" type="text/javascript"></script>
  <script src="https://code.iconify.design/1/1.0.4/iconify.min.js"></script>

</body>
</html>
