<!DOCTYPE html>
<html>

<head>
	<title> Home Page </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link href="http://localhost/PaintingWebsite/public/css/styles.css"  media="screen" rel="stylesheet">
</head>

<body>
<?php
// header('Location: ../app/controllers/PaintingController.php');
?>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
	<nav class="navbar navbar-dark bg-primary">
		<div class="container-fluid">
		  <ul class="nav">
			<li class="nav-item">
			  <a class="nav-link active" aria-current="page" href="./index.html">Home</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="view_paintings.php">Paintings</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link" href="add_painting.php">Add Paintings</a>
			</li>
		  </ul>
		  <form role="search">
			<input class="form-control" type="search" placeholder="Search Painting" aria-label="Search">
		</form>
		</div>
	  </nav>
	<h1>Welcome to Acme Painting</h1>

	<div class="container p-5 my-5 bg-primary text-white">
		<p><a href="#">Painting Project</a></p>
		<p><a href="#">Ankit Shah, XX, XX</a></p>
		<p><a href="#">30074802</a></p>
		<p><a href="#">AT2.1</a></p>
	</div>
</body>
</html>