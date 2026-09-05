<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/icons/evsu_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/studentlogin.css">
    <title>Student Login | Smart Petitioned Subject Management System</title>
</head>
<body>

    <div class="main">
        <div class="login_card">
            <img src="/assets/icons/evsu_logo.png" alt="evsulogo">
            <h2>Student Petiton Portal</h2>
            <h4>Eastern Visayas University</h4>
            <div class="userinput">
                <h2>Sign In</h2>
                <form action="student_login.php" method="post">
                    <input type="text" name="studentid" id="studentid" placeholder="Student ID" required>
                    <input type="email" name="evsuemail" id="evsuemail" placeholder="Evsu Email Address" pattern="[a-zA-Z0-9._%+-]+@evsu\.edu\.ph" required>
                </form>
                <div class="clicker">
                    <button type="submit">Sent OTP</button>
                </div>
            </div>
        </div>
        <div class="backpage">
            <a href="/index.php">⬅ Back to Homepage</a>
        </div>
    </div>

</body>
</html>