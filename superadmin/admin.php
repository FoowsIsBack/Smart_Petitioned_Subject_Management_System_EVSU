<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/icons/evsu_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/superadmin_dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <title>Super Admin Dashboard - EVSU Petition Portal</title>
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
                        <p>Admin</p>
                        <span class="dropdown_arrow">⌄</span>
                    </div>
                    <div class="profile_dropdown" id="profileDropdown">
                        <div class="profile_info">
                            <p>admin@evsu.edu.ph</p>
                            <span>Super Administrator</span>
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
                    <h3>SUPER ADMIN</h3>
                </div>
                <nav class="sidebar_nav">
                    <button class="dashboard">Dashboard</button>
                    <button onclick="adminPmanagement()">Petition Management</button>
                    <button onclick="adminUmanagement()">User Management </button>
                    <button onclick="adminSmanagement()">Subject Management</button>
                    <button onclick="adminWorkflow()">Workflow Monitoring</button>
                    <button onclick="adminReports()">Reports & Analytics </button>
                    <button onclick="adminLogs()">System Logs</button>
                    <button onclick="adminSettings()">System Settings</button>
                </nav>
            </aside>
            <main class="content">
                <div class="admin_welcome">
                    <h3>Dashboard</h3>
                    <p>Overview of petition activities and system operations.</p>
                </div>
                <div class="dashboard_cards">
                    <div class="card1">
                        <div>
                            <p>PETITIONS</p>
                            <h3>0</h3>
                        </div>
                        <div class="card_icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M6 3h9l3 3v15H6z"/>
                                <path d="M15 3v4h4"/>
                                <path d="M9 12h6"/>
                                <path d="M9 16h6"/>
                            </svg>
                        </div>
                    </div>
                    <div class="card2">
                        <div>
                            <p>STUDENTS</p>
                            <h3>0</h3>
                        </div>
                        <div class="card_icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 19v-1a5 5 0 0 1 5-5h2a5 5 0 0 1 5 5v1"/>
                                <circle cx="10" cy="7" r="4"/>
                                <path d="M17 11a4 4 0 0 1 3 4v1"/>
                            </svg>
                        </div>
                    </div>
                    <div class="card3">
                        <div>
                            <p>FACULTY</p>
                            <h3>0</h3>
                        </div>
                        <div class="card_icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M3 10l9-5 9 5-9 5z"/>
                                <path d="M7 12v5"/>
                                <path d="M17 12v5"/>
                                <path d="M5 20h14"/>
                                <path d="M9 17h6"/>
                            </svg>
                        </div>
                    </div>
                    <div class="card4">
                        <div>
                            <p>PENDING</p>
                            <h3>0</h3>
                        </div>
                        <div class="card_icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="9"/>
                                <path d="M12 7v5l3 2"/>
                            </svg>
                        </div>
                    </div>
                    <div class="card5">
                        <div>
                            <p>SUBJECTS</p>
                            <h3>0</h3>
                        </div>
                        <div class="card_icon">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 5h6a2 2 0 0 1 2 2v12a2 2 0 0 0-2-2H4z"/>
                                <path d="M20 5h-6a2 2 0 0 0-2 2v12a2 2 0 0 1 2-2h6z"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    
    <script src="/assets/js/nextpage.js"></script>
    <script src="/assets/js/admin_dropdown.js"></script>

</body>
</html>