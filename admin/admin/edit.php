
   <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Tambah Data</title>
</head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="../index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Register <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../datasiswa/index.php">Data Siswa <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.facebook.com/profile.php?id=100011332078662">My Facebook</a>
      </li>
    </ul>
      <form action="../admin/indexb.php" class="form-inline my-2 my-lg-0">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Login Admin</button>
    </form>
  </div>
</nav>
<?php
include_once("config.php");

if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $nisn=$_POST['nisn'];
    $nama=$_POST['nama'];
    $kelas=$_POST['kelas'];
    $jurusan=$_POST['jurusan'];

    $result = mysqli_query($mysqli, "UPDATE users SET nisn='$nisn',nama='$nama',kelas='$kelas',jurusan='$jurusan' WHERE id=$id");

    header("Location: index.php");
}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$nisn=$_POST['nisn'];
    $nama =$user_data['nama'];
    $kelas=$_POST['kelas'];
    $jurusan=$_POST['jurusan'];
}
?>
<div class="jumbotron jumbotron-fluid">
  <div class="container text-center bg-light">
    <h1 class="display 4">Edit Data Siswa</h1>
    <form name="update_user" method="POST" action="edit.php">    
    <table align="center">
        <br><table width="25%" align="center" border="0">
<div class="col-lg-6">
  <form>
    <div class="from-group">
      <tr><label for="nisn"></label></tr>
      <tr><th><br><input typle="text" name="nisn" class="form-control" placeholder="NISN" value=<?php echo $nisn;?>></</th></tr>
    </div>
    <div class="from-group">
      <tr><th><br><input typle="text" name="nama" class="form-control" placeholder="Nama" value=<?php echo $nama;?>></</th></tr>
    </div>
    <div class="from-group">
      <tr><th><br><input typle="text" name="kelas" class="form-control" placeholder="Kelas" value=<?php echo $kelas;?>></</th></tr>
    </div>
    <div class="from-group">
      <tr><th><br><input typle="text" name="jurusan" class="form-control" placeholder="Jurusan" value=<?php echo $jurusan;?>></</th></tr>
    </div>
<div class="from-group">

                <tr><th><br><input type="hidden" name="id" value=<?php echo $_GET['id'];?>> 
                <button type="submit" class="btn btn-primary" name="update" value="Update">Simpan</br><tr></th></br></button>
            </tr>
        </table>
    </form>
</body>