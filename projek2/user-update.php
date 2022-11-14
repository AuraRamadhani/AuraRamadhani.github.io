<?php 
// masukkan file koneksi
include "config.php";

// menerima data dari form input.php
    $nis = $_POST['nis'];
    $id = $_POST['id'];
    $tanggal = $_POST['tanggal'];
    $lokasi = $_POST['lokasi'];
    $jenis_aspirasi = $_POST['jenis_aspirasi'];
    $laporan = $_POST['laporan'];
    $gambar = $_POST['gambar'];
    $tanggapan =$_POST['tanggapan'];



// query untuk sintak data
mysqli_query($conn, "UPDATE tbaspirasi SET tanggapan='$tanggapan' WHERE id_pelaporan='$id_pelaporan'");

//lokasi 
header("location: user-update.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <h2>Update Data Siswa</h2>
    <a href="index.php">Kembali</a>

    <form method="post" action="">
        <?php
        include "config.php";
        $id_pelaporan= $_GET['id_pelaporan'];
        $sql = mysqli_query($conn, "SELECT * FROM tbaspirasi where nis='$nis'");
        $row = mysqli_fetch_array($sql);
        ?>
        <table>
            <tr>
                <input type="hidden" name="id_pelaporan" value="<?php echo $row['id_pelaporan'];?>">
               <td>Tanggapan :</td>
                <td><input type="text" name="tanggapan" value="<?php echo $row['tanggapan']; ?>"></td>
            </tr>
          
        </table>
        <script defer src="https://use.fontawesome.com/releases/v5.1.1/js/all.js" integrity="sha384-BtvRZcyfv4r0x/phJt9Y9HhnN5ur1Z+kZbKVgzVBAlQZX4jvAuImlIz+bG7TS00a" crossorigin="anonymous"></script>
    </form>
</body>
</html>


