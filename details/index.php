<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
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
                <div class="logout">
                    <a id="logoutBtn" type="button">Log Out</a>
                </div>
                <div class="acc">
                    <a href="../signin/index.php" onclick="sendMessage('switch-log-in')">Join Now</a>
                </div>
            </div>
        </nav>


        <?php
        $host = "localhost"; // Nama hostnya
        $username = "root"; // Username
        $password = ""; // Password (Isi jika menggunakan password)
        $database = "fppweb"; // Nama databasenya
        $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $database, $username, $password);

        $id = $_GET['id'];

        $sql = $pdo->prepare("SELECT * FROM courses WHERE id=:id");
        $sql->bindParam(':id', $id);
        $sql->execute(); // Eksekusi query insert
        $data = $sql->fetch();

        ?>

        <div class="details">
            <h1><?php echo $data['judul'] ?></h1>
            <h4>By: <?php echo $data['tutor'] ?></h4>
            <p>
                <?php echo $data['deskripsi'] ?>
            </p>
            <h4>Price: <?php echo $data['harga'] ?></h4>
            <button>ENROLL NOW</button>
        </div>
        <div class="video overflow-hidden" style="width: 300px; height: 300px; overflow: hidden;">
            <img src=" ../form/images/<?php echo $data['foto'] ?>" style="width: 100%; height:auto" />
        </div>
        <div class="footer">
            <h4>Partnered with</h4>
            <div class="sponsors">
                <div class="sponsor-logo">
                    <img style="width: 40px;" src="images/sponsor1.png" alt="">
                </div>
                <div class="sponsor-logo">
                    <img style="width: 150px;" src="images/sponsor2.png" alt="">
                </div>
                <div class="sponsor-logo">
                    <img style="width: 40px;" src="images/sponsor3.png" alt="">
                </div>
            </div>
        </div>
    </body>
    <script>
        var user = localStorage.getItem('user');
        var accDiv = document.querySelector('.acc');
        var logoutDiv = document.querySelector('.logout');
        var logoutBtn = document.getElementById('logoutBtn');

        console.log(user);
        if (user == null) {
            accDiv.style.display = 'block';
            logoutDiv.style.display = 'none';
        } else {
            accDiv.style.display = 'none';
            logoutDiv.style.display = 'block';
        }


        // Menambahkan event listener untuk menghapus data dari Local Storage saat tombol logout diklik
        logoutBtn.addEventListener('click', function () {
            localStorage.removeItem('user'); // Menghapus item 'user' dari Local Storage
            location.reload(); // Me-reload ulang halaman agar perubahan dapat terlihat di halaman
            alert('Logout berhasil!');
        });
        function sendMessage(message) {
            // Create a message object
            const messageObject = {
                data: message,
            };

            // Send the message
            window.postMessage(messageObject, '*');
        }
    </script>

</html>