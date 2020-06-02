<?php
 header("Content-Type: text/html; charset=UTF-8");
 $conn = new mysqli("localhost", "dongkeydev", "Dong230723!", "dongkeydev");
 mysqli_query($conn, 'SET NAMES utf8');
 // check connection
// if ($conn->connect_error){
//  die('connection failed: ' . $conn->connect_error);
//} else {
  $id = $_POST['id'];
 $name = $_POST['name'];
 $pswd = $_POST['pswd'];
 $sql = "insert into test_user(id, name, pswd) values('$id', '$name', '$pswd');";
  $res = $conn->query($sql);
//  $res=mysqli_query($conn,$query);
// if (mysqli_num_rows($res)>0){
//  echo json_encode($result['id']);
//} else {
//  echo json_encode('no results');
//}
 echo "<script>location.href='login.php';</script>";
//}
?> 
