<?php
// Load file koneksi.php
$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$database = "fppweb"; // Nama databasenya
$pdo = new PDO('mysql:host=' . $host . ';dbname=' . $database, $username, $password);
$id = $_GET['id'];
$sql = $pdo->prepare("SELECT foto FROM courses WHERE id=:id");
$sql->bindParam(':id', $id);
$sql->execute();
$data = $sql->fetch();
if (is_file("../form/images/" . $data['foto']))
  unlink("../form/images/" . $data['foto']);
$sql = $pdo->prepare("DELETE FROM courses WHERE id=:id");
$sql->bindParam(':id', $id);
$execute = $sql->execute();
if ($execute) {
  header("location: courses.php");
} else {
  echo "Data gagal dihapus. <a href='index.php'>Kembali</a>";
}
?>