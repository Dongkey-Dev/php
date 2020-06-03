<?php
 $conn = new mysqli("localhost","dongkeydev","Dong230723!","dongkeydev");
 $sql = "insert into test_user(id, name, pswd) VALUES('test4', 'test4', 'test4');";
 mysqli_query($conn,$sql);
?>
