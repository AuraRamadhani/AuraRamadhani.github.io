<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$id_pelaporan = $_POST['id_pelaporan'];
$tanggapan = $_POST['tanggapan'];

// update data ke database
mysqli_query($conn,"update tbaspirasi set tanggapan='$tanggapan' where id_pelaporan='$id_pelaporan'");
 
// mengalihkan halaman kembali ke index.php
header("location:user-home.php");
 
?>








<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="user-home.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	include 'config.php';
	$id_pelaporan = $_GET['id_pelaporan'];
	$data = mysqli_query($conn,"select * from tbaspirasi where id_pelaporan='$id_pelaporan'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update-user.php">
			<table>
				<tr>			
					<td>Tanggapan</td>
					<td>
						<input type="hidden" name="id_pelaporan" value="<?php echo $d['id_pelaporan']; ?>">
						<input type="text" name="tanggapan" value="<?php echo $d['tanggapan']; ?>">
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>


<?php 
// koneksi database
include 'config.php';
 
// menangkap data yang di kirim dari form
$id_pelaporan = $_POST['id_pelaporan'];
$tanggapan = $_POST['tanggapan'];

// update data ke database
mysqli_query($conn,"update tbaspirasi set tanggapan='$tanggapan' where id_pelaporan='$id_pelaporan'");
 
// mengalihkan halaman kembali ke index.php
header("location:user-home.php");

?>
 