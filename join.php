<?php
 header("Content-Type: text/html; charset=UTF-8");
 $conn = new mysqli("localhost", "dongkeydev", "Dong230723!", "dongkeydev");
 mysqli_query($conn, 'SET NAMES utf8');
// check connection
 if ($conn->connect_error){
 die('connection failed: ' . $conn->connect_error);
} else {
  $id = $_POST['id'];
 $email = $_POST['email'];
 $pswd = $_POST['pswd'];
 $result = mysqli_query($conn, "SHOW tables LIKE 'test_user';");
 echo mysqli_num_rows($result);
 if(mysqli_num_rows($result)==0){
 echo "<script>alert('table isn't exist.');</script>";
 $sql = "Create table test_user(
		 id CHARACTER(55) PRIMARY KEY,
		 email CHARACTER(55),
		 pswd CHARACTER(55));";
 echo "<script>alert('table test_user created.');</script>";
 echo "<script>location.href='index.html';</script>";
} else {
 $sql = "insert into test_user(id, email, pswd) values('$id', '$email', '$pswd');";
//  $res = $conn->query($sql);
  mysqli_query($conn,"insert into test_user(id,email,pswd)values('$id','$email','$pswd');");
 $res = mysqli_query($conn,"Select id from test_user where id = '$id';");
 $row = mysqli_fetch_array($res);
 echo "res :"; print_r( $row ); echo "| id : $id </br>";
 if ($row[0]==$id){
  echo "<script>alert('Insert query activated');</script>";
  echo "<script>location.href='index.html';</script>";
} else {
  echo "<script>alert('Insert query deactivated');</script>";
  echo "<script>location.href='index.html';</script>";
}
}
}
?> 
