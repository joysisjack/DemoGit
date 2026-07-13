<?php
   // Java - Scanner
   // C++ - cin.
   // C Language - scanf
    $user = $_GET['username'];
    $pass = $_GET['password'];

    if($user == "admin" && $pass == "123"){
        echo "Login Success!";
    }else{
        echo "Login Failed!";
    }
   
   for($i = 0 ; $i < 10; $i++){
    echo($i);
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <label for="username">Username</label>
        <input type="text" name="username">
        <label for="password">Password</label>
        <input type="password" name= "password">
        <input type="submit">
    </form>
</body>
</html>
