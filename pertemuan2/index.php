<?php
//sintaks php

//standar output
//echo
//print_r
//var_dump

// echo "Hanan Hanafi";//print

// print_r(" Hanafi ");

// var_dump(" Hanafi ");

//php di dalaam html
//html di dalam php
$nama = "Hanan Hanafi";

//variabel
$x = 10;
$y = 20;
$namadepan = "Hamam";
$namabelakang = "Hanafi";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tes php</title>
</head>
<body>
    <h1>Hello <?php echo $nama;?></h1>
    <p><?php echo"Ini paragraf";?></p>    
    
    <?php echo"<h1>Hello</h1>";?>
    <?php echo $x+$y;?>

    <!-- concat -->
    <?php echo $namadepan.$namabelakang?>
</body>
</html>
