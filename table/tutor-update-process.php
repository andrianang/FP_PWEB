<?php
$host = "localhost"; // Nama hostnya
$username = "root"; // Username
$password = ""; // Password (Isi jika menggunakan password)
$database = "fppweb"; // Nama databasenya
// Koneksi ke MySQL dengan PDO
$pdo = new PDO('mysql:host=' . $host . ';dbname=' . $database, $username, $password);

$id = $_GET['id'];

$nama = $_POST['nama'];
$desc = $_POST['desc'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];

if (empty($foto)) {
  $sql = $pdo->prepare("UPDATE tutors SET nama=:nama, deskripsi=:desc WHERE id=:id");
  $sql->bindParam(':nama', $nama);
  $sql->bindParam(':desc', $desc);
  $sql->bindParam(':id', $id);
  $sql->execute(); // Eksekusi query insert

  if ($sql) {
    header("location: ../tutor/index.php");
  } else {
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='tutor.php'>Kembali Ke Form</a>";
  }
} else {
  $fotobaru = date('dmYHis') . $foto;

  $path = "../form/images/" . $fotobaru;

  if (move_uploaded_file($tmp, $path)) {
    $sql = $pdo->prepare("SELECT foto FROM tutors WHERE id=:id");
    $sql->bindParam(':id', $id);
    $sql->execute();
    $data = $sql->fetch();
    if (is_file("../form/images/" . $data['foto']))
      unlink("../form/images/" . $data['foto']);
    $sql = $pdo->prepare("UPDATE tutors SET nama=:nama, foto=:foto, deskripsi=:desc WHERE id=:id");
    $sql->bindParam(':nama', $nama);
    $sql->bindParam(':foto', $fotobaru);
    $sql->bindParam(':desc', $desc);
    $sql->bindParam(':id', $id);
    $sql->execute(); // Eksekusi query insert

    if ($sql) {
      header("location: ../tutor/index.php");
    } else {
      echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
      echo "<br><a href='tutor.php'>Kembali Ke Form</a>";
    }
  } else {
    echo "Maaf, Gambar gagal untuk diupload.";
    echo "<br><a href='tutor.php'>Kembali Ke Form</a>";
  }
}

?>