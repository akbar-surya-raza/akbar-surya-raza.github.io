   <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
   <title>Tambah Data</title>
</head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="../">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="">Register</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../game">Game</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../datasiswa/">Data Siswa</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.facebook.com/profile.php?id=100011332078662">My Facebook</a>
      </li>
    </ul>
      <form action="../login/" class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login Admin</button>
    </form>
  </div>
</nav>
<div class="jumbotron jumbotron-fluid">
  <div class="container text-center bg-light">
    
    <br><h1 class="display 4">Daftar Siswa</h1></br>
  <form action="" method="POST">    
    <table align="center">
    <form action="add.php" method="post" name="form1">
        
        <table width="45%" align="center" border="0">

<div class="col-lg-6">
  <form>
    <div class="from-group">
      <tr><th><input type="text" autocomplete="off" name="nisn" class="form-control" placeholder="NISN"></th>
</div>
    <div class="from-group">
      <tr><label for="nama"></label></tr>
      <tr><th><br><input type="text" autocomplete="off" name="nama" class="form-control" placeholder="Nama"></tr></th>
    </div>
       <br><div class="from-group">
     <tr><label for="kelas"></label>
      <tr><th><br><input type="text" autocomplete="off" name="kelas" class="form-control" placeholder="Kelas"></tr></th>
    </div>
       <br> <div class="from-group">
      <tr><label for="jurusan"></label>
      <tr><th><br><input type="text" autocomplete="off" name="jurusan" class="form-control" placeholder="Jurusan"></tr>
<div class="from-group">
                <tr><th><br><button type="submit" class="btn btn-primary" name="Submit" value="Add">Simpan</button></br><tr></th></br>
    </div>
    </div>
        </form>
</div>
</div>
</table>
<br></br>
    <?php
    if(isset($_POST['Submit'])) {
        $nisn = $_POST['nisn'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];

        include_once("config1.php");

        $result = mysqli_query($mysqli, "INSERT INTO users(nisn,nama,kelas,jurusan) VALUES('$nisn','$nama','$kelas','$jurusan')");

        echo "Data Berhasil Ditambahkan!";
    }

    ?>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>