<?php
    //array

    //cara lama
    $hari = array("senin","selasa","rabu");

    //carabaru
    $bulan = ["Jan","Feb","Maret"];
    //elemen boleh memiliki nilai yang berbeda
    $arr1 = [123,"Tulisan", false];

    echo $arr1[0];

    //menambah isi array

    $hari[] = "Kamis";

    var_dump($hari);

    echo "<br>";

    $angka = [1,2,3,4,5,6,7,8,9];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tes arr</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <?php for($i = 0;$i < count($angka);$i++) {?>
    <div class="kotak"><?php echo $angka[$i]?></div>
    <?php } ?>

    <div class="clear"></div>

    <?php foreach($angka as $ank){?>
    <div class="kotak"><?php echo $ank?></div>
    <?php }?>

    <div class="clear"></div>
    
    <?php foreach($angka as $ank) : ?>
    <div class="kotak"><?php echo $ank?></div>
    <?php endforeach;?>
</body>
</html>