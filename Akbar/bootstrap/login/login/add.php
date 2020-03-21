<?php
session_start();
include 'koneksi.php';
    if( !isset($_SESSION["username"]) ) { //jika tidak ada session login
  header("location:../login/");
  exit;
}
?>s

   <title>Tambah Data</title>

<body>
    <a href="index.php">Kembali</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        
        <table width="25%" border="0">

        <tr> 
            <td>NISN</td>
                <td><input type="text" name="nisn"></td>
            </tr>
            <tr> 
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Kelas</td>
                <td><input type="text" name="kelas"></td>
            </tr>
            <tr> 
                <td>Jurusan</td>
                <td><input type="text" name="jurusan"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_POST['Submit'])) {
        $nisn = $_POST['nisn'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];

        include_once("config.php");

        $result = mysqli_query($mysqli, "INSERT INTO users(nisn,nama,kelas,jurusan) VALUES('$nisn','$nama','$kelas','$jurusan')");

        echo "Data Berhasil Ditambahkan!. <a href='index.php'>Lihat Data</a>";
    }

    ?>