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
      <h1 class="text-center">Form Upload</h1>
      <form action="course-upload.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="judul">Judul:</label>
          <input type="text" class="form-control" id="judul" name="judul" required>
        </div>
        <div class="form-group">
          <label for="nama">Nama:</label>
          <input type="text" class="form-control" id="nama" name="tutor" required>
        </div>
        <div class="form-group">
          <label for="deskripsi">deskripsi:</label>
          <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
        </div>
        <div class="form-group">
          <label for="harga">Harga:</label>
          <input type="number" class="form-control" id="harga" name="harga" required>
        </div>
        <div class="form-group">
          <label for="foto">Foto:</label>
          <input type="file" class="form-control-file" id="foto" name="foto" accept="image/*" required>
        </div>
        <button type="submit" onclick="window.location.href='../course/index.php'"
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