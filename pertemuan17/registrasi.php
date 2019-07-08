<?php

    require 'functions.php';
    
    if(isset($_POST["signup"])){
        if(signUp($_POST) > 0){
            echo "<script>
                alert('berhasil sign up');
                </script>";
        }else{
            echo mysqli_error($conn);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIGN UP</title>
    <style>
        label{
            display: block;
        }
    </style>
</head>
<body>
    <h1>Sign Up</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">username :</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">password :</label>
                <input type="password" name="password" id="password">
            </li>
            <li>
                <label for="password2">Konfirmasi password :</label>
                <input type="password" name="password2" id="password2">
            </li>
            
            <li>
                <button type="submit" name="signup">Sign Up</button>
            </li>
        </ul>
    </form>
</body>
</html>