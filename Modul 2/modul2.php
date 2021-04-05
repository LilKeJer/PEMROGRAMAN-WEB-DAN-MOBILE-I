<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul 2</title>
</head>
<body>
<form action="" method="post" name="Login_Form">
         <h3>Login</h3>
         <p> Username :  <input name="username" type="text" placeholder="Username"></p>  
         <p>Password : <input name="password" type="text" placeholder="Password" ></p> 
         <p><input name="Submit" type="submit" value="Login"></p> 
    </form>
</body>
</html>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $username = $_REQUEST["username"];
        $password = $_REQUEST["password"];
        $user = strlen($username);
        $pass = strlen($password);
        $a = false;

        if($user>7){
            echo "<script>alert('Username Lebih dari 7');</script>";
            $a = true;
        }
        if (!preg_match("/[A-Z]/", $password) ) {
            echo "<script>alert('Password Harus Ada Huruf Kapital');</script>";
            $a = true;
        }
        if (!preg_match("/[a-z]/", $password)) {
            echo "<script>alert('Password Harus Ada Huruf Kecil');</script>";
            $a = true;
        }
        
         if (!preg_match("/[0-9]/", $password)) {
            echo "<script>alert('Password Harus Ada Angka');</script>";
            $a = true;
        }
        if (!preg_match("/[^a-zA-Z\d]/", $password)) {
            echo "<script>alert('Password Harus Ada Special character');</script>";
            $a = true;
        }
    
        if($pass<10){
            echo "<script>alert('Password kurang dari 10');</script>";
            $a = true;
        }
        if( $a == false ){
            echo "<script>alert('Login Berhasil');</script>";
        }
    }
    
?>