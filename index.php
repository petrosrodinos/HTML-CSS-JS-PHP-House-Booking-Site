<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ioanna House</title>
  <link rel="stylesheet" href="css/menu.css">
  <link rel = "icon" href ="images/logo4.png" type = "image/x-icon">
  <link rel="stylesheet" type="text/css" href="css/photostyle.css">
  <link rel="stylesheet" type="text/css" href="css/reservation.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="stylesheet" type="text/css" href="css/menu.css">
  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

</head>
<body>


  <?php include('php/server.php') ?>

  <?php
    if (isset($_GET['logout'])) {
    	session_destroy();
    	unset($_SESSION['username']);
    	header("location: index.php");
      unset($_COOKIE['wp_user_logged_in']);
      setcookie('wp_user_logged_in', null, -1, '/');
    }
  ?>

<div class="menu">
  <ul class="loginlanguage">
    <?php  if (isset($_SESSION['msg'])) : ?>
      <li class="loginbtnn"><a href="index.php?logout='1'">Logout | </a></li>
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
      <li><a href="index.php" class="list">House</a></li>
      <li><a href="links/facilities.php" class="list">Facilities</a></li>
      <li><a href="links/directions.php" class="list">Directions</a></li>
      <li><a href="index.php"><img src="images/logo4.png" alt="logo" class="logo"></a></li>
      <li><a href="links/gallery.php" class="list">Gallery</a></li>
      <li><a href="links/communication.php" class="list">Communication</a></li>
      <li><a href="links/announcements.php" class="list">Announcements</a></li>
  </ul>
</div>

<div class="loginout">

  <div class="exitbtn">&times;</div>
  <form method="post" action="" id="loginform">
    <div class="login">
      <?php include('php/errorslogin.php'); ?>

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
    <?php include('php/errorsregister.php'); ?>
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





  <div class="pimg1">
    <div class="ptext">
      <img src="images/ioanna.png" alt="Ioanna House" class="ioanna">
      <span class="border">
          Make a Reservasion now
      </span>
    </div>
  </div>

  <div class="reservation">
    <form id="reservationform" method="post">
      <ul>
        <li class="dropdown">
            <label>ARRIVAL</label>
            <input type="date" id="arrival" class="item dates" name="arrival" min="<?php echo date("Y") ."-". date("m") ."-".(date("d")+2) ; ?>" max="<?php echo date("Y") ."-12-30" ; ?>" />
        </li>

        <li class="dropdown">
            <label>DEPARTURE</label>
            <input type="date" id="departure"class="item dates" name="departure" min="<?php echo date("Y") ."-". date("m") ."-".(date("d")+2) ; ?>" max="<?php echo date("Y") ."-12-30" ; ?>"/>
        </li>

        <li class="dropdown"><label>adults</label>
            <select id="adults" class="item" name="adults">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
            </select>
        </li>

        <li class="dropdown"><label>kids</label>
            <select id="kids" class="item" name="kido">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
            </select>
        </li>

        <li class="dropdown">
            <button class="book item" type="button" name="book">book now</button>
        </li>

      </ul>
    </form>
  </div>
  <div class="reservationerrors"><label><?php echo $_SESSION['message'] ;?></label></div>


  <div class="payment">
    <div class="exitbtn">&times;</div>
    <?php if (isset($_SESSION['message'])){?>
      <ul>
        <li class="paymentitem"><label id="arr"><?php echo "ARRIVAL: " .$arrival ?></label></li>
        <li class="paymentitem"><label id="dep"><?php echo "DEPARTURE: " .$departure ?></label></li>
        <li class="paymentitem"><label id="adult"><?php echo "ADULTS: " .$adults ?></label></li>
        <li class="paymentitem"><label id="kid"><?php echo "KIDS: " .$kids ?></label></li>
        <li class="paymentitem"><label id="cost"><?php echo "COST: 555" ?></label></li>
        <li class="paymentitem"><input type="button" value="Confirm Booking" class="paymentbtn" name="confirm"></li>
        <li><div class="message"><label><?php echo $_SESSION['message'] ;?></label></div></li>
      </ul>
    <?php } ?>




</div>


  <?php if (isset($_SESSION['msg'])) : ?>
    <div class="supper" style="display:none">
      <?php  if (isset($_SESSION['msg'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['telephone']; ?></strong></p>
        <p>MSG: <strong><?php echo $_SESSION['msg']; ?></strong></p>
        <p>ADMIN: <strong><?php if(isset($_SESSION['admin'])){echo $_COOKIE['wp_user_logged_in'];}else{ echo '';}; ?></strong></p>
      <?php endif ?>
    </div>
  <?php endif ?>








  <section class="section section-light">
    <h2>Section One</h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, laudantium, quibusdam? Nobis, delectus, commodi, fugit amet tempora facere dolores nisi facilis consequatur, odio hic minima nostrum. Perferendis eos earum praesentium, blanditiis sapiente labore aliquam ipsa architecto vitae. Minima soluta temporibus voluptates inventore commodi cumque esse suscipit optio aliquam et, dolorem a cupiditate nihil fuga laboriosam fugiat placeat dignissimos! Unde eveniet placeat quisquam blanditiis voluptatem doloremque fugiat dolor repellendus ratione in. Distinctio provident dolorem modi cumque illo enim quidem tempora deserunt nostrum voluptate labore repellat quisquam quasi cum suscipit dolore ab consequuntur, ad porro earum temporibus. Laborum ad temporibus ex, omnis!
    </p>
  </section>

  <div class="pimg2">
  </div>

  <section class="section section-dark">
    <h2>Section Two</h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, laudantium, quibusdam? Nobis, delectus, commodi, fugit amet tempora facere dolores nisi facilis consequatur, odio hic minima nostrum. Perferendis eos earum praesentium, blanditiis sapiente labore aliquam ipsa architecto vitae. Minima soluta temporibus voluptates inventore commodi cumque esse suscipit optio aliquam et, dolorem a cupiditate nihil fuga laboriosam fugiat placeat dignissimos! Unde eveniet placeat quisquam blanditiis voluptatem doloremque fugiat dolor repellendus ratione in.
    </p>
  </section>

  <div class="pimg3">
  </div>

  <section class="section section-dark">
    <h2>Section Three</h2>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt, laudantium, quibusdam? Nobis, delectus, commodi, fugit amet tempora facere dolores nisi facilis consequatur, odio hic minima nostrum. Perferendis eos earum praesentium, blanditiis sapiente labore aliquam ipsa architecto vitae. Minima soluta temporibus voluptates inventore commodi cumque esse suscipit optio aliquam et, dolorem a cupiditate nihil fuga laboriosam fugiat placeat dignissimos! Unde eveniet placeat quisquam blanditiis voluptatem doloremque fugiat dolor repellendus ratione in.
    </p>
  </section>

  <div class="pimg4">
  </div>

<script src="js/menuup.js" type="text/javascript"></script>
<script src="js/reservation.js" type="text/javascript"></script>
<script src="js/loginout.js" type="text/javascript"></script>
<script src="js/test.js" type="text/javascript"></script>
<script src="https://code.iconify.design/1/1.0.4/iconify.min.js"></script>




</body>
</html>
