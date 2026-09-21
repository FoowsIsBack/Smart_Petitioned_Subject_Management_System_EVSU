<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/icons/evsu_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/otpVerify.css">
    <title>Student | Code Verification</title>
</head>
<body>

    <div class="main">
        <div class="login_card">
            <img src="/assets/icons/evsu_logo.png" alt="evsulogo">
            <h2>Verify Your Email</h2>
            <h4>We sent a 6-digit verification code to student@evsu.edu.ph</h4>
            <div class="userinput">
                <form action="otpVerify.php" method="post">
                    <div class="otp_container">
                        <input type="text" name="otp[]" maxlength="1" inputmode="numeric" pattern="[0-9]" autocomplete="one-time-code" required>
                        <input type="text" name="otp[]" maxlength="1" inputmode="numeric" pattern="[0-9]" required>
                        <input type="text" name="otp[]" maxlength="1" inputmode="numeric" pattern="[0-9]" required>
                        <input type="text" name="otp[]" maxlength="1" inputmode="numeric" pattern="[0-9]" required>
                        <input type="text" name="otp[]" maxlength="1" inputmode="numeric" pattern="[0-9]" required>
                        <input type="text" name="otp[]" maxlength="1" inputmode="numeric" pattern="[0-9]" required>
                    </div>
                        <div class="code_expire">
                            <p>Code expires in <span>05:00</span></p>
                        </div>
                    <div class="clicker">
                        <button type="submit">Verify Code</button>
                    </div>
                    <div class="notReceive_code">
                        <h4>Didn't receive the code?</h4>
                        <button type="button" id="resend_code">Resend Code</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="backpage">
            <a href="/student/student_login.php">⬅ Back</a>
        </div>
    </div>

    <script src="/assets/js/otp_copypaste.js"></script>
    
</body>
</html>