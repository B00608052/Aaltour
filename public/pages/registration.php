<?php
// Initialize the session
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
    <title>Member Registration</title>
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
            margin-bottom: 10px;
            border-radius: 10px;
        }
        button {
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        .inputName{
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
                <span>Already Have an Account?</span> <a href="./login.php"> sign in</a>
            </div>
            <br>
            <form id="registrationForm">
                <input type="email" placeholder=" Email" id="emailInput" name="email" required>
                <span class="error-message" id="emailError"></span>

                <div class="name-container">
                    <input class="inputName" type="text" placeholder=" First Name" id="firstNameInput" name="firstName" required>
                    <input class="inputName" type="text" placeholder=" Last Name" id="lastNameInput" name="lastName" required>
                </div>

                <input type="text" id="usernameInput" placeholder=" Account Name" name="username" required>

                <input type="password" placeholder=" Password" id="passwordInput" name="password" required>

                <input type="password" id="confirmPasswordInput" placeholder=" Confirm Password" name="confirmPassword" required>
                <span class="error-message" id="confirmPasswordError"></span>

                <button id="registerBtn" type="button" onclick="register()">Register</button>
            </form>
        </div>
    </section>


    <script>
        function register() {
            // Reset error messages
            document.getElementById('emailError').textContent = '';
            document.getElementById('confirmPasswordError').textContent = '';

            // Get input values
            var email = document.getElementById('emailInput').value;
            var username = document.getElementById('usernameInput').value;
            var password = document.getElementById('passwordInput').value;
            var confirmPassword = document.getElementById('confirmPasswordInput').value;
            var firstName = document.getElementById('firstNameInput').value;
            var lastName = document.getElementById('lastNameInput').value;

            // Check if all required fields are filled
            var requiredFields = ['emailInput', 'usernameInput', 'passwordInput', 'confirmPasswordInput', 'firstNameInput', 'lastNameInput'];
            for (var i = 0; i < requiredFields.length; i++) {
                var field = requiredFields[i];
                var value = document.getElementById(field).value.trim();

                if (value === '') {
                    alert('Please fill in all fields');
                    return; // 終止註冊流程
                }
            }

            // Validate email format
            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                document.getElementById('emailError').textContent = 'Please enter a valid email address';
                return;
            }


            // Validate password match
            if (password !== confirmPassword) {
                document.getElementById('confirmPasswordError').textContent = 'Passwords do not match';
                return;
            }

            // Continue with the registration process
            var form = document.getElementById("registrationForm");
            var formData = new FormData(form);

            // Use Fetch API to send data to the backend
            fetch('../pages/register.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Registration successful!');
                    // Redirect the user to the routepick.html page
                    window.location.href = './routepick.php';
                } else {
                    alert('Registration failed: ' + data.message);
                }
            })
            .catch(error => console.error('Error:', error));
        }
    </script>
</body>
</html>

