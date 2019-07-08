<?php
session_start();

if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

//koneksi ke database
require 'functions.php';

//pagination
$jumlahDataPerHalaman = 2;
$result = mysqli_query($conn,"SELECT * FROM mahasiswa");
$jumlahData = mysqli_num_rows($result);
$jumlahHalaman = ceil($jumlahData/$jumlahDataPerHalaman);   

$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;

$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

if(isset($_POST["cari"])){
    $mahasiswa = cari($_POST["keyword"]);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Admin</title>
</head>
<body>
    <button><a href="logout.php">Logout</a></button>

    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah data mahasiswa</a>
    <br>
    <br>
    <form action="" method="post">
        <input type="text" id="keyword" name="keyword" size="50" autofocus placeholder="Masukan keyword pencarian..." autocomplete="off">
        <button type="submit" name="cari">Cari</button>
    </form>

    <!-- navigasi pagigation -->
    <br>

    <?php if($halamanAktif > 1) : ?>
    <a href="?halaman=<?= $halamanAktif-1 ?>">&laquo</a>
    <?php endif;?>
    <?php for($i=1;$i <= $jumlahHalaman;$i++) : ?>
        <?php if($i == $halamanAktif) : ?>
        <a style="font-weight:bold;color:red;" href="?halaman=<?= $i ?> "><?= $i ?></a>
        <?php else : ?>
        <a href="?halaman=<?= $i ?> "><?= $i ?></a>
        <?php endif;?>
    <?php endfor; ?>
    <?php if($halamanAktif < $jumlahHalaman) : ?>
    <a href="?halaman=<?= $halamanAktif+1 ?>">&raquo</a>
    <?php endif;?>
    <br>


    <br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
            
        </tr>
        <?php $i = 1;?>
        <?php foreach($mahasiswa as $mhs) : ?>
        <tr>
            
            <td><?= $i?></td>
            <td><a href="ubah.php?id=<?= $mhs["id"]?>">Ubah</a> | 
            <a href="hapus.php?id=<?= $mhs["id"];?>" onclick="return confirm('yakin?');">hapus</a></td>
            <td><img src="img/<?= $mhs["gambar"]?>" alt="" width="50"></td>
            <td><?= $mhs["nrp"];?></td>
            <td><?= $mhs["nama"];?></td>
            <td><?= $mhs["email"];?></td>
            <td><?= $mhs["jurusan"];?></td>
        </tr>
        <?php $i++;?>
        <?php endforeach;?>

    </table>
</body>
</html>