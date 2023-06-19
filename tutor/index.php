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

        <div class="content">
            <div class="add" id="addTutors">
                <button onclick="window.location.href='../form/tutor.php'">Add Tutor</button>
            </div>
            <div class="menu-container">
                <!-- <div class="box grow">
                    <div class="box-img">
                        <img src="images/profile1.jpg" alt="">
                    </div>
                    <h2>Dimas Fadilah</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat sunt fugit mollitia, sint
                        assumenda reiciendis tempora et qui provident ut ipsam architecto, harum voluptas</p>
                    <a href=" ">Learn More...</a>
                </div>

                <div class="box grow">
                    <div class="box-img">
                        <img src="images/profile1.jpg" alt="">
                    </div>
                    <h2>Dimas Fadilah</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat sunt fugit mollitia, sint
                        assumenda reiciendis tempora et qui provident ut ipsam architecto, harum voluptas</p>
                    <a href=" ">Learn More...</a>
                </div>

                <div class="box grow">
                    <div class="box-img">
                        <img src="images/profile1.jpg" alt="">
                    </div>
                    <h2>Dimas Fadilah</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat sunt fugit mollitia, sint
                        assumenda reiciendis tempora et qui provident ut ipsam architecto, harum voluptas</p>
                    <a href=" ">Learn More...</a>
                </div>

                <div class="box grow">
                    <div class="box-img">
                        <img src="images/profile1.jpg" alt="">
                    </div>
                    <h2>Dimas Fadilah</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat sunt fugit mollitia, sint
                        assumenda reiciendis tempora et qui provident ut ipsam architecto, harum voluptas</p>
                    <a href=" ">Learn More...</a>
                </div> -->
                <?php
                // Koneksi ke database MySQL
                $server = "localhost";
                $user = "root";
                $password = "";
                $nama_database = "fppweb";
                // $conn = mysqli_connect("nama_host", "nama_pengguna", "kata_sandi", "nama_database");
                $conn = mysqli_connect($server, $user, $password, $nama_database);

                // Periksa koneksi
                if (!$conn) {
                    die("Koneksi gagal: " . mysqli_connect_error());
                }

                // Query untuk mengambil data dari tabel
                $query = "SELECT * FROM tutors";
                $result = mysqli_query($conn, $query);

                // Looping untuk menampilkan data
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $profileImg = $row['foto'];
                        $name = $row['nama'];
                        $description = $row['deskripsi'];
                        echo '<div class="box grow">';
                        echo '<div class="box-img">';
                        echo '<img src="../form/images/' . $profileImg . '" alt="">';
                        echo '</div>';
                        echo '<h2>' . $name . '</h2>';
                        echo '<p>' . $description . '</p>';
                        echo '<a href="">Learn More...</a>';
                        echo '</div>';
                    }

                } else {
                    echo "Tidak ada data yang ditemukan.";
                }


                // Membebaskan hasil query
                // mysqli_free_result($result);
                
                // Menutup koneksi database
                mysqli_close($conn);
                ?>

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
        var idTutors = document.getElementById('addTutors');

        console.log(user);

        const userJson = JSON.parse(user);

        if (user == null) {
            accDiv.style.display = 'block';
            logoutDiv.style.display = 'none';
        } else {
            accDiv.style.display = 'none';
            logoutDiv.style.display = 'block';
        }

        if (userJson.role == 1) {
            idTutors.style.display = 'block';
        } else {
            idTutors.style.display = 'none';
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