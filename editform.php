<?php

require "koneksi.php";
$id = $_GET["id"];
$result = mysqli_query($conn, "SELECT * FROM daftar_cpns");
$data = mysqli_fetch_assoc($result)

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Pendaftaran</title>
    <link rel="stylesheet" href="pendaftaran.css">
</head>
<body>
<div class="head">
        <h1>Pendaftaran CPNS</h1>
    </div>
    <div class="container">
        <div class="img">
        <ion-icon name="person-circle"></ion-icon>
        </div>

            <a href="Home.php">Home</a>
            <a href="Profile.php">profile</a>
            <a href="Pendaftaran.php">pendaftaran</a>
            <a href="About.php">about us</a>
    </div>

    <div class="container1">
        <form action="edit.php" method="post">
            <table class="table caption-top">
                <tbody>
                    <tr>
                        <td>NIK: </td>
                        <td>
                            <input name="nik" type="text" value=<?= $data["nik"] ?>>
                        </td>
                    </tr>
                    <tr>
                        <td>Nama: </td>
                        <td>
                            <input name="nama" type="text" value=<?= $data["nama"] ?>>
                        </td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin:</td>
                        <td>
                            <input name="jk" type="text" value=<?= $data["jk"] ?>>
                        </td>
                    </tr>
                    <tr>
                        <td>Tempat, Tanggal Lahir:</td>
                        <td>
                            <input name="ttl" type="text" value=<?= $data["ttl"] ?>>
                        </td>
                    </tr>
                    <tr>
                        <td>No HP:</td>
                        <td>
                            <input name="nohp" type="text" value=<?= $data["nohp"] ?>>
                        </td>
                    </tr>
                    <tr>
                        <td>Alamat:</td>
                        <td>
                            <input name="alamat" type="text" value=<?= $data["alamat"] ?>>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        <button type="submit" class="edit">Save</button>
        </form>
    </div> 
    



    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"><script>
</body>
</html>