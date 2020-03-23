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

    header("Location:indexb.php");
}
?>
<?php

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
	$nisn=$_POST['nisn'];
    $nama = $user_data['nama'];
    $kelas=$_POST['kelas'];
    $jurusan=$_POST['jurusan'];
}
?>
    <title>Edit User Data</title>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
        <tr> 
                <td>NISN</td>
                <td><input type="text" name="nisn" value=<?php echo $nisn;?>></</td>
            </tr>
            <tr> 
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Kelas</td>
                <td><input type="text" name="kelas" value=<?php echo $kelas;?>></td>
            </tr>
            <tr> 
                <td>Jurusan</td>
                <td><input type="text" name="jurusan" value=<?php echo $jurusan;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>