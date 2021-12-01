<?php
//error_reporting(0);
$db = mysqli_connect('localhost', 'tp5006', 'petros123');
mysqli_select_db($db,'tp5006');

if ($db->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
