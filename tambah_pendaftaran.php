<?php

require "koneksi.php";

$nik = $_POST["nik"];
$nama = $_POST["nama"];
$jk = $_POST["jk"];
$ttl = $_POST["ttl"];
$nohp = $_POST["nohp"];
$alamat = $_POST["alamat"];

mysqli_query($conn,"INSERT INTO daftar_cpns VALUES('$nik','$nama', '$jk', '$ttl', '$nohp', '$alamat');");

if(mysqli_affected_rows($conn) > 0){
    echo "<script>
    alert('data berhasil di tambahkan');
    document.location.href = 'Admin.php';
    </script>";
}else{
    echo "<script>
    alert('data gagal di tambahkan');
    document.location.href = 'Admin.php';
    </script>";
}