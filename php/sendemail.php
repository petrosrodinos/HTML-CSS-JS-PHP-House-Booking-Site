<?php
//error_reporting(0);
$errorsemail = array();
if ('POST' === $_SERVER['REQUEST_METHOD']) {
if (isset($_POST['send'])) {
    $fullname = $_POST['fullname'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $text = $_POST['text'];


if( (isset($fullname) && isset($subject) && isset($email) && isset($text) ) && ( !empty($fullname) &&  !empty($subject) && !empty($email) && !empty($text) ) ){

        if( !preg_match("/^[a-zA-Z ]*$/",$fullname) || !preg_match("/^[a-zA-Z ]*$/",$subject) || !preg_match("/^[a-zA-Z ]*$/",$text) ){
          array_push($errorsemail, "Only letters and white space allowed");
        }if( !filter_var($email, FILTER_VALIDATE_EMAIL) ){
          array_push($errorsemail, "Thats not an Email address");
        }

      }else{
        array_push($errorsemail, "Please fill-out all fields");

      }




      // if (count($errorsemail) == 0) {

      //   $to = "petros.rodinos@yahoo.com";
      //   $txt = wordwrap($text,70);
      //   $headers = "From {$email} 'Subject: '  {$text}";
      //
      //   if(mail($to,$subject,$txt,$headers)){
      //   array_push($errorsemail, "Email Send,We will reply soon");
      //   echo "Email Send Successfully,We will reply soon";
      //
      //   }
      //
    //  }

}

}

?>
