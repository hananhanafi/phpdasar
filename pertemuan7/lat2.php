<?php
//cek jiga tidak ada data
if(!isset($_GET["nama"]) || 
    !isset($_GET["nim"]) ||
    !isset($_GET["email"])
    ){
    //redirect
    header("Location: lat1.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h1>Detail Mahasiswa</h1>
    <ul>
        <li>Nama : <?php echo $_GET["nama"];?></li>
        <li>NIM : <?php echo $_GET["nim"];?></li>
        <li>Email : <?php echo $_GET["email"];?></li>
    </ul>
    

</body>
</html>