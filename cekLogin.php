<?php

require "./koneksi.php";
$username = $_POST["username"];
$password = $_POST["password"];
$result = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' AND username='$password'");

$data = mysqli_fetch_assoc($result);

if($data){
        header("Location: Home.php");
}else{
    header("Location: Login.php");
}