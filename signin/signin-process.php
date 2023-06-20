<?php
include "../config.php";

if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // mengecek apakah email sudah ada di database
  $sql = "SELECT nama, email, role FROM users WHERE email='$email' AND password='$password'";
  $result = mysqli_query($db, $sql);

  if ($result->num_rows > 0) {
    $user = mysqli_fetch_assoc($result);
    $userJson = json_encode($user);
    echo "<script>localStorage.setItem('user', '$userJson');</script>";

    echo "<script>
            alert('Berhasil login!');
            window.location.href = '../home/index.php';
          </script>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($db);
  }
}
?>