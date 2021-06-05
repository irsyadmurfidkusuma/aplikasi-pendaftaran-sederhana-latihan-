<?php
// make variable
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "irsyadmurfid";

// create conecctin
$conn = mysqli_connect($servername, $username, $password, $dbname);
// check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$nama1 = $_POST['nama'];
$alamat1 = $_POST['alamat'];
$agama1 = $_POST['agama'];
$jenisKelamin1 = $_POST['jenis_kelamin'];
$hobi1 = $_POST['hobi'];
$tempatLahir1 = $_POST['tempat_lahir'];
$tanggalLahir1 = $_POST['tanggal_lahir'];
$telepon1 = $_POST['telepon'];
$pop_31 = $_POST['pop3'];
$email1 = $_POST['email'];
$username1 = $_POST['username'];
$pasword1 = $_POST['pasword'];
$foto1 = $_POST['foto'];

$sql = "INSERT INTO pendaftaran (id, nama, alamat, agama, jenis_kelamin, hobi, tempat_lahir, tanggal_lahir, telepon, pop_3, email, username, pasword, foto) VALUES ('', '$nama1','$alamat1','$agama1','$jenisKelamin1','$hobi1','$tempatLahir1','$tanggalLahir1','$telepon1','$pop_31','$email1','$username1','$pasword1','$foto1')";

if (mysqli_query($conn, $sql)) {
  echo "Terima Kasih! Data Kamu Berhasil DiSimpan!";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


?>


