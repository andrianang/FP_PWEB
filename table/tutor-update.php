<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Upload</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
  </head>

  <body>
    <nav>
      <div class="navbar">
        <div class="logo">
          <img src="images/logo.png" alt="">
          <h1>LearnToday</h1>
        </div>
        <div class="menu">
          <a href="../home/index.php" class="menu-item">Home</a>
          <a href="../course/index.php" class="menu-item">Course</a>
          <a href="../tutor/index.php" class="menu-item">Tutor</a>
          <a href="../contact/index.php" class="menu-item">Contact</a>
        </div>
      </div>
    </nav>
    <div class="container">
      <?php
      $host = "localhost"; // Nama hostnya
      $username = "root"; // Username
      $password = ""; // Password (Isi jika menggunakan password)
      $database = "fppweb"; // Nama databasenya
      $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $database, $username, $password);

      $id = $_GET['id'];

      $sql = $pdo->prepare("SELECT * FROM tutors WHERE id=:id");
      $sql->bindParam(':id', $id);
      $sql->execute(); // Eksekusi query insert
      $data = $sql->fetch();

      ?>
      <h1 class="text-center">Form Upload</h1>
      <form action="tutor-update-process.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="nama">nama:</label>
          <input type="text" class="form-control" id="nama" name="nama" required value="<?php echo $data['nama'] ?>">
        </div>
        <div class="form-group">
          <label for="desc">desc:</label>
          <input type="text" class="form-control" id="desc" name="desc" required
            value="<?php echo $data['deskripsi'] ?>">
        </div>
        <div class="form-group">
          <label for="foto">Foto:</label>
          <input type="file" class="form-control-file" id="foto" name="foto" accept="image/*">
        </div>
        <button type="submit" onclick="window.location.href='../tutor/index.php'"
          class="btn btn-primary">Upload</button>
      </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>

  <script>
    var user = localStorage.getItem('user');
    if (user == null) {
      window.location.href = '../signin/index.php';
    }
  </script>

</html>