<?php
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = []; 
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row; 
    }
    return $rows;
}

function tambah($data){
    global $conn;

    //ambil data
    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    //upload gambar dulu
    $gambar = upload();
    // kalau gagal
    if(!$gambar){
        return false;
    }

    $query = "INSERT INTO mahasiswa values
    ('', '$nama', '$nrp', '$email', '$jurusan', '$gambar')
    ";
    $query = mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload(){
    $namaFile = $_FILES["gambar"]["name"];
    $ukuranFile = $_FILES["gambar"]["size"];
    $errorFile = $_FILES["gambar"]["error"];
    $tmpName = $_FILES["gambar"]["tmp_name"];
    
    if($errorFile === 4){
        echo "<script>
                alert('Upload gambar terlebih dahulu');
            </script>";
        return false;
    }

    //cek validasi upload gambar
    $ekstensiGambarValid = ['jpg','jpeg','png'];
    $ekstensi = explode('.',$namaFile);
    $ekstensi = strtolower(end($ekstensi));
    if(!in_array($ekstensi,$ekstensiGambarValid)){
        echo "<script>
            alert('yang anda upload bukan gambar!');
            </script>";
        return false;
    };

    //cek jika ukuran lebih
    if($ukuranFile > 1000000000){
        echo "<script>
            alert('ukuran gambar terlalu besar');
            </script>";
        return false;
    }

    //generate nama baru file agar tidak sama dengan yang diupload
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensi;
    
    move_uploaded_file($tmpName,'img/'  . $namaFileBaru);

    return $namaFileBaru;

}

function hapus($id){
    global $conn;
    $query = mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data,$id){
    global $conn;

    $nrp = htmlspecialchars($data["nrp"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    
    if($_FILES["gambar"]["error"]===4){
        $gambar = $data["gambarlama"];
    }else{
        $gambar = upload();
    }

    $query = "UPDATE mahasiswa SET
                nrp = '$nrp',
                nama = '$nama',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
                WHERE id = '$id'";
    $query = mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword){
    $query ="SELECT * FROM mahasiswa where nama LIKE'$keyword%' OR nrp = '$keyword'";
    return query($query);
}

function signUp($data){
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $password2 = mysqli_real_escape_string($conn,$data["password2"]);

    //cek username sudah ada belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
            alert('username sudah terdaftar');
            </script>";
        return false;
    }

    //konfirmasi password
    if($password !== $password2){
        echo "<script>
            alert('Password tidak sama!');
            </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    //tambahkan user baru
    mysqli_query($conn,"INSERT INTO users VALUES('','$username','$password')");

    return mysqli_affected_rows($conn);


}



?>