<?php
header("Content-Type: text/html; charset=UTF-8");
$conn = new mysqli("localhost","dongkeydev","Dong230723!","dongkeydev");
$sql = $_POST['query'];
$res = $conn->query($sql);
?>
