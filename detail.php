<?php
require "koneksi.php";
$id = $_GET["id"];
$result = mysqli_query($conn, "SELECT * FROM daftar_cpns");
$data = mysqli_fetch_assoc($result);
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Profile</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
<div class="head">
        <h1>Profile</h1>
    </div>
    <div class="container">
        <div class="img">
        <ion-icon name="person-circle"></ion-icon>
        </div>

            <a href="Home.php">Home</a>
            <a href="Pendaftaran.php">pendaftaran</a>
            <a href="admin.php">data</a>
            <a href="About.php">about us</a>
    </div>

    <div class="container1">
        <table class="table caption-top">
            <tbody>
                <tr>
                    <td>NIK:</td>
                    <td><?= $data["nik"] ?></td>
                </tr>
                <tr>
                    <td>Nama: </td>
                    <td><?= $data["nama"] ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin:</td>
                    <td><?= $data["jk"] ?></td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir:</td>
                    <td><?= $data["ttl"] ?></td>
                </tr>
                <tr>
                    <td>No HP:</td>
                    <td><?= $data["nohp"] ?></td>
                </tr>
                <tr>
                    <td>Alamat:</td>
                    <td><?= $data["alamat"] ?></td>
                </tr>
                
            </tbody>
        </table>
    </div>
    



    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"><script>
</body>
</html>