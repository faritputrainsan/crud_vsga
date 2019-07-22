<?php include '../../controller/config.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign UP</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="../../assets/js/jquery-3.3.1.slim.min.js"></script>
	<script src="../../assets/js/popper.min.js"></script>
	<script src="../../assets/js/bootstrap.min.js"></script>
 

</head>
<body>
<div class="container">
    <form action="../../controller/pelanggan/insert.php" method="POST">
    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" name="nama"  placeholder="Nama">
    </div>
    <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" name="alamat"  placeholder="Alamat">
    </div>
    <label for="Jeniskl">Jenis Kelamin</label>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis"  value="L" checked>
        <label class="form-check-label" for="exampleRadios1">
            Laki-Laki
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="jenis"  value="P">
        <label class="form-check-label" for="exampleRadios2">
            Perempuan
        </label>
    </div>

    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="pass">Password</label>
        <input type="password" class="form-control" name="pass" placeholder="Password">
    </div>
    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Sign UP</button>
    </form>
</div>
    

</body>
</html>



