<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/icons/evsu_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/student_dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <title>Student Dashboard - EVSU Petition Portal</title>
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
                    <button class="dashboard">Dashboard</button>
                    <button onclick="applyPetition()">Apply for Petition</button>
                    <button onclick="myPetition()">My Petition</button>
                    <button onclick="paymentAssessment()">Payment Assessment</button>
                </nav>
            </aside>
            <main class="content">
                <div class="studentwelcome">
                    <h3>Welcome, Kiryll Dave</h3>
                    <p>BS Information Technology / 3rd Year</p>
                    <p>Student ID: 2023-10453</p>
                </div>
                <div class="dashboard_cards">
                    <div class="card1">
                        <div>
                            <p>MY PETITIONS</p>
                            <h3>0</h3>
                        </div>
                        <svg class="card_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <path d="M6 3h9l3 3v15H6V3z"/>
                            <path d="M15 3v4h3"/>
                            <path d="M9 11h6"/>
                            <path d="M9 15h6"/>
                        </svg>
                    </div>
                    <div class="card2">
                        <div>
                            <p>APPROVED</p>
                            <h3>0</h3>
                        </div>
                        <svg class="card_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <circle cx="12" cy="12" r="9"/>
                            <path d="m8 12 2.5 2.5L16 9"/>
                        </svg>
                    </div>
                    <div class="card3">
                        <div>
                            <p>AMOUNT PAYABLE</p>
                            <h3>₱0.00</h3>
                        </div>
                        <svg class="card_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                            <rect x="3" y="5" width="18" height="14" rx="2"/>
                            <path d="M3 10h18"/>
                            <path d="M7 15h4"/>
                        </svg>
                    </div>
                </div>
            </main>
        </div>
    </div>
    
    <script src="/assets/js/nextpage.js"></script>
    <script src="/assets/js/student_dropdown.js"></script>
    
</body>
</html>