<?php
//koneksi ke database

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//ambil data dari tabel mahasiswa / query
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

//ambil data (fetc) dari objek result
//mysqli_fetch_row(); //mengembalikan array numeric
//mysqli_fetch_assoc(); //mengembalikan array assoc
//mysqli_fetch_array(); //mengembalikan array doubel (numeric & assoc)
//mysqli_fetch_object();

// while($mhs = mysqli_fetch_assoc($result)){

// var_dump($mhs);

// }
//cek error
// $result = mysqli_query($conn, "SELECT * FROM mahasiswaa");
// if(!$result){
//     echo mysqli_error($conn);
// }
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
    <h1>Daftar Mahasiswa</h1>

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
        <?php while( $mhs = mysqli_fetch_assoc($result)) : ?>
        <tr>
            
            <td><?= $i?></td>
            <td><a href="">Ubah</a> | <a href="">hapus</a></td>
            <td><img src="img/<?= $mhs["gambar"]?>" alt="" width="50"></td>
            <td><?= $mhs["nrp"]?></td>
            <td><?= $mhs["nama"]?></td>
            <td><?= $mhs["email"]?></td>
            <td><?= $mhs["jurusan"]?></td>
        </tr>
        <?php $i++;?>
        <?php endwhile;?>

    </table>
</body>
</html>