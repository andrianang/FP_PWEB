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
                    <a href="../table/index.php" id="admin" class="menu-item">Admin</a>
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
            <h3>Learn At Home</h3>
            <h1>E-Learning</h1>
            <div class="img">
                <img src="images/test.png" alt="">
            </div>
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
        var admin = document.getElementById('admin');

        console.log(user);
        const userJson = JSON.parse(user);
        console.log(userJson);
        if (user == null) {
            accDiv.style.display = 'block';
            logoutDiv.style.display = 'none';
        } else {
            accDiv.style.display = 'none';
            logoutDiv.style.display = 'block';
        }

        if (userJson.role == 1) {
            admin.style.display = 'block';
        } else {
            admin.style.display = 'none';
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