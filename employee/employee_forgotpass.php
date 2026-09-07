<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/icons/evsu_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/employeeforgotpass.css">
    <title>Forgot Password Employee | Smart Petitioned Subject Management System</title>
</head>
<body>

    <div class="main">
        <div class="forgotpass">
            <img src="/assets/icons/evsu_logo.png" alt="evsulogo">
            <h2>Forgot Password</h2>
            <p>Enter your EVSU email to receive an OTP</p>
            <div class="inputers">
                <form action="employee_forgotpass.php" method="post">
                    <input type="email" name="email" id="email" placeholder="yourname@evsu.edu.ph" pattern="[a-zA-Z0-9._%+-]+@evsu\.edu\.ph" title="Please enter a valid EVSU email address" required>
                    <div class="clicker">
                        <button type="submit">Send OTP</button>
                    </div>
                </form>
                <div class="clicker">
                    <button type="button" class="backer" onclick="employeePage()">Back to login</button>
                </div>
            </div>
        </div>
    </div>

    <script src="/assets/js/nextpage.js"></script>
    
</body>
</html>