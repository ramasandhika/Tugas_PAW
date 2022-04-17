<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="registrasi.css">
    <title>Registrasi</title>

</head>
<body style="background-color: grey;">
	<div class="container">
		<h1>Registrasi</h1>
	</div>

	
  <div class="container1">
	  <form action="tambah_login.php" method="post">
      <div class="mb-3" style="padding-top: 10px;">
        <label style="font-weight: bold; font-size: 20px;" for="" class="form-label">Username</label>
        <input name="username" style="rezize: none; width: 350px; heigth: 10px;" placeholder="Nomor Induk Kependudukan" type="text" class="form-control" id="">
      
      <div class="mb-3">
        <label style="font-weight: bold; font-size: 20px;" for="" class="form-label">Password</label>
        <input name="password" style="rezize: none; width: 350px; heigth: 10px;" placeholder="Password" type="password" class="form-control" id="" >
      
      </div>
      <button type="submit" class="btn btn-dark">Daftar</button>
      / <a href="Login.php" class="regist"> Login </a>
    </form>
	</div>
</body>
</html>