<?php
$mahasiswa = [
    ["nama"=>"Hanan" , 
    "nim"=>"425965", "email"=>"hananhanafi76@Gmail.com"],
    ["nama"=>"Hanafi",
    "nim"=>123,
    "email"=>"email"]];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lat arr</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>
        <?php foreach($mahasiswa as $mhs) :?>
            <?php foreach($mhs as $m) :?>
                <li><?php echo $m;?></li>
            <?php endforeach;?>
        <?php endforeach;?>
    </ul>
    
</body>
</html>