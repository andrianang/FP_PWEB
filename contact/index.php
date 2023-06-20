<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
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

        <div class="big-box">
            <div class="catalog">
                <img src="images/home.jpg" alt="">
            </div>
            <div class="box">
                <form name="contact" action="">
                    <fieldset style="border: 0;">
                        <div class="text-box">
                            <h1>CONTACT US</h1>
                            <p>Hit us up with your amazing thoughts</p>
                        </div>

                        <div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" placeholder="Name" id="name" required>
                        </div>
                        <div class="input-field">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" placeholder="Email" id="email" required>
                        </div>
                        <div class="input-field" style="margin-bottom: 5px;">
                            <i class="fa-solid fa-user"></i>
                            <input type="text" placeholder="Message" id="message" required>
                        </div>
                        <div id="message_box">
                        </div>
                        <div class="btn-field">
                            <button style="margin-left: 345px;" type="submit">Submit</button>
                        </div>
                    </fieldset>
                </form>
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