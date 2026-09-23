<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/icons/evsu_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/student_apply.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <title>Apply for Petition - EVSU Petition Portal</title>
</head>
<body>

    <div class="main">
        <div class="main2">
            <header>
                <div class="brand">
                    <img src="/assets/icons/evsu_logo.png" alt="evsulogo">
                    <p>Smart Petitioned Subject Management System</p>
                </div>
                <div class="student_profile" id="profileButton">
                    <div class="notification" id="notificationButton">
                        <i class="fa-solid fa-bell"></i>
                        <span class="notification_badge" id="notificationBadge">2</span>
                        <div class="notification_dropdown" id="notificationDropdown">
                            <div class="notification_header">
                                <strong>Notifications</strong>
                                <button type="button" id="markAllRead">Mark all as read</button>
                            </div>
                        </div>
                    </div>
                    <div class="student_container">
                        <p>Kiryll Dave</p>
                        <span class="dropdown_arrow">⌄</span>
                    </div>
                    <div class="profile_dropdown" id="profileDropdown">
                        <div class="profile_info">
                            <p>kirylldavebangcoyo@evsu.edu.ph</p>
                            <span>2023-10453</span>
                        </div>
                        <div class="profile_divider"></div>
                        <a href="#">My Profile</a>
                        <a href="/student/student_login.php">Logout</a>
                    </div>
                </div>
            </header>
        </div>
        <div class="main_content">
            <aside class="sidebar">
                <div class="sidebar_header">
                    <h3>STUDENT</h3>
                </div>
                <nav class="sidebar_nav">
                    <button onclick="studentDashboard()">Dashboard</button>
                    <button class="apply">Apply for Petition</button>
                    <button onclick="myPetition()">My Petition</button>
                    <button onclick="paymentAssessment()">Payment Assessment</button>
                </nav>
            </aside>
            <main class="content">

            </main>
        </div>
    </div>
    

    <script src="/assets/js/nextpage.js"></script>
    <script src="/assets/js/student_dropdown.js"></script>
    
</body>
</html>