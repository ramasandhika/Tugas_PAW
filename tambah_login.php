<?php

require "koneksi.php";

$username = $_POST["username"];
$password = $_POST["password"];


mysqli_query($conn,"INSERT INTO user VALUES('','$username','$password');");

if(mysqli_affected_rows($conn) > 0){
    echo "<script>
    alert('data berhasil di tambahkan');
    document.location.href = 'Login.php';
    </script>";
}else{
    echo "<script>
    alert('data gagal di tambahkan');
    document.location.href = 'Login.php';
    </script>";
}