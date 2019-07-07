<?php
    require 'functions.php';

    if(isset($_POST["submit"])){
        //cek apakah data berhasil ditambahkan atau tidak
        if(tambah($_POST) > 0){
            $add = true; 
            echo "<script>
                alert('Data berhasil ditambahkan');
                document.location.href = 'index.php';
                </script>
            ";
        }else{
            echo "<script>
                alert('Data gagal ditambahkan');
                document.location.href = 'index.php';
                </script>
            ";
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>

    <form action="" method="post">
        <ul>   
            <li>
                <label for="nrp">NIM :</label>
                <input type="text" id="nrp" name="nrp">
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" id="nama" name="nama">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" id="email" name="email">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" id="jurusan" name="jurusan">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" id="gambar" name="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>
        
    </form>
</body>
</html>