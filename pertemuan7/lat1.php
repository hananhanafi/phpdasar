<?php
    //global variabel

    // $x =10;

    // function tampilX(){
    //     global $x;
    //     echo $x;
    // }

    // tampilX();
    // echo "<br>";

    //variabel superglobal
    //variabel global milik php
    //merupakan array asociative
    //$_GET
    //$_POST
    // $_REQUEST
    // $_SESSION
    // $_COOKIE
    // $_SERVER
    // $_ENV

    // $_GET["nama"] = "Hanan Hanafi";
    // $_GET["nim"] = "425965";

    // var_dump($_GET);

    $mahasiswa = [
        ["nama"=>"Hanan" , 
        "nim"=>"425965", 
        "email"=>"hananhanafi76@Gmail.com"
        ],
        ["nama"=>"Hanafi",
        "nim"=>123,
        "email"=>"email"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <ul>
    <?php foreach($mahasiswa as $mhs) : ?>
        <ul>
            <li>
                <a href="lat2.php?nama=<?php echo $mhs["nama"];?>&nim=<?php echo $mhs["nim"];?>&email=<?php echo $mhs["email"]?>">
                <?= $mhs["nama"] ?></a>
            </li>
        </ul>
    <?php endforeach;?>

    </ul>
    
</body>
</html>









