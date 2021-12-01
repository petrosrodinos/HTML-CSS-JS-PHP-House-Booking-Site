<?php
include 'connect.php';
//error_reporting(0);

$errorscomment = array();
$errorscomment1 = array();
//$arr_data = array();
//$myFile = "../comments.json";



// if (isset($_POST['commbtn']) ){
  if(isset($_POST['fullname']) && isset($_POST['comment'])){
     $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
     $comment = mysqli_real_escape_string($db, $_POST['comment']);
     $date = date("d/m/Y");



  // if( empty($fullname) || empty($comment) ){
  //      array_push($errorscomment, "Please fill-out all fields");
  //
  //   } if( !preg_match("/^[a-zA-Z ]*$/",$comment) ){
  //        array_push($errorscomment, "Only letters/numbers are allowed");
  //
  //      }
 // if (count($errorscomment) == 0) {
 //
 //    try{
 //           $formdata = array(
 //    	      'fullname'=> $fullname,
 //    	      'comment'=> $comment,
 //    	      'date'=>$date
 //            );
 //
 //
 //    	   $jsondata = file_get_contents($myFile);
 //         $arr_data = json_decode($jsondata, true);
 //         if ($arr_data === !null) {
 //              array_push($arr_data,$formdata);
 //         	   $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
 //
 //         	   if(file_put_contents($myFile, $jsondata)) {
 //         	        array_push($errorscomment, "Comment created successfully");
 //         	    }
 //         	   else{
 //         	        array_push($errorscomment, "Error creating your comment");
 //                 }
 //          }else{
 //            $arr_data = [];
 //            array_push($errorscomment, "emptyyy");
 //
 //          }
 //       }catch (Exception $e) {
 //              //  echo 'Caught exception: ',  $e->getMessage(), "\n";
 //                array_push($errorscomment, $e->getMessage());
 //       }
 //     }
 //
 //
 //
 //
 //   try{
 //      $data = file_get_contents ("../comments.json");
 //              $json = json_decode($data, true);
 //              foreach ($json as $key => $value) {
 //                  if (!is_array($value)) {
 //                      echo $key . '=>' . $value . '<br/>';
 //                  } else {
 //                      foreach ($value as $key => $val) {
 //                          echo $key . '=>' . $val . '<br/>';
 //                      }
 //                  }
 //              }
 //      }catch (Exception $e) {
 //             //  echo 'Caught exception: ',  $e->getMessage(), "\n";
 //               array_push($errorscomment, $e->getMessage());
 //      }



   $sql = "INSERT INTO comments (fullname,comment,date)
   VALUES ('{$fullname}', '{$comment}', '{$date}')";
   $_SESSION['comm'] = 'yes';

   if ($db->query($sql) === FALSE) {
   array_push($errorscomment, "Error creating your comment");
 }else{
   header('Location: ../links/announcements.php');
  unset($_POST['fullname']);
  unset($_POST['comment']);
 }

}



$query = "SELECT * FROM `comments`";

if($query_run = mysqli_query($db,$query)){
    $query_num_rows = mysqli_num_rows($query_run);
    if($query_num_rows==0){
      array_push($errorscomment1,"No comments available");
    }else{
      $result = $db->query($query);
       $_SESSION['fullname'] = "name";

    }


}






?>
