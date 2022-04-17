<?php

require "koneksi.php";
$nik = $_POST["nik"];
$nama = $_POST["nama"];
$jk = $_POST["jk"];
$ttl = $_POST["ttl"];
$nohp = $_POST["nohp"];
$alamat = $_POST["alamat"];


mysqli_query($conn, "UPDATE daftar_cpns SET
                            nik = '$nik',
                            nama = '$nama',
                            jk = '$jk',
                            ttl = '$ttl',
                            nohp = '$nohp',
                            alamat = '$alamat'
                            WHERE nik = '$nik'");


if(mysqli_affected_rows($conn) > 0){
    echo "<script>
    alert('data berhasil di edit');
    document.location.href = 'Admin.php';
    </script>";
}else{
    echo "<script>
    alert('data gagal di edit');
    document.location.href = 'Admin.php';
    </script>";
}