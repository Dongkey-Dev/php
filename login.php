<!DOCTYPE html>
<html>
<body>
echo "<script>alert($id);</script>";
</body>
</html>

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
        $response["name"] = $name;
        $response["pswd"] = $pswd;
    }
 
    echo json_encode($response);
?>
