<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/icons/evsu_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/admin_rejected.css">
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
                    <div class="sidebar_dropdown open">
                        <button type="button" class="dashboard" id="petitionManagementButton">
                            <span>Petition Management</span>
                            <span class="dropdown_arrow">⌄</span>
                        </button>
                        <div class="sidebar_dropdown_menu show" id="petitionManagementMenu">
                            <button type="button" onclick="adminPmanagement()">All Petitions</button>
                            <button type="button" onclick="adminPending()">Pending Petitions</button>
                            <button type="button" onclick="adminApproved()">Approved Petitions</button>
                            <button type="button" class="all_petitions">Rejected Petitions</button>
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
                    <h3>Rejected Petitions</h3>
                    <p>View petitions that were rejected during the workflow.</p>
                </div>
                <div class="petition_toolbar">
                    <div class="petition_search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" placeholder="Search Petition...">
                    </div>
                    <button type="button" class="refresh_button">
                        <i class="fa-solid fa-rotate-right"></i>
                        Refresh
                    </button>
                </div>
                <div class="petition_table_container">
                    <table class="petition_table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Subject</th>
                                <th>Student</th>
                                <th>Program</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="petitionTableBody">
                            <tr>
                                <td>#00019</td>
                                <td>IT 305</td>
                                <td>Mark A.</td>
                                <td>BSIT</td>
                                <td>
                                    <button type="button" class="view_button">View Petition</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#00015</td>
                                <td>IT 210</td>
                                <td>Peter R.</td>
                                <td>BSCS</td>
                                <td>
                                    <button type="button" class="view_button">View Petition</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="no_petitions" id="noPetitions">
                        <i class="fa-solid fa-folder-open"></i>
                        <h4>No rejected petitions found</h4>
                        <p>There are currently no petitions that were rejected during the workflow.</p>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="/assets/js/nextpage.js"></script>
    <script src="/assets/js/admin_dropdown.js"></script>
    <script src="/assets/js/refresh.js"></script>

</body>
</html>