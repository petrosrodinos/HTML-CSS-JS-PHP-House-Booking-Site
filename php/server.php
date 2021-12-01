<?php
include 'connect.php';
//error_reporting(0);
session_start();
ob_start();

$errorslogin = array();
$errorsregister = array();

 //if (isset($_POST['registerbtn'])) {
if ( isset($_POST['name']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['country']) && isset($_POST['address']) && isset($_POST['telephone'])
&& isset($_POST['afm']) ) {
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $lastname = mysqli_real_escape_string($db, $_POST['lastname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);
  $country = mysqli_real_escape_string($db, $_POST['country']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $telephone = mysqli_real_escape_string($db, $_POST['telephone']);
  $afm = mysqli_real_escape_string($db, $_POST['afm']);




    if( empty($name) || empty($email) || empty($password) || empty($lastname) || empty($country) ||
      empty($address)|| empty($telephone) ||empty($afm) ){
        array_push($errorsregister, "Please fill-out all fields");

      }if( !preg_match("/^[a-zA-Z ]*$/",$name) ||  !preg_match("/^[a-zA-Z ]*$/",$lastname) || !preg_match("/^[a-zA-Z ]*$/",$country) ||
      !preg_match("/^[a-zA-Z ]*$/",$address) || !preg_match("/^[a-zA-Z ]*$/",$telephone) ){
          array_push($errorsregister, "Only letters/numbers are allowed");
        }if( !filter_var($email, FILTER_VALIDATE_EMAIL) ){
          array_push($errorsregister, "Thats not an Email address");
        }




  $user_check_query = "SELECT * FROM login WHERE email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) {
    if ($user['email'] === $email) {
      array_push($errorsregister, "Email already exists");
    }
  }

  if (count($errorsregister) == 0) {
  //	$password = md5($password);

    $sql = "INSERT INTO login (name, pass, email,country,afm,telephone,address,lastname)
    VALUES ('{$name}', '{$password}', '{$email}','{$country}','{$afm}','{$telephone}','{$address}','{$lastname}')";

    if ($db->query($sql) === FALSE) {
    array_push($errorsregister, "Error creating account");
    }else{

      $_SESSION['username'] = $email;
    	$_SESSION['msg'] = "Your account has been created";
  	  //header('location: index.php');
  }
  }
}

//LOGIN code


// if (isset($_POST['loginbtn'])) {
   if( isset($_POST['email']) && isset($_POST['password']) ) {
      $email = mysqli_real_escape_string($db, $_POST['email']);
      $password = mysqli_real_escape_string($db,$_POST['password']);

   //    if( empty($email) || empty($password) ) {
   //       array_push($errorslogin, "Please fill-out all fields");
   //   }
   // }

  //if (count($errorslogin) == 0) {
  	//$password = md5($password);
    $query = "SELECT * FROM `login` WHERE email='$email' AND pass='$password'";

    if($query_run = mysqli_query($db,$query)){
        $query_num_rows = mysqli_num_rows($query_run);
        if($query_num_rows==0){
          array_push($errorslogin,"Wrong Compination");
          setcookie('wrongcomb', null, -1, '/');
          $_COOKIE['wrongcomb'] = -1;

        }else if($query_num_rows==1){
          $user_log = mysqli_fetch_array($query_run, MYSQLI_BOTH);
          setcookie('wp_user_logged_in', 1, time() +18000, '/');
          $_COOKIE['wp_user_logged_in'] = 1;
          $_SESSION['msg'] = "loged in";
          $_SESSION['name'] = $user_log['name'];
          $_SESSION['email'] = $user_log['email'];
          $admin =  $user_log['admin'];
            if($admin==1){
            $_SESSION['admin'] = $admin;
            }
        }

  	}
  }
//}

$validate=0;

if( isset($_POST['arrival']) && isset($_POST['departure']) ){

  $arrival = date('Y-m-d', strtotime($_POST['arrival']));
  $departure = date('Y-m-d', strtotime($_POST['departure']));

  $res = "SELECT arrival,departure FROM `login` WHERE arrival='{$arrival}' and departure='{$departure}'";

  if($query_run = mysqli_query($db,$res)){
      $query_num_rows = mysqli_num_rows($query_run);

      if($query_num_rows>=1){
        //$user_log = mysqli_fetch_array($query_run, MYSQLI_BOTH);
        while ($user_log = mysqli_fetch_array($query_run,MYSQLI_BOTH)) {
        $arr = $user_log['arrival'];
        $dep = $user_log['departure'];
        if($arr>$arrival && $dep<$departure){
        $_SESSION['message'] = "Date already booked";
        setcookie('validate', 1, time() +5, '/');
        }
      }
      }else{
        $validate=1;
        unset($_COOKIE['validate']);

      }

  }


}

if($validate==1){
//  if(isset($_COOKIE['go'])){
  unset($_COOKIE['validate']);
  if ( isset($_POST['arrival']) && isset($_POST['departure']) && isset($_POST['adults']) && isset($_POST['kido'])) {
       $adults = $_POST['adults'];
       $kids = $_POST['kido'];


  if($query_run = mysqli_query($db,$res)){
      $query_num_rows = mysqli_num_rows($query_run);
      if($query_num_rows==0){

        $sql = " UPDATE login SET arrival='{$arrival}',departure='{$departure}',adults='{$adults}',kids='{$kids}' where email='{$_SESSION['email']}' ";

        if(mysqli_query($db, $sql)){
            //$_SESSION['messagethanks'] = "Thank you for your Reservation,see you soon";
            $_SESSION['message'] = "Thank you for your Reservation";
        } else {
            //$_SESSION['messageerror'] = "Something went wrong with your reservation,try again later";
            $_SESSION['message'] = "Something went wrong with your reservation,try again later";
        }

      }elseif ($query_num_rows>1) {
        $_SESSION['message'] = "Date already booked";
      }

  }

  }
//}
}

mysqli_close($db);




?>
