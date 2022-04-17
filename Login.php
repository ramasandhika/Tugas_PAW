<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="Login.css">
</head>
<body style="background-color: grey;">
	<div class="container">
		<h1 ">LOGIN</h1>
	</div>

	
  <div class="container1">
	  <form action="cekLogin.php" method="post">
      <div class="mb-3" style="padding-top: 100px;">
        <label style="font-weight: bold; font-size: 20px;" for="" class="form-label">Username</label>
        <input name="username" style="rezize: none; width: 350px; heigth: 10px;" placeholder="Nomor Induk Kependudukan" type="text" class="form-control" id="">
      </div>
      <div class="mb-3">
        <label style="font-weight: bold; font-size: 20px;" for="" class="form-label">Password</label>
        <input name="password" style="rezize: none; width: 350px; heigth: 10px;" placeholder="Password" type="password" class="form-control" id="" >
      </div>
      <button type="submit" class="btn btn-dark">Login</button>
      / <a href="registrasi.php" class="regist"> Registrasi Account </a>
    </form>
	</div>
	

</body>
</html>