<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XYZ Clinic - Login</title>
    <style>
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* General styling */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            justify-content: space-between;
            background: url('b.webp') repeat center center fixed;
            background-repeat: repeat; /* Repeat the background image */
            background-size: auto; /* Maintain original resolution */
            background-position: top left; Positioning the repeated image
        }
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255, 255, 255, 0.9); /* Light overlay */
            z-index: 1;
        }

        /* Division links */
        div a {
            text-decoration: none;
            color: black;
        }
        a:visited {
        color: rgb(0, 0, 0);
        }

        a:hover {
        color: grey;
        }

        /* Header styling */
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #f4f4f4;
            border-bottom: 1px solid #ddd;
            font-weight: bold;
            z-index: 2; /* Ensure it appears above the overlay */

        }

        /* Header styling */
        header {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            font-weight: bold;
            border-bottom: 1px solid #ccc;
        }

        /* Navigation links */
        nav a {
            margin-right: 20px;
            text-decoration: none;
            color: black;
        }

        .sign-in {
            padding: 5px 15px;
            text-decoration: none;
            color: black;
        }

        /* Form container */
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-grow: 1;
        }

        /* Login form styling */
        .login-form {
            border: 1px solid #ddd;
            padding: 30px;
            border-radius: 5px;
            max-width: 400px;
            width: 100%;
            text-align: center;
            background-color: white;
        }

        .login-form input[type="email"],
        .login-form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: black;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .login-form a {
            color: black;
            text-decoration: none;
            font-size: 14px;
            text-decoration: underline;
        }

        /* Footer styling */
        footer {
            background-color: #f4f4f4;
            padding: 20px 0;
            text-align: center;
        }

        .footer-content {
            display: flex;
            justify-content: center;
            align-items: center;
            max-width: 800px;
            margin: 0 auto;
        }

        .footer-content div {
            margin: 0 20px;
            text-align: center;
        }

        .footer-content .separator {
            border-left: 1px solid #333;
            height: 40px;
            margin: 0 20px;
        }

        .footer-content p {
            font-size: 14px;
            color: black;
            line-height: 1.5;
        }

        /* Bold styling for "Contact us" and "Location" */
        .footer-content p strong {
            font-weight: bold;
        }

        .footer-bottom {
            font-size: 14px;
            color: black;
            margin-top: 10px;
        }

        .login-form div {
            color: black;
            text-decoration: none;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <header>
        <div><a class="index-link" href="index.html">XYZ CLINIC</a></div>
        <nav>
            <a href="dashboard.php">Dashboard</a>
            <a href="doctors.php">Doctors</a>
            <a href="loginform.php" class="sign-in">Sign In</a>
        </nav>
    </header>

    <div class="login-container">
        <div class="login-form">
            <h2>Reset Password</h2>
            <form id="reset-form" action="files/php/pw-change.php" method="POST">
                <!-- <label for="password">Password:</label> -->
                <input type="password" id="password" name="password" placeholder="Password" required><span class="errors" id="password-error"></span>
                <div id="requirements" class="requirements" style = "display:none;">
                    <h4>Password Requirements:</h4>
                    <ul>
                        <li>At least 8 characters long</li>
                        <li>Must contain at least 1 special character</li>
                        <li>Must contain at least 1 uppercase letter</li>
                    </ul>
                </div>
                <!-- <label for="confirm-password">Confirm Password:</label> -->
                <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password" required><span class="errors" id="cfm-pw-error"></span>
                <button type="submit">Reset Password</button>
            </form>
        </div>
    </div>

    <footer>
        <div class="footer-content">
            <div>
                <p>XYZ CLINIC</p>
            </div>
            <div class="separator"></div>
            <div>
                <p><strong>Contact us</strong><br>81234567</p>
            </div>
            <div class="separator"></div>
            <div>
                <p><strong>Location</strong><br>Singapore 812345<br>Nanyang Heights</p>
            </div>
        </div>
        <div class="footer-bottom">
            © 2010 — 2020 Privacy — Terms
        </div>
    </footer>
    <script type="text/javascript" src="files/javascript/resetValidation.js"></script>
</body>
</html>
