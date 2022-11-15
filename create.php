<?php

include("config.php");

if(isset($_POST['daftar'])){

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    $sql = "INSERT INTO calon_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: list-siswa.php?status=sukses');
    } else {
        header('Location: list-siswa.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>