<?php
session_start();

if(isset($_SESSION["username"]) ) { //jika ada session login
  header("location:admin/"); //dikembalikan lagi kesini
  exit;
}
?>
<?php
include("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
    <title>Website Negara</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="add/">Register</a>
      </li>
            <li class="nav-item active">
        <a class="nav-link" href="game/">Game</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="datasiswa/">Data Siswa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.facebook.com/profile.php?id=100011332078662">My Facebook</a>
      </li>
    </ul>

      <form action="login/" class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" href="">Login Admin</button>
    </form>
  </div>
</nav>
<div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
       <a href="https://www.facebook.com/profile.php?id=100011332078662"><img src="b.jpg" width="18%" class="rounded-circle img-thumbnail"></a>
    <h1 class="display 4">Akbar Surya Raza</h1>
    <p class="load">Selamat Datang Di Website Negara</p>
  </div>
</div> 
<section id="about" class="about">
<div class ="container text-center">
  <div class="row mb-4">
    <div class="col">
      <h1>About Me</h1>
    </div>
  </div>
<div class="row justify-content-center"> 
  <div class="col-md-5 text-center">
    <p>Some quick Example text to build on the card title and make up the bulk of the card's content. Some quick Example text to build on the card title and make up the bulk of the card's content.</p>
</div>
<div class="col-md-5 text-center">
  <p>Some quick Example text to build on the card title and make up the bulk of the card's content. Some quick Example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
</about>

<div class="container">
  <div class="row mb-4">
    <div class="col text-center">
    <h1>Portofolio</h1>
  </div>
</div>

<div class="row justify-content-center mb-4">
  <div class="col-md">
    <div class="card">
      <img class="card-img-top" src="haha.jpg" alt="card image cap">
      <div class="card-body">
        <p class="card-text">Some quick Example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
  <div class="col-md">
    <div class="card">
      <img class="card-img-top" src="haha.jpg" alt="card image cap">
      <div class="card-body">
        <p class="card-text">Some quick Example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  </div>
</div>
  <div class="col-md">
    <div class="card">
      <img class="card-img-top" src="haha.jpg" alt="card image cap">
      <div class="card-body">
        <p class="card-text">Some quick Example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  </div>
</div>
</div>
<div class="row justify-content-center mb-4">
  <div class="col-md">
    <div class="card">
      <img class="card-img-top" src="haha.jpg" alt="card image cap">
      <div class="card-body">
        <p class="card-text">Some quick Example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<div class="col-md">
    <div class="card">
      <img class="card-img-top" src="haha.jpg" alt="card image cap">
      <div class="card-body">
        <p class="card-text">Some quick Example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<div class="col-md">
    <div class="card">
      <img class="card-img-top" src="haha.jpg" alt="card image cap">
      <div class="card-body">
        <p class="card-text">Some quick Example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
</div>
</div>
</section>


<section id="contact" class="contact">
  <div class="container">
    <div class="row pt-4 mb-4">
      <div class="col text-center">
        <h2>Contact Us</h2>
      </div>
  </div>
<div class="row">
  <div class="col-lg-4">
    <div class="card text-white bg-success mb-3">
      <div class="card-body">
        <h5 class="card-title">Contact Us</h5>
        <p class="card-text"></p>
      </div>
    </div>
    <ul class="list-group">
      <li class="list-group-item"><h1>Location</h1></li>
      <li class="list-group-item">My Office</li>
      <li class="list-group-item">Jl. Raya Labuan No.Km.5, Palurahan, Kec. Pandeglang, Kabupaten Pandeglang</li>
      <li class="list-group-item">Jawa Barat 42253</li>
</ul>
</div>

<div class="col-lg-6">
  <form>
    <div class="from-group">
      <label for="nama">Nama</label>
      <br><input typle="text" class="form-control" id="formGroupExampleInput" placeholder="Nama"></br>
</div>
<div class="from-group">
      <label for="nama">Email</label>
      <br><input typle="text" class="form-control" id="formGroupExampleInput" placeholder="Email"></br>
      </div>
      <div class="from-group">
      <label for="nama">No Telp</label>
      <br><input typle="text" class="form-control" id="formGroupExampleInput" placeholder="Nomor Telepon"></br>
    </div>
    <div class="from-group">
      <label for="nama">Pesan</label>
      <br><textarea name="pesan" id="pesan" class="form-control" placeholder="Curhat LURD"></textarea></br>
    </div>
    <div class="from-group">
                <br><button type="button" class="btn btn-primary">Kirim Pesan !</button><br>
    </div>
</form>
</div>
</div>

</div>
</section>


<footer class="bg-dark text-white">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <p>Copyright 2019 | <a href="https://www.facebook.com/profile.php?id=100011332078662">BY: Akbar Surya Raza</a></p>
      </div>
    </div>
  </div>
</footer>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>