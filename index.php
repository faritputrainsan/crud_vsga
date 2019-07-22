<?php include 'controller/config.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="assets/js/jquery-3.3.1.slim.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
 

</head>
<body>
	<!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm fixed-top">
	    <div class="container">
	    <!-- Brand -->
	      <a class="navbar-brand" href="#">Produk</a>
	    <!-- Toggler -->
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	      </button>
	    <!-- Content Nav -->
	      <div class="collapse navbar-collapse" id="navbar">
	        <ul class="navbar-nav mr-auto">
	          <li class="nav-item">
	            <a class="nav-link" href="#">Beranda</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="controller/config.php">Cek Koneksi</a>
	          </li>
	          <li class="nav-item">
	            <a class="nav-link" href="contact.html">Katalog</a>
	          </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Master Data
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="view/produk/index.php">Produk</a>		        	
		          <a class="dropdown-item" href="view/merk_produk/index.php">Merk Produk</a>
		          <a class="dropdown-item" href="view/kategori_produk/index.php">Kategori Produk</a>
		        </div>
		      </li>
	        </ul>
			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalCenter">
				Login
			</button>
	        <form class="form-inline my-2 my-lg-0">
			  <a class="btn btn-primary ml-2" href="view/pelanggan/index.php">admin</a>
	        </form>
	      </div>
	    </div>
    </nav>
    <!-- Navbar End -->
						<!-- Modal -->
	<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
			<form>
				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<div class="form-check">
					<input type="checkbox" class="form-check-input" id="exampleCheck1">
					<label class="form-check-label" for="exampleCheck1">Check me out</label>
				</div>
				
			</form>
			<a class="btn btn-primary ml-2" href="view/pelanggan/sign_up.php">Sign up</a>
			
			</div>
			<div class="modal-footer">
				
				<button type="submit" class="btn btn-success">Login</button>
			</div>
			</div>
		</div>
	</div>

</body>
</html>


<!-- Button trigger modal -->
