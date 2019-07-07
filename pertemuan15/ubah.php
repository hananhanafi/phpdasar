<?php
    require 'functions.php';
    
    //ambil data di url
    $id = $_GET["id"];

    $mhs = query("SELECT * FROM mahasiswa where id = $id")[0];
    // var_dump($mhs[0]["nrp"]);

    if(isset($_POST["submit"])){
        if(ubah($_POST,$id) > 0){ 
            echo "<script>
                alert('Data berhasil diubah');
                document.location.href = 'index.php';
                </script>
            ";
        }else{
            echo "<script>
                alert('Data gagal diubah');
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
    <title>Ubah data mahasiswa</title>
</head>
<body>
    <h1>Ubah data mahasiswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>   
            <li>
                <label for="nrp">NIM :</label>
                <input type="text" id="nrp" name="nrp"
                value="<?= $mhs["nrp"];?>">
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" id="nama" value="<?= $mhs["nama"];?>" name="nama">
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" id="email" name="email" value="<?= $mhs["email"];?>">
            </li>
            <li>
                <label for="jurusan">Jurusan :</label>
                <input type="text" id="jurusan" name="jurusan" value="<?= $mhs["jurusan"];?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <br>
                <img src="img/<?= $mhs["gambar"];?>" alt="">
                <br>
                <input type="file" id="gambar" name="gambar">
                <input type="hidden" name="gambarlama" value="<?= $mhs["gambar"];?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah</button>
            </li>
        </ul>
        
    </form>
</body>
</html>