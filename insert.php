<?php

//cek dari tombol submit
if (isset($_POST["submit"])){
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $id_jurusan = $_POST["id_jurusan"];
    $tmpt_lahir = $_POST["tmpt_lahir"];
    $tgl_lahir = $_POST["tgl_lahir"];
    $gender = $_POST["gender"];
    $alamat = $_POST["alamat"];

    //buat koneksi dengan MySQL
    // cek koneksi lanjut buat query insert

    // buat koneksi dengan MySQL
    $con = mysqli_connect("localhost", "root", "", "fakultas");

    // cek koneksi dengan MySQL
    if (mysqli_connect_errno()){
        echo "Koneksi gagal".mysqli_connect_error();
    }else{
        echo "Koneksi berhasil";
    }

    // buat query insert dan jalankan
    $sql = "INSERT INTO mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat)
            VALUES ($id_jurusan, '$nim', '$nama', '$gender', '$tmpt_lahir', '$tgl_lahir', '$alamat')";

    if (mysqli_query($con,$sql)){
        echo "Data berhasil ditambah";
    }else{
        echo "Ada error".mysqli_error();
    }

    mysqli_close($con);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
    <form action="insert.php" method="post">
        NIM: <input type="text" name="nim"><br>
        Nama: <input type="text" name="nama"><br>
        ID Jurusan: <input type="number" name="id_jurusan"><br>
        Jenis Kelamin: <input type="text" name="gender"><br>
        Tempat Lahir: <input type="text" name="tmpt_lahir"><br>
        Tanggal Lahir (yyy-mm-dd): <input type="text" name="tgl_lahir"><br>
        Alamat: <input type="text" name="alamat"><br>
        <button type="submit" name="submit">Tambah Data</button>
    </form>
</body>
</html>