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
            <div class="add" id="addCourse">
                <button onclick="window.location.href='../form/course.php'">Add Course</button>
            </div>
            <div class="menu-container">
                <!-- <div class="box grow">
                    <div class="box-img">
                        <img src="images/product3.jpg" alt="">
                    </div>
                    <h2>Photography 101</h2>
                    <div class="profile">
                        <img src="images/profile1.jpg" alt="">
                        <h3>Dimas Fadilah</h3>
                    </div>
                    <span>$100</span>
                    <a href=" "><img style="margin-left:190px;"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAe5JREFUSEvNlrsyBFEQhr+Vuz0BQhEiocsL4AmQUCLCFSEiJFIkeAK8gEsoIxLiCdxy1L/Vo3qnzpw5w67VVVO1tedsf335u2drdMhqHeLyL8CDwICrwHU7q+Ez3gQ2HOwFmAJu2xFADCzelcFbzvZglVqPbBZYtc/KWgEU2S4wAtwBa6kRFomrD3g2JyfAQsShgpoApInJ34L1+2Ng3hz1A+p5yFoOVvSXRtoCJL4/AQsiRat/j8CQUfPqL6puLNjSBaLeHpnnOeDMMvdjVwaW4Gacj0bLyjaXRKZse91oqQVeRApOi+fJdJEFot7rEUi/P7dpaZyXgXVH45KNlsqtQLzFxOUrtugDSwFrth+MtBeY1RhYrVGZXwFV79tSwLqcOVfZlLUfrSJwNOBUsDbZqYXbVDJg1LJRMH6ve/WP5Xd+KlhM9VYiknM5KrPsvlapgmuyKmCfgUSTF5l3LJBEKctXKFnVmUO/v8uy9efBdVsl4/xopcBDU1A54wyU/AaKvU6rZiz4kql4H3gPpN0NrNjIHRaVpSp4G6ibM725pgOOL9y/lh1gPQSvCvZOP4GugNMPt4qLgkva1d63ynxgX6iMywGwznVPpvNguatmLGfDQA9wE5H1OPAG3LeqxykjlHTnJxknOS671DHwF+5YYR+1wY2EAAAAAElFTkSuQmCC" /></a>
                </div>

                <div class="box grow">
                    <div class="box-img">
                        <img src="images/product1.jpg" alt="">
                    </div>
                    <h2>Data Analyst 101</h2>
                    <div class="profile">
                        <img src="images/profile1.jpg" alt="">
                        <h3>Dimas Fadilah</h3>
                    </div>
                    <span>$200</span>
                    <a href=" "><img style="margin-left:190px;"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAe5JREFUSEvNlrsyBFEQhr+Vuz0BQhEiocsL4AmQUCLCFSEiJFIkeAK8gEsoIxLiCdxy1L/Vo3qnzpw5w67VVVO1tedsf335u2drdMhqHeLyL8CDwICrwHU7q+Ez3gQ2HOwFmAJu2xFADCzelcFbzvZglVqPbBZYtc/KWgEU2S4wAtwBa6kRFomrD3g2JyfAQsShgpoApInJ34L1+2Ng3hz1A+p5yFoOVvSXRtoCJL4/AQsiRat/j8CQUfPqL6puLNjSBaLeHpnnOeDMMvdjVwaW4Gacj0bLyjaXRKZse91oqQVeRApOi+fJdJEFot7rEUi/P7dpaZyXgXVH45KNlsqtQLzFxOUrtugDSwFrth+MtBeY1RhYrVGZXwFV79tSwLqcOVfZlLUfrSJwNOBUsDbZqYXbVDJg1LJRMH6ve/WP5Xd+KlhM9VYiknM5KrPsvlapgmuyKmCfgUSTF5l3LJBEKctXKFnVmUO/v8uy9efBdVsl4/xopcBDU1A54wyU/AaKvU6rZiz4kql4H3gPpN0NrNjIHRaVpSp4G6ibM725pgOOL9y/lh1gPQSvCvZOP4GugNMPt4qLgkva1d63ynxgX6iMywGwznVPpvNguatmLGfDQA9wE5H1OPAG3LeqxykjlHTnJxknOS671DHwF+5YYR+1wY2EAAAAAElFTkSuQmCC" /></a>
                </div>
                <div class="box grow">
                    <div class="box-img">
                        <img src="images/product2.jpg" alt="">
                    </div>
                    <h2>Product Design 101</h2>
                    <div class="profile">
                        <img src="images/profile1.jpg" alt="">
                        <h3>Dimas Fadilah</h3>
                    </div>
                    <span>$200</span>
                    <a href=" "><img style="margin-left:190px;"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAe5JREFUSEvNlrsyBFEQhr+Vuz0BQhEiocsL4AmQUCLCFSEiJFIkeAK8gEsoIxLiCdxy1L/Vo3qnzpw5w67VVVO1tedsf335u2drdMhqHeLyL8CDwICrwHU7q+Ez3gQ2HOwFmAJu2xFADCzelcFbzvZglVqPbBZYtc/KWgEU2S4wAtwBa6kRFomrD3g2JyfAQsShgpoApInJ34L1+2Ng3hz1A+p5yFoOVvSXRtoCJL4/AQsiRat/j8CQUfPqL6puLNjSBaLeHpnnOeDMMvdjVwaW4Gacj0bLyjaXRKZse91oqQVeRApOi+fJdJEFot7rEUi/P7dpaZyXgXVH45KNlsqtQLzFxOUrtugDSwFrth+MtBeY1RhYrVGZXwFV79tSwLqcOVfZlLUfrSJwNOBUsDbZqYXbVDJg1LJRMH6ve/WP5Xd+KlhM9VYiknM5KrPsvlapgmuyKmCfgUSTF5l3LJBEKctXKFnVmUO/v8uy9efBdVsl4/xopcBDU1A54wyU/AaKvU6rZiz4kql4H3gPpN0NrNjIHRaVpSp4G6ibM725pgOOL9y/lh1gPQSvCvZOP4GugNMPt4qLgkva1d63ynxgX6iMywGwznVPpvNguatmLGfDQA9wE5H1OPAG3LeqxykjlHTnJxknOS671DHwF+5YYR+1wY2EAAAAAElFTkSuQmCC" /></a>
                </div>

                <div class="box grow">
                    <div class="box-img">
                        <img src="images/product4.jpg" alt="">
                    </div>
                    <h2>Adobe Studio 101</h2>
                    <div class="profile">
                        <img src="images/profile1.jpg" alt="">
                        <h3>Dimas Fadilah</h3>
                    </div>
                    <span>$200</span>
                    <a href=" "><img style="margin-left:190px;"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAAXNSR0IArs4c6QAAAe5JREFUSEvNlrsyBFEQhr+Vuz0BQhEiocsL4AmQUCLCFSEiJFIkeAK8gEsoIxLiCdxy1L/Vo3qnzpw5w67VVVO1tedsf335u2drdMhqHeLyL8CDwICrwHU7q+Ez3gQ2HOwFmAJu2xFADCzelcFbzvZglVqPbBZYtc/KWgEU2S4wAtwBa6kRFomrD3g2JyfAQsShgpoApInJ34L1+2Ng3hz1A+p5yFoOVvSXRtoCJL4/AQsiRat/j8CQUfPqL6puLNjSBaLeHpnnOeDMMvdjVwaW4Gacj0bLyjaXRKZse91oqQVeRApOi+fJdJEFot7rEUi/P7dpaZyXgXVH45KNlsqtQLzFxOUrtugDSwFrth+MtBeY1RhYrVGZXwFV79tSwLqcOVfZlLUfrSJwNOBUsDbZqYXbVDJg1LJRMH6ve/WP5Xd+KlhM9VYiknM5KrPsvlapgmuyKmCfgUSTF5l3LJBEKctXKFnVmUO/v8uy9efBdVsl4/xopcBDU1A54wyU/AaKvU6rZiz4kql4H3gPpN0NrNjIHRaVpSp4G6ibM725pgOOL9y/lh1gPQSvCvZOP4GugNMPt4qLgkva1d63ynxgX6iMywGwznVPpvNguatmLGfDQA9wE5H1OPAG3LeqxykjlHTnJxknOS671DHwF+5YYR+1wY2EAAAAAElFTkSuQmCC" /></a>
                </div> -->

                <?php
                // Koneksi ke database
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
                $query = "SELECT * FROM courses";
                $result = mysqli_query($conn, $query);

                // Periksa apakah ada hasil dari query
                if (mysqli_num_rows($result) > 0) {
                    // Looping melalui hasil query
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Menampilkan konten dinamis
                        echo '<div class="box grow">';
                        echo '<div class="box-img">';
                        echo '<img src="../form/images/' . $row["foto"] . '" alt="">';
                        echo '</div>';
                        echo '<h2>' . $row["judul"] . '</h2>';
                        echo '<div class="profile">';
                        echo '<img src="images/profile1.jpg' . '" alt="">';
                        echo '<h3>' . $row["tutor"] . '</h3>';
                        echo '</div>';
                        echo '<span>$' . $row["harga"] . '</span>';
                        // echo '<a href="#"></a>';
                        echo "<a href='../details/index.php?id=" . $row['id'] . "'>Details</a>";
                        echo '</div>';
                    }
                } else {
                    echo "Tidak ada data yang ditemukan.";
                }

                // Menutup koneksi
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
        var idCourse = document.getElementById('addCourse');

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
            idCourse.style.display = 'block';
        } else {
            idCourse.style.display = 'none';
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