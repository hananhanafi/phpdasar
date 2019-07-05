<!-- <?php

for($i = 0; $i < 5; $i++){
   echo "Hello World! <br>"; 
}

$i = 0;
while($i < 5){
    echo "Hello World2! <br>";
    $i++;
}

do{
    echo "Hello World3! <br>";
}while($i<5);

?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tes struktur kendali</title>
    <style>
        .warna-baris{
            background-color: red;
        }
    </style>
</head>
<body>
    <table border="1" cellpaddin="10" cellspacing="0">

       <!-- <?php
        for($i = 0; $i < 3; $i++){
            echo "<tr>";
            for($j = 1;$j <= 5;$j++){
                echo "<td>$i,$j</td>";
            }
            echo "</tr>";
        }

        ?> -->

        <?php for($i = 1; $i <= 5; $i++) : ?>
            <?php if($i % 2 == 1) : ?>
                <tr class="warna-baris">
            <?php else : ?>
                <tr>
            <?php endif;?>
                <?php for($j = 1;$j <= 5;$j++) : ?>
                <td><?= "$i,$j"?></td>
                <?php endfor;?>
            </tr>
        <?php endfor; ?>
    </table>
    
    <?php
    $x = 10;

    if($x>10){
        echo "Benar";
    }else{
        echo "salah";
    }
    ?>


</body>
</html>







