<?php
 $conn = new mysqli("localhost","dongkeydev","Dong230723!","dongkeydev");
 $sql = "create TABLE test_user(id CHARACTER(55) not null PRIMARY key, pswd CHARACTER(55), name CHARACTER(55))";
 mysqli_query($conn, $sql);
?>
