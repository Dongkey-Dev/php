<!DOCTYPE html>
<html>
<body>
<form method="post "action="/join.php">
Id  : <input type='text'></br>
Pswd : <input type='text'> </br>
Login<input type='submit', href=login.php></br>
<?php
    $con = mysqli_connect("localhost", "dongkeydev", "Dong230723!", "dongkeydev");
    mysqli_query($con,'SET NAMES utf8');
 
    $PID = $_POST["PID"];
    $UserPassword = $_POST["UserPassword"];
    
    $statement = mysqli_prepare($con, "SELECT * FROM article WHERE PID = ? AND UserPassword = ?");
    mysqli_stmt_bind_param($statement, "ss", $id, $pswd);
    mysqli_stmt_execute($statement);
 
 
    mysqli_stmt_store_result($statement);
    mysqli_stmt_bind_result($statement, $id, $name, $pswd);
 
    $response = array();
    $response["success"] = true;
 
    while(mysqli_stmt_fetch($statement)) {
        $response["success"] = true;
        $response["id"] = $id;
        $response["email"] = $email;
        $response["pswd"] = $pswd;
    }
 
    echo json_encode($response);
?>
</body>
</html>
