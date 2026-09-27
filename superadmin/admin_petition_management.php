<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/icons/evsu_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/superadmin_petition_management.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <title>Super Admin Petition Management - EVSU Petition Portal</title>
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
                        <a href="/superadmin/admin_login.php">Logout</a>
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
                        <button type="button" onclick="adminDashboard()">Dashboard</button>
                        <div class="sidebar_dropdown">
                            <button type="button" class="dashboard" id="petitionManagementButton">
                                <span>Petition Management</span>
                                <span class="dropdown_arrow">⌄</span>
                            </button>
                            <div class="sidebar_dropdown_menu" id="petitionManagementMenu">
                                <button type="button" class="all_petitions">All Petitions</button>
                                <button type="button" onclick="adminPending()">Pending Petitions</button>
                                <button type="button" onclick="adminApproved()">Approved Petitions</button>
                                <button type="button" onclick="adminRejected()">Rejected Petitions</button>
                            </div>
                        </div>
                        <button type="button" onclick="adminUmanagement()">User Management</button>
                        <button type="button" onclick="adminSmanagement()">Subject Management</button>
                        <button type="button" onclick="adminWorkflow()">Workflow Monitoring</button>
                        <button type="button" onclick="adminReports()">Reports & Analytics</button>
                        <button type="button" onclick="adminLogs()">System Logs</button>
                        <button type="button" onclick="adminSettings()">System Settings</button>
                    </nav>
            </aside>
            <main class="content">
                <div class="admin_welcome">
                    <h3>Petition Management</h3>
                    <p>View and manage all petition requests.</p>
                </div>
                <div class="dashboard_cards">
                    
                </div>
            </main>
        </div>
    </div>

    <script src="/assets/js/nextpage.js"></script>
    <script src="/assets/js/admin_dropdown.js"></script>

</body>
</html>