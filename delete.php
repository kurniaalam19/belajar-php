<?php

//cek dari tombol submit
if (isset($_GET["id"])){
    $id = $_GET["id"];

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

    // buat query delete dan jalankan
    $sql = "DELETE FROM mahasiswa WHERE id=$id";

    // jalankan query
    if (mysqli_query($con,$sql)){
        echo "Data berhasil dihapus";
    }else{
        echo "Ada error".mysqli_error();
    }

    mysqli_close($con);
}

?>