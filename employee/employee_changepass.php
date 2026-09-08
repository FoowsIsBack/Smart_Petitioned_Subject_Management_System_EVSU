<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/icons/evsu_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/employee_changepass.css">
    <title>Change Password| Smart Petitioned Subject Management System</title>
</head>
<body>

    <div class="main">
        <div class="forgotpass">
            <img src="/assets/icons/evsu_logo.png" alt="evsulogo">
            <h2>Change Password</h2>
            <p>Update your password to keep your account secure</p>
            <div class="inputers">
                <form action="employee_changepass.php" method="post">
                    <div class="password_field">
                        <input type="password" name="currentpass" id="currentpass" placeholder="Current Password" autocomplete="current-password" onfocus="showLegend('currentpass', 'legend1')" required>
                        <label id="legend1" for="currentpass">Current Password</label>
                        <img class="toggle_password1" src="/assets/icons/showpass.png" alt="Toggle password" onclick="togglePassword1()">
                    </div>
                    <div class="password_field2">
                        <input type="password" name="newpass" id="newpass" placeholder="New Password" autocomplete="new-password" onfocus="showLegend('newpass', 'legend2')" required>
                        <label id="legend2" for="newpass">New Password</label>
                        <img class="toggle_password2" src="/assets/icons/showpass.png" alt="Toggle password" onclick="togglePassword2()">
                    </div>
                    <div class="password_requirements">
                        <p>Password must contain:</p>
                        <ul>
                            <li>✓ 8+ characters</li>
                            <li>✓ Uppercase</li>
                            <li>✓ Lowercase</li>
                            <li>✓ Number</li>
                            <li>✓ Special character</li>
                        </ul>
                    </div>
                    <div class="password_field3">
                        <input type="password" name="confirmnewpass" id="confirmnewpass" placeholder="Confirm New Password" autocomplete="new-password" onfocus="showLegend('confirmnewpass', 'legend3')" required>
                        <label id="legend3" for="confirmnewpass">Confirm New Password</label>
                        <img class="toggle_password3" src="/assets/icons/showpass.png" alt="Toggle password" onclick="togglePassword3()">
                    </div>
                    <div class="clicker">
                        <button type="submit">Change Password</button>
                    </div>
                </form>
                <div class="clicker">
                    <button type="button" class="backer" onclick="employeePage()">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <script src="/assets/js/nextpage.js"></script>
    <script src="/assets/js/showpass.js"></script>
    <script src="/assets/js/showlabel.js"></script>
    
</body>
</html>