<?php
    if(isset($_POST["submit"])){
        if($_POST["username"]=="admin" && $_POST["password"]==123){
            header("Location: admin.php");
            exit;
        }
        else{
            $error=true;
        }
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
    <?php if(isset($error)) :?>
    <p style="color:red;">Username/password salah!</p>
    <?php endif;?>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username  :</label>
                <input type="text" id="username" name="username">
            </li>
            <li>
                <label for="password">Password  :</label>
                <input type="password" id="password" name="password">    
            </li>
            <li>
                <button type="submit" name="submit">Login</button> 
            </li>            
        </ul>
        
        
    </form>
</body>
</html>