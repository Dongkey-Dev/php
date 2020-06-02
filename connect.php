<?php
$db_host = "localhost";
$db_user = "admin";
$db_passwd = "dong2307";
$db_name = "user";

// MySQL - DB 접속
$conn=mysqli_conenct($db_host,$db_user,$db_passwd,$db_name);
if(mysqli_connect_errno()){
 echo "MySQL connect Error : ". mysqli_connect_error();
 exit;
} else {
 echo "DB : \"$db_name\" connect success. <br />";
}
?>
