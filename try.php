<?php
 $db_host = "localhost";
 $db_user = "dongkeydev";
 $db_passwd = "Dong230723!"
 $db_name = "dongkeydev";
 $conn = mysqli_connect($db_host, $db_user, $db_passwd, $db_name);

 if (mysqli_connect_errno($conn)){
  echo "db connect fail : " . mysqli_connect_error();
 } else {
  echo "db connect success";
 }
?>
