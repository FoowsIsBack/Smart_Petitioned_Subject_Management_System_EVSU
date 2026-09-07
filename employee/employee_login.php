<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/icons/evsu_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/employeelogin.css">
    <title>Employee Login | Smart Petitioned Subject Management System</title>
</head>
<body>

    <div class="main">
        <div class="login_card">
            <img src="/assets/icons/evsu_logo.png" alt="evsulogo">
            <h2>Petition Management Portal</h2>
            <h4>Eastern Visayas University</h4>
            <div class="userinput">
                <h2>Sign In</h2>
                <form action="employee_login.php" method="post">
                    <input type="text" name="user" id="user" placeholder="Username" required>
                    <div class="password">
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        <img class="toggle_password" src="/assets/icons/showpass.png" alt="Toggle password" onclick="togglePassword()">
                    </div>
                    <div class="clicker">
                        <button type="submit">Login</button>
                    </div>
                </form>
                <div class="forgotpass">
                    <a href="employee_forgotpass.php">Forgot password?</a>
                </div>
            </div>
        </div>
        <div class="backpage">
            <a href="/index.php">⬅ Back to Homepage</a>
        </div>
    </div>

    <script src="/assets/js/showpass.js"></script>
    
</body>
</html>