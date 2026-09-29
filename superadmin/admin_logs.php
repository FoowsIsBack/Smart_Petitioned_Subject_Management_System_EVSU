<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/icons/evsu_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/admin_systemlogs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <title>Super Admin System Logs - EVSU Petition Portal</title>
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
                    <button onclick="adminDashboard()">Dashboard</button>
                    <button onclick="adminPmanagement()">Petition Management</button>
                    <button onclick="adminUmanagement()">User Management </button>
                    <button onclick="adminSmanagement()">Subject Management</button>
                    <button onclick="adminWorkflow()">Workflow Monitoring</button>
                    <button onclick="adminReports()">Reports & Analytics </button>
                    <button class="dashboard">System Logs</button>
                </nav>
            </aside>
            <main class="content">
                <div class="admin_welcome">
                    <h3>System Logs</h3>
                    <p>Track system activities, audit trails, and user actions.</p>
                </div>
                <div class="dashboard_cards">
                    <div class="logs_toolbar">
                        <div class="petition_search">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="text" id="logSearch" placeholder="Search Activity...">
                        </div>
                        <div class="user_actions">
                            <select id="logUserFilter">
                                <option value="">User</option>
                                <option value="Admin">Admin</option>
                                <option value="Faculty">Faculty</option>
                                <option value="Student">Student</option>
                            </select>
                            <select id="logActivityFilter">
                                <option value="">Activity</option>
                                <option value="Approved Petition">Approved Petition</option>
                                <option value="Added Subject">Added Subject</option>
                                <option value="Reviewed Petition">Reviewed Petition</option>
                                <option value="Submitted Petition">Submitted Petition</option>
                            </select>
                            <select id="logDateFilter">
                                <option value="">Date</option>
                                <option value="Today">Today</option>
                                <option value="Yesterday">Yesterday</option>
                                <option value="This Week">This Week</option>
                            </select>
                        </div>
                    </div>
                    <div class="petition_table_container">
                        <table class="petition_table">
                            <thead>
                                <tr>
                                    <th>Date & Time</th>
                                    <th>User</th>
                                    <th>Activity</th>
                                    <th>IP Address</th>
                                </tr>
                            </thead>
                            <tbody id="logTableBody">
                                <tr>
                                    <td>Sep 27 20:41</td>
                                    <td>Admin</td>
                                    <td>Approved Petition</td>
                                    <td>192.168.1.10</td>
                                </tr>
                                <tr>
                                    <td>Sep 27 20:35</td>
                                    <td>Admin</td>
                                    <td>Added Subject</td>
                                    <td>192.168.1.10</td>
                                </tr>
                                <tr>
                                    <td>Sep 27 20:21</td>
                                    <td>Faculty</td>
                                    <td>Reviewed Petition</td>
                                    <td>192.168.1.12</td>
                                </tr>
                                <tr>
                                    <td>Sep 27 20:10</td>
                                    <td>Student</td>
                                    <td>Submitted Petition</td>
                                    <td>192.168.1.15</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="petition_pagination">
                        <p>Showing 1–10 of 1,245 logs</p>
                        <div class="pagination_buttons">
                            <button type="button">
                                <i class="fa-solid fa-chevron-left"></i>
                            </button>
                            <button type="button" class="active">1</button>
                            <button type="button">2</button>
                            <button type="button">
                                <i class="fa-solid fa-chevron-right"></i>
                            </button>
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