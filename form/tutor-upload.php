<?php
$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$database = "fppweb"; // Nama databasenya
// Koneksi ke MySQL dengan PDO
$pdo = new PDO('mysql:host=' . $host . ';dbname=' . $database, $username, $password);

$nama = $_POST['nama'];
$desc = $_POST['desc'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis') . $foto;

// Set path folder tempat menyimpan fotonya
$path = "images/" . $fotobaru;

if (move_uploaded_file($tmp, $path)) {
  $sql = $pdo->prepare("INSERT INTO tutors(nama, deskripsi, foto) VALUES(:nama,:desc,:foto)");
  $sql->bindParam(':nama', $nama);
  $sql->bindParam(':desc', $desc);
  $sql->bindParam(':foto', $fotobaru);
  $sql->execute(); // Eksekusi query insert

  if ($sql) { // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: ../tutor/index.php"); // Redirect ke halaman index.php
    // exit();
  } else {
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='tutor.php'>Kembali Ke Form</a>";
  }
} else {
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='tutor.php'>Kembali Ke Form</a>";
}

?>