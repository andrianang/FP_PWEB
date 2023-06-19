<?php
$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$database = "fppweb"; // Nama databasenya
// Koneksi ke MySQL dengan PDO
$pdo = new PDO('mysql:host=' . $host . ';dbname=' . $database, $username, $password);

$judul = $_POST['judul'];
$tutor = $_POST['tutor'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis') . $foto;

// Set path folder tempat menyimpan fotonya
$path = "images/" . $fotobaru;

if (move_uploaded_file($tmp, $path)) {
  $sql = $pdo->prepare("INSERT INTO courses(judul, tutor, harga, foto, deskripsi) VALUES(:judul,:tutor,:harga,:foto,:deskripsi)");
  $sql->bindParam(':judul', $judul);
  $sql->bindParam(':tutor', $tutor);
  $sql->bindParam(':harga', $harga);
  $sql->bindParam(':deskripsi', $deskripsi);
  $sql->bindParam(':foto', $fotobaru);
  $sql->execute(); // Eksekusi query insert

  if ($sql) { // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: ../course/index.php"); // Redirect ke halaman index.php
    // exit();
  } else {
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='course.php'>Kembali Ke Form</a>";
  }
} else {
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='course.php'>Kembali Ke Form</a>";
}

?>