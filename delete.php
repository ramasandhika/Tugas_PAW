<?php

require "koneksi.php";
$id = $_GET["id"];

mysqli_query($conn,"DELETE FROM daftar_cpns WHERE nik='$id';");

if(mysqli_affected_rows($conn) > 0){
    echo "<script>
    alert('data berhasil di hapus');
    document.location.href = 'Admin.php';
    </script>";
}else{
    echo "<script>
    alert('data gagal di hapus');
    document.location.href = 'Admin.php';
    </script>";
}