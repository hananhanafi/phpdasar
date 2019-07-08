<?php
    session_start();

if(isset($_SESSION["login"])){
    header("Location: index.php");
    exit;
}

    require 'functions.php';


    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $cekuser = mysqli_query($conn, "SELECT * FROM users WHERE username ='$username'");

        if(mysqli_num_rows($cekuser) ===1){
            $row = mysqli_fetch_assoc($cekuser);
            
            if(password_verify($password, $row["password"])){

                //set session
                $_SESSION["login"] = true;

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
                <button type="submit" name="login">Login</button>
            </li>
        </ul>
        
    </form>
</body>
</html>