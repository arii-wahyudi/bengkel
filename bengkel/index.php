<?php 
include 'koneksi.php';


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
	<title>Document</title>
	<style>
	@media only screen and (max-width: 600px) {
		#cok{
			width: 100px;
		}
		#iklan{
			display: none;
		}
	}
</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<img src="asset/img/logo.png" style=" width: 4pc; " alt="">
		<a class="navbar-brand" href="#">Griya Alam Mulia</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Dashboard<span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Profile</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
						Produk
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link">Q&A</a>
				</li>
			</ul>
			<a href="login.php"><button class="btn btn-warning">Masuk/Daftar</button></a>
		</div>
	</nav>
	<br>
	<main>
		<div class="container-fluid my-2">
			<div class="row">
				<div class="col-sm-8">
					<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
							<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img src="asset/img/1.png" class="d-block w-100" alt="...">
								<div class="carousel-caption d-none d-md-block">
									<h5>Kualitas Terjamin</h5>
									<p>harga terjangkau dengan kemewahan yang ada</p>
								</div>
							</div>
							<div class="carousel-item">
								<img src="asset/img/2.png" class="d-block w-100" alt="...">
								<div class="carousel-caption d-none d-md-block" >
									<h5>Dengan Mekanik handal</h5>
									<p>mengutamakan kepuasan pelanggan</p>
								</div>
							</div>
							<div class="carousel-item">
								<img src="asset/img/3.png" class="d-block w-100" alt="...">
								<div class="carousel-caption d-none d-md-block" style=" color:white; ">
									<h5>Harga Yang Murah</h5>
									<p>Harga murah tapi kualitas bersaing</p>
								</div>
							</div>
						</div>
						<button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</button>
						<button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</button>
					</div>
				</div>
				<div class="col-sm-4" id="iklan">
					<a href=""><img src="asset/img/4.png" class="d-block w-100" alt=""></a>
					<br>
					<a href=""><img src="asset/img/5.png" class="d-block w-100"	></a>
				</div>
			</div>
			<br>
			<div>
				<div class="jumbotron jumbotron-fluid">
					<div class="container">
						<div class="row">
							<div class="col-sm-4" align="center"><img src="asset/img/pin.png" style=" width: 10pc; " alt="">
								<h3>Kualitas Terjaga</h3>
								<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores, ad. Deleniti qui quo numquam officiis eum vitae ex tempora molestias magnam, itaque impedit facere nostrum perspiciatis accusantium dolorum quaerat deserunt.</p></div>
								<div class="col-sm-4" align="center"><img src="asset/img/bag.png" style=" width: 10pc; " alt="">
									<h3>Harga Murah</h3><p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus, consequatur odit sit et impedit at debitis assumenda, error expedita, officia corrupti? Voluptates culpa dolore ad quaerat totam temporibus illum vitae.</p>
								</div>
								<div class="col-sm-4" align="center"><img src="asset/img/kuat.png" style=" width: 10pc; " alt="">
									<h3>Tahan Lama</h3><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil totam excepturi amet sint exercitationem quasi! Qui obcaecati omnis error magnam est in sunt, vero enim, voluptas, odio aut eligendi quisquam.</p></div>
								</div>
							</div>
						</div>
					</div>
					<div class="container-fluid"><h2>Terbaru</h2></div>
					<div class="container">
						<div class="row">
							<div class="col-sm-8" style=" border: 4px black solid; padding: 10px; " >
								<img src="asset/img/b.jpg" style=" width: 100%; height: 200px; " alt="">
								<h4>Title</h4>
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus accusamus sed nemo. Animi consectetur, accusantium sequi non ad incidunt nostrum quasi assumenda provident consequatur nam, perferendis id amet beatae cum.</p>
							</div>
							<!-- gw gak tau ini mau dibuat apaan -->
							<div class="col-sm-4"></div>
						</div>
					</div>
				</main>




				<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
				<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
			</body>
			</html>