<?php
    require "koneksi.php";

    $result = mysqli_query($conn, "SELECT * FROM daftar_cpns;");
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>index</title>
    <link rel="stylesheet" href="admin.css">
</head>
<body>
    <div class="head">
        <h1>Data Peserta</h1>
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
    <div class="tbl">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NAMA</th>
      <th scope="col">NIK</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $no = 1; 
      foreach($rows as  $row): ?>
    <tr>
      <th scope="row"><?= $no++ ?></th>
      <td><?= $row["nama"] ?></td>
      <td><?= $row["nik"] ?></td>
      <td>
        <a href="editform.php?id=<?= $row["nik"] ?>">Edit</a>
        <a href="delete.php?id=<?= $row["nik"] ?>">Delete</a>
        <a href="detail.php?id=<?= $row["nik"] ?>">Detail</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
    </div>    
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>