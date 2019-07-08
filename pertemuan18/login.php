<?php
    session_start();
    require 'functions.php';

    // cek cookie
    if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
        $id = $_COOKIE['id'];   
        $key = $_COOKIE['key'];

        // ambil username berdasarkan id
        $result = mysqli_query($conn, "SELECT username FROM users WHERE id = $id");
        $row = mysqli_fetch_assoc($result);

        //cek cookie key dengan username
        if($key === $row['username']){
            $_SESSION['login'] = true;
        }
    }

    if(isset($_SESSION['login'])){
        header("Location: index.php");
        exit;
    }

    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $cekuser = mysqli_query($conn, "SELECT * FROM users WHERE username ='$username'");

        if(mysqli_num_rows($cekuser) ===1){
            $row = mysqli_fetch_assoc($cekuser);
            
            if(password_verify($password, $row["password"])){

                $_SESSION['login'] = true;

                //cek rememberme
                if(isset($_POST["rememberme"])){
                    //buat cookie   
                    setcookie('id',$row['id'],time()+60);
                    setcookie('key', $row['username'],time()+60);
                }

                header("Location: index.php");
                exit;
            }
        }
        $error = true;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    
    <?php if(isset($error)) : ?>
        <p style="color:red;">Username/Password salah!</p>
        <a href="" class=""></a>
    <?php endif;?>
    
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username :</label>
                <input type="text" name="username" id="password">
            </li>
            <li>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <input type="checkbox" name="rememberme" id="rememberme">
                <label for="rememberme">Ingat Saya</label>
            </li>
            <li>
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
        
    </form>
</body>
</html>