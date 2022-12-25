
<?php
    if (isset($_POST['submit'])){
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $id_jurusan = $_POST['id_jurusan'];
        $tpt_lahir = $_POST['tpt_lahir'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $gender = $_POST['gender'];
        $alamat = $_POST['alamat'];

        // Buat koneksi dengan MySQL
        $con = mysqli_connect("localhost","root","","fakultas");

        // Cek koneksi
        if (mysqli_connect_errno()) {
            echo "Koneksi gagal: " . mysqli_connect_error();
        }else{
            echo '<strong>KONEKSI BERHASIL.  <strong>';
        }
        // buat sql quert untuk insert ke database
        // Buat query insert dan jalankan
        $sql = "insert into mahasiswa (id_jurusan, nim, nama, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat)
                values ($id_jurusan,'$nim', '$nama', '$gender', '$tpt_lahir', '$tgl_lahir', '$alamat')";

        // jalankan query
        if (mysqli_query($con, $sql)) {
            echo "Data berhasil ditambah.";
        } else {
            echo "Ada error " . mysqli_error($con);
        }
          
        mysqli_close($con);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>
<h1>Data Mahasiswa</h1>
    <form action="insert.php" method="post">
        Nama: <br><input type="text" name="nama"><br><br>
        NIM: <br><input type="text" name="nim"><br><br>
        ID Jurusan: <br><input type="number" name="id_jurusan"><br><br>
        Jenis Kelamin: <br><input type="radio" name="gender" value="laki-laki"> Laki-Laki
        <input type="radio" name="gender" value="perempuan"> Perempuan<br><br>
        Tempat Lahir: <br><input type="text" name="tpt_lahir"><br><br>
        Tanggal Lahir (yyyy-mm-dd): <br><input type="text" name="tgl_lahir"><br><br>
        Alamat:<br><input type="text" name="alamat"><br><br>
        <button type="submit" name="submit">Tambah Data</button>
    </form>
</body>
</html>