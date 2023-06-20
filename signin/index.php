<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/619575b658.js" crossorigin="anonymous"></script>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <div class="container">
            <div class="formbox">
                <div class="catalog">
                    <img src="images/catalog1.jpg" alt="">
                </div>
                <div class="box">
                    <h1 id="title">Log In</h1>
                    <form action="signin-process.php" id="form" method="post">
                        <div class="input-group">
                            <div class="input-group">
                                <div class="input-field" id="emailField">
                                    <i class="fa-solid fa-envelope"></i>
                                    <input type="email" placeholder="Email" id="email" name="email" required value="">
                                </div>
                                <div class="input-group">
                                    <div class="input-field">
                                        <i class="fa-solid fa-lock"></i>
                                        <input type="password" placeholder="Password" name="password" value="" id="pass"
                                            required oninput="validateInput(document.getElementById('pass').value )"
                                            pattern="[a-zA-Z0-9]{8,}" title="">
                                    </div>
                                    <div class="alert" id="alert">
                                        <p></p>
                                    </div>
                                    <div class="signin">

                                        <p id="text">Create an account?</p>
                                        <button type="button" id="switchBtn">Sign Up</button>
                                    </div>

                                    <div class="btn-field">
                                        <button type="submit" id="submitBtn" name="login">Log In</button>
                                    </div>
                                    <p class="continue">or</p>
                                    <div class="social-group">
                                        <div class="social-field">
                                            <i class="fa-brands fa-google"></i>
                                            <a href="#">Google</a>
                                        </div>

                                        <p>|</p>

                                        <div class="social-field">
                                            <i class="fa-brands fa-facebook-f"></i>
                                            <a href="#">Facebook</a>
                                        </div>
                                    </div>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
    <script>

        let submitBtn = document.getElementById("submitBtn")
        let switchBtn = document.getElementById("switchBtn")
        let nameField = document.getElementById("nameField")
        let name = document.getElementById("name")
        let title = document.getElementById("title")
        let text = document.getElementById("text")
        let email = document.getElementById("email")
        let pass = document.getElementById("pass")
        let alert = document.getElementById("alert")


        window.onload = function () {
            name.value = "";
            email.value = "";
            pass.value = "";
        };

        function validateInput(input) {
            if (!input.checkValidity()) {
                input.setCustomValidity("Password must be at least 8 characters and contain only letters and numbers");
            } else {
                input.setCustomValidity("");
            }
        }


        switchBtn.onclick = function () {
            // name.value = "";
            // email.value = "";
            // pass.value = "";

            // if (switchBtn.innerHTML == "Log In") {
            //     nameField.style.maxHeight = "0";
            //     title.innerHTML = "Log In";
            //     text.innerHTML = "Create an account?"
            //     switchBtn.innerHTML = "Sign Up"
            //     submitBtn.innerHTML = "Log In";
            //     name.required = false;

            // }
            // else if (switchBtn.innerHTML == "Sign Up") {
            //     nameField.style.maxHeight = "60px";
            //     title.innerHTML = "Sign Up";
            //     text.innerHTML = "Already have an account?"
            //     switchBtn.innerHTML = "Log In"
            //     submitBtn.innerHTML = "Sign Up";
            // }
            window.location.href = "http://localhost/FP_PWEB/signup/index.php";

        }

        // const form = document.getElementById('form');
        // const list = [];

        // form.addEventListener("submit", function (event) {
        //     event.preventDefault();

        //     function goToNextPage(name) {
        //         const userName = name;
        //         const url = "index2.html?userName=" + userName;
        //         window.location.href = url;
        //     }


        //     if (title.innerHTML == 'Sign Up') {
        //         const nameInput = document.getElementById("name");
        //         const emailInput = document.getElementById("email");
        //         const passInput = document.getElementById('pass');

        //         const name = nameInput.value;
        //         const email = emailInput.value;
        //         const pass = passInput.value;

        //         const newItem = { name, email, pass };

        //         list.push(newItem);

        //         console.log(list);

        //         form.reset();
        //     }

        //     else if (title.innerHTML == 'Log In') {
        //         const emailInput = document.getElementById("email");
        //         const passInput = document.getElementById('pass');

        //         const email = emailInput.value;
        //         const pass = passInput.value;

        //         list.forEach(item => {
        //             if (email == item.email) {
        //                 if (pass == item.pass) {
        //                     goToNextPage(item.name);
        //                 }
        //                 else {
        //                     alert("Wrong Password");
        //                 }
        //             }
        //             else {
        //                 alert("Email doesn't exist");
        //             }
        //         });

        //     }

        // });



    </script>

</html>