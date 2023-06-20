<?php
include "../config.php";

if (isset($_POST['register'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  // mengecek apakah email sudah ada di database
  $sql = "SELECT email FROM users WHERE email='$email'";
  $result = mysqli_query($db, $sql);

  if ($result->num_rows > 0) {
    echo "<script>
            alert('Email sudah terdaftar!');
          </script>";
    return false;
  } else {
    // menambahkan user baru ke database
    $sql = "INSERT INTO users (nama, email, password, role) VALUES ('$name', '$email', '$password', 0)";
    $query = mysqli_query($db, $sql);

    if ($query) {
      echo "<script>
              alert('Berhasil mendaftar!');
            </script>";
      header("Location: ../signin/index.php");
      exit(); // tambahkan perintah exit() setelah header untuk menghentikan eksekusi skrip
    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
  }
}

?>