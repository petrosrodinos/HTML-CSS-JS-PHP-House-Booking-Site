<?php include('../php/server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ioanna House</title>
  <link rel = "icon" href ="../images/logo4.png" type = "image/x-icon">
  <link rel="stylesheet" type="text/css" href="../css/menu.css">
  <link rel="stylesheet" href="../css/gallery.css" type="text/css">
  <link rel="stylesheet" href="../css/photostyle.css" type="text/css">
  <link rel="stylesheet" type="text/css" href="../css/login.css">
  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

</head>
<body>

  <?php
    if (isset($_GET['logout'])) {
      session_destroy();
      unset($_SESSION['username']);
      header("location: ../links/gallery.php");
    }
  ?>

  <div class="menu">
    <ul class="loginlanguage">
      <?php  if (isset($_SESSION['msg'])) : ?>
        <li class="loginbtnn"><a href="../links/gallery.php?logout='1'">Logout | </a></li>
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
        <li><a href="../list/facilities.php" class="list">Facilities</a></li>
        <li><a href="../links/directions.php" class="list">Directions</a></li>
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



  <div class="row">
    <div class="column">
      <img src="https://a0.muscache.com/im/pictures/5fd1cc6a-3f5d-487a-9e30-b4765042c369.jpg?aki_policy=xx_large">
      <img src="https://a0.muscache.com/im/pictures/1e4144d6-2cdf-455e-a801-d5ab290fb4dc.jpg?aki_policy=xx_large">
      <img src="https://a0.muscache.com/im/pictures/95d216eb-ea41-4b43-b79a-22028fafdf66.jpg?aki_policy=xx_large" style="height:15%">
      <img src="https://a0.muscache.com/im/pictures/5c1c38b1-c72d-428b-bc3e-dab737e116e4.jpg?aki_policy=xx_large" style="height:15%">
      <img src="https://a0.muscache.com/im/pictures/d6b5e094-0137-4ad4-b1ec-755e44a575b3.jpg?aki_policy=xx_large">
      <img src="https://a0.muscache.com/im/pictures/7960e4c9-51b2-464f-88b7-dd8990b970a8.jpg?aki_policy=xx_large">
      <img src="https://a0.muscache.com/im/pictures/7ceb5a3d-6249-4b93-b8d4-9023524ad185.jpg?aki_policy=xx_large">
      <img src="https://a0.muscache.com/im/pictures/453ab854-be09-461b-8bed-391bfb80bf6b.jpg?aki_policy=xx_large">
    </div>
    <div class="column">
      <img src="https://a0.muscache.com/im/pictures/657337f1-403a-4994-9fea-36d9d26c733e.jpg?aki_policy=xx_large" style="width:100%">
      <img src="https://a0.muscache.com/im/pictures/14bfd2f1-3eaf-4885-8979-f3340e67c968.jpg?aki_policy=xx_large" style="width:100%;height:15%">
      <img src="https://a0.muscache.com/im/pictures/6e98304f-e9d4-4ae7-807f-ce97191d90e8.jpg?aki_policy=xx_large" style="width:100%;height:15%">
      <img src="https://a0.muscache.com/im/pictures/574bf7f7-f073-47df-aedd-c51d15ce307e.jpg?aki_policy=xx_large" style="width:100%">
      <img src="https://a0.muscache.com/im/pictures/547aa5d0-f08a-4259-a597-498104f84448.jpg?aki_policy=xx_large" style="width:100%">
      <img src="https://a0.muscache.com/im/pictures/eb2fba4c-30a9-4729-92f3-5bed8fec9aa8.jpg?aki_policy=xx_large" style="width:100%">
      <img src="https://a0.muscache.com/im/pictures/50bfa17c-1229-4eaf-8bc9-ff97e27ce1ea.jpg?aki_policy=xx_large" style="width:100%">
    </div>
    <div class="column">
      <img src="https://a0.muscache.com/im/pictures/0a239d91-0fea-49ed-8cfd-753be702b8ac.jpg?aki_policy=xx_large" style="width:100%">
      <img src="https://a0.muscache.com/im/pictures/e4e09753-586b-4514-a4d5-430a4825aea5.jpg?aki_policy=xx_large" style="width:100%;height:15%">
      <img src="https://a0.muscache.com/im/pictures/d5adb049-3669-481a-96c1-2942bae9849e.jpg?aki_policy=xx_large" style="width:100%;height:15%">
      <img src="https://a0.muscache.com/im/pictures/fec0ae6a-3216-4fb3-a3ca-3c728b7ae99a.jpg?aki_policy=xx_large" style="width:100%;height:15%">
      <img src="https://a0.muscache.com/im/pictures/eed3696e-da24-4866-b684-445bc1aafef4.jpg?aki_policy=xx_large" style="width:100%">
      <img src="https://a0.muscache.com/im/pictures/ce850524-0c85-42c6-b548-a2d2f4cb95c0.jpg?aki_policy=xx_large" style="width:100%">
      <img src="https://a0.muscache.com/im/pictures/9951d400-8bca-4fc5-9df2-dc3475991d20.jpg?aki_policy=xx_large" style="width:100%;height:15%">

    </div>
    <div class="column">
      <img src="https://a0.muscache.com/im/pictures/32cd8abc-c254-4f2c-af98-ace80c1361da.jpg?aki_policy=xx_large" style="height:13%">
      <img src="https://a0.muscache.com/im/pictures/dba9909b-c665-4522-aa75-eb370ab7dabc.jpg?aki_policy=xx_large">
      <img src="https://a0.muscache.com/im/pictures/1458fb1a-62c4-44ca-8369-d4e1521b3ea1.jpg?aki_policy=xx_large" style="height:15%">
      <img src="https://a0.muscache.com/im/pictures/6da3449e-4855-46b9-841e-49da980c07ff.jpg?aki_policy=xx_large">
      <img src="https://a0.muscache.com/im/pictures/982a8b0e-bd1e-433c-910c-e56c123d69e9.jpg?aki_policy=xx_large" style="height:15%">
      <img src="https://a0.muscache.com/im/pictures/c6a29a31-de89-4f14-b4a0-1c7e857bb519.jpg?aki_policy=xx_large">
      <img src="https://a0.muscache.com/im/pictures/bc4c4da9-6d59-4558-aa81-d32f1903747a.jpg?aki_policy=xx_large">
    </div>
  </div>

  <!-- <div class="activeimage">
    <label class="moveactive">&times;</label>
    <img>
  </div> -->



  <script src="../js/loginout.js" type="text/javascript"></script>
  <script src="../js/gallery.js" type="text/javascript"></script>
    <script src="../js/loginout.js" type="text/javascript"></script>
  <script src="https://code.iconify.design/1/1.0.4/iconify.min.js"></script>

</body>
</html>
