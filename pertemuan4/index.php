<?php
    //built-in function
    // echo date("l, d M Y");
    
    //unix timestamp/epoch time
    //detik yang sudah berlalu sejak 1 Januari 1979
    // echo time();

    // echo date("l, d-M-Y", time()-60*60*24*100);

    //mktime membuat sendiri detik
    //mktime(jam,menit,detik,bulan,tanggal,tahun)
    // echo date("l",mktime(0,0,0,12,21,2000));

    //strtotime
    // echo strtotime("21 dec 2000");


    //user defined function
    //fungsinya harus didefinisikan dulu

    function salam($waktu = "datang",$nama = "Admin"){
        return "Selamat $waktu, $nama";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tes fungctuin</title>
</head>
<body>
    <?php echo salam("Hanan")?>
</body>
</html>