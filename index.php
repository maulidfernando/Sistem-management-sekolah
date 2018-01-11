<?php
require_once ("koneksi.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="SMS website.css" type="text/css"> </head>
  <title>Sistem Management Sekolah</title>

<body>
  <div class="pt-5 text-white bg-primary">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <img class="img-fluid d-block mx-auto" src="sms.png">
        </div>
        <div class="col-md-4">
          <h1 class="">Sistem Management Sekolah</h1>
        </div>
        <div class="col-md-4">
		<?php
		if(isset($_SESSION['nis'])){
		?>
		<h3> <?php echo $_SESSION['nama']; ?></h3>
		<br>
		<a href="logout.php" type="submit" class="btn btn-danger">Logout</a>
		<?php }else{ ?>
          <form method="post" action="proses_login.php">
            <div class="form-group"> <label>Username</label>
              <input type="text" name="username" class="form-control" placeholder="Masukkan Username"> </div>
            <div class="form-group"> <label>Password</label>
              <input type="password" name="password" class="form-control" placeholder="Masukkan Password"> </div>
            <button type="submit" class="btn btn-info">Login</button>
			<a href="daftar.php" type="submit" class="btn btn-success">Daftar</a>
          </form>
		 <?php }?>
        </div>
      </div>
	  <br>
      <div class="row">
        <div class="col-md-6"> </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-md bg-secondary navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Home</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Tentang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Management</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pembayaran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Help</a>
          </li>
        </ul>
        <form class="form-inline m-0">
          <input class="form-control mr-2" type="text" placeholder="Search">
          <button class="btn btn-primary" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
  <div class="py-5">
    <div class="container">
	 <div class="col-lg-12">

          <div id="carouselExampleIndicators" class="carousel slide my-2" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img class="d-block img-fluid" src="abf.jpg" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="ppl.jpg" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block img-fluid" src="abc.png" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
</div>
</div>
	<div class="row">
        <div class="col-md-5">
          <a href="#">
            <img class="img-fluid rounded mb-3" width="400px" src="pentingnya-pendidikan.jpg" alt="">
          </a>
        </div>
        <div class="col-md-7">
          <h3>Pentingnya pendidikan</h3>
          <p>Pendidikan merupakan hal yang terpenting dalam kehidupan kita,ini berarti bahwa setiap manusia berhak mendapat dan berharap untuk selalu berkembang dalam pendidikan. Pendidikan secara umum mempunyai arti suatu proses kehidupan dalam mengembangkan
                diri tiap individu untuk dapat hidup dan melangsungkan kehidupan. Sehingga menjadi seorang yang terdidik itu sangat penting. Pendidikan pertama kali yang kita dapatkan di lingkungan keluarga, lingkungan sekolah dan lingkungan masyarakat.</p>
        </div>
</div>
    </div>
  </div>
  <div class="py-5 bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-9 text-center align-self-center" style="transition: all 0.25s;">
          <p class="mb-5"><b>SMS</b>
            <br>Sofware Management Sekolah
            <br>SMP Negeri 1
            <br>jl.kapten abdul haq</p>
          <div class="my-3 row">
            <div class="col-4">
              <a href="https://www.facebook.com" target="_blank"><i class="fa fa-3x fa-facebook"></i></a>
            </div>
            <div class="col-4">
              <a href="https://twitter.com" target="_blank"><i class="fa fa-3x fa-twitter"></i></a>
            </div>
            <div class="col-4">
              <a href="https://www.instagram.com" target="_blank"><i class="fa fa-3x fa-instagram"></i></a>
            </div>
          </div>
        </div>
        <div class="col-md-3 p-0  offset-md-3" style="transition: all 0.25s;">
          <img class="img-fluid" src="C:/Users/lenovo/Pictures/Gambar SMS.PNG">
        </div>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
</body>

</html>