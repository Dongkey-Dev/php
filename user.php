<?php

$db_host = "localhost"; 

$db_user = "admin"; 

$db_passwd = "dong2307";

$db_name = "user"; 



// MySQL - DB ����.

$conn = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

if (mysqli_connect_errno()){

echo "MySQL ���� ����: " . mysqli_connect_error();

exit;

} else {

echo "DB : \"$db_name\"�� ���� ����.<br/>";

}



// table �����

$sql = "CREATE TABLE Person 

(

PID bigint(20) unsigned not null auto_increment,

Name CHAR(255),

Address CHAR(255),

Age INT,

PRIMARY KEY(PID)

) charset=utf8";



if (mysqli_query($conn,$sql)){

echo "���������� ���̺��� ��������ϴ�.<br/>";

} else {

echo "���̺� ���� ���� : " . mysqli_error($conn);

exit;

}

?> 
