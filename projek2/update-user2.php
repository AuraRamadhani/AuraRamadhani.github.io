


<?php
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_POST['cek'])) {
	$id_pelaporan = $_POST['id_pelaporan'];
	$tanggapan = $_POST['tanggapan'];
    $gambar = $_POST['gambar'];

	mysqli_query($conn,"update tbaspirasi set tanggapan='$tanggapan' where id_pelaporan='$id_pelaporan'");
   
    header("location:user-home.php?#table");
            
		}

 
?>
 <!-- cara memasukkan data dengan cara cek data lain dari database yang berbeda(syarat) menggunakan percabangan -->

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
 

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Hello, world!</title>
  </head>
  <body style="background-color:#343a40;">
    
  <div class="row">
        <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <div class="container">
    <a class="navbar-brand" href="user-home.php" id="nav">LAPAS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active"  style="margin-left: 10px; " aria-current="page" href="user-home.php">Beranda</a>
        <a class="nav-link active"  style="margin-left: 10px; color:grey;" aria-current="page" href="user-aspirasi.php">Pengajuan</a>
        <a class="nav-link active"  style="margin-left: 10px;" aria-current="page" href="user-tentang.php">Tentang</a>

        <!-- login user -->
        <button type="button" class="btn btn-primary" style="margin-left: 900px;" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo"><a href="logout.php" style="text-decoration: none; color:white;">LOGOUT</a></button>
      </div>
    </div>
  </div>
        </nav>


      <div class="container mt-5">
		<div class="row">
			<div class="col-md-12">
			<form method="POST" action="" autocomplete="off">
  <fieldset>
  <div class="p-3 mb-2 bg-dark text-white"><h4>FORM ASPIRASI SISWA</h4></div>

	
    <div class="mb-3" style="width: 500px;">
	<input type="hidden" name="id_pelaporan" value="<?php echo $d['id_pelaporan']; ?>">
    <label for="TextInput" class="form-label pt-3" style="color: white;">Tanggapan</label>     
    <input type="text" id="TextInput" name="id" class="form-control" placeholder="Masukkan ID Aspirasi" value="<?php echo $d['tanggapan']; ?>" required>
    </div>

    <div class="mb-3" style="width: 500px;">
      <label for="TextInput" class="form-label pt-3" style="color: white;">Gambar</label>     
      <input type="number" id="TextInput" name="nis" class="form-control" value="<?php echo $d['tanggapan']; ?>" required>
    </div>
   
  </fieldset>

    <button type="reset" class="btn btn-danger" style="margin-bottom: 50px; margin-right:20px; margin-top:20px;">Delete</button>
    <button type="submit" class="btn btn-primary" style="margin-bottom: 50px; margin-right:20px; margin-top:20px;" name="cek">Submit</button>
  </fieldset>
</form>


			</div>
		</div>
	</div>
    



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>