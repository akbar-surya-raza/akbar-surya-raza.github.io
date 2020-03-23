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
  <a class="navbar-brand" href="../">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../add/">Register <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../game">Game</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="">Data Siswa <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://www.facebook.com/profile.php?id=100011332078662">My Facebook</a>
      </li>
    </ul>
      <form action="../login/" class="form-inline my-2 my-lg-0">
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
  <form role="form" action="index.php" method="POST">
   <div class="container text-center">
    <div class="table-responsive">
          <table class="table table-bordered table-striped table-hover">
      <thead>
   <tr>
    <th><label>Cari :</label></th>
   <th><input type="text" name="cari" class="form-control" placeholder="Pencarian" autocomplete="off"></th> <th><button type="submit" class="btn btn-info btn-block">Search</button></th>
     </tr></div>
</div>
</div>
  </form>
  </table> 
<?php
if(isset($_POST['cari'])){
  $cari = $_POST['cari'];
  echo "<b>Hasil Pencarian : ".$cari."</b>";
}
?> 
<div class="table-responsive">
		<table class="table table-bordered table-striped table-hover">
			<thead>
				<tr>
					<th>NISN</th>
					<th>Nama</th>
					<th>Kelas</th>	
					<th>Jurusan</th>					
				</tr>
			</thead>
			<tbody>
		<?php
    if(isset($_POST['cari'])){
      $cari = $_POST['cari'];
    $result = mysqli_query($mysqli,"SELECT * FROM users WHERE nisn LIKE'%".$cari."%' OR nama LIKE '%".$cari."%' ");

}else{
    $result = mysqli_query($mysqli, "SELECT * FROM users");
}

if(mysqli_num_rows($result)){
    while($user_data = mysqli_fetch_array($result)) {   ?>      
        <tr>
        <td><?php echo $user_data['nisn']; ?></td>
        <td><?php echo $user_data['nama']; ?></td>
        <td><?php echo $user_data['kelas']; ?></td>
        <td><?php echo $user_data['jurusan']; ?></td>   
    <?php }}else{
echo'<tr><td colspan="5">Tidak ada data</tr></td>';}?>

			</tbody>
		</table>
	</div>











    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>