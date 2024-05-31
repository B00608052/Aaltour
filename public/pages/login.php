<?php
session_start();
?>
<?php
include 'connect_db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Login</title>
    <link rel="stylesheet" href="../styles/bootstrap.min.css">
    <link rel="stylesheet" href="../styles/style2.css">
    <link rel="stylesheet" href="../styles/stylecommon.css" />
    <style>
        form {
            max-width: 460px;
            margin: auto;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border-radius: 10px;
        }
        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
            transition: .5s ease;
        }
        .inputName {
            display: inline-block;
            width: 49%;
            margin-bottom: 10px;
        }
        label {
            margin-right: 10px;
        }
        .name-container {
            display: flex;
            justify-content: space-between;
        }
    </style>
</head>
<body>
    <!-- navbar -->
    <script id="replace_with_navbar" src="../scripts/nav.js"></script>
    <!-- navbar end-->
    <section class="memberRegisterSection">
        <div class="memberRegisterBox">
            <h2>Create Account</h2>
            <div class="signinHint">
                <span>Haven’t had an Account?</span> <a href="./registration.php"> create an account</a>
            </div>
            <br>
            <form id="loginForm">
                <input type="email" placeholder=" Email" id="email" name="email" required>
                <span class="error-message" id="emailError"></span>

                <input type="password" placeholder=" Password" id="password" name="password" required>
                <span class="blank"></span><a class="forgetBtn" href="">Forgot password?</a>

                <button id="loginBtn" type="button" onclick="login()">Login</button>
            </form>
        </div>
    </section>
    <script>
        function login() {
            // Get input values
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;

            // Check if both fields are filled
            if (email === '' || password === '') {
                alert('Please enter both email and password.');
                return;
            }

            // Send login request to the server (you will implement this part)
            fetch('./login_function.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ email, password }),
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Login successful!');
                    // Redirect to routepick.html
                    window.location.href = './routepick.html';
                } else {
                    alert('Login failed. Please check your email and password.');
                }
            })
            .catch(error => console.error('Error:', error));
        }
    </script>
</body>
</html>
