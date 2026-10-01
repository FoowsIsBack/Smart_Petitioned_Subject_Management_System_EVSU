<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/department_students.css">
    <link rel="shortcut icon" href="/assets/icons/evsu_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <title>Department Head | Students</title>
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
                        <span class="notification_badge" id="notificationBadge">0</span>
                        <div class="notification_dropdown" id="notificationDropdown">
                            <div class="notification_header">
                                <strong>Notifications</strong>
                                <button type="button" id="markAllRead">Mark all as read</button>
                            </div>
                        </div>
                    </div>
                    <div class="student_container">
                        <p>Jaymel Morpos</p>
                        <span class="dropdown_arrow">⌄</span>
                    </div>
                    <div class="profile_dropdown" id="profileDropdown">
                        <div class="profile_info">
                            <p>jaymelmorpos@evsu.edu.ph</p>
                            <span>IT - Department Head</span>
                        </div>
                        <div class="profile_divider"></div>
                        <a href="/employee/employee_login.php">Logout</a>
                    </div>
                </div>
            </header>
        </div>
        <div class="main_content">
            <aside class="sidebar">
                <div class="sidebar_header">
                    <h3>DEPARTMENT HEAD</h3>
                </div>
                <nav class="sidebar_nav">
                    <button onclick="departDashboard()">Dashboard</button>
                    <button onclick="departGroups()">Petition Groups</button>
                    <button onclick="departIntructors()">Instructors</button>
                    <button onclick="departSubjects()">Subjects</button>
                    <button class="dashboard">Students</button>
                    <button onclick="departReports()">Reports</button>
                </nav>
            </aside>
            <main class="content">
                <div class="studentwelcome">
                    <h3>Student Records</h3>
                    <p>Petitioning students in the current term.</p>
                </div>
                <div class="students_table_card">
                    <div class="table_controls">
                        <div class="search_box">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="text" placeholder="Search name, ID, or course">
                        </div>
                    </div>
                    <div class="table_responsive">
                        <table class="students_table">
                            <thead>
                                <tr>
                                    <th>Student</th>
                                    <th>Student ID</th>
                                    <th>Course</th>
                                    <th>Year Level</th>
                                    <th>Petitioned Subjects</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="empty_row">
                                    <td colspan="5">
                                        <div class="empty_state">
                                            <i class="fa-solid fa-folder-open"></i>
                                            <p>No student records found</p>
                                            <span>There are currently no petitioning students recorded in this term.</span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
    
    <script src="/assets/js/nextpage.js"></script>
    <script src="/assets/js/student_dropdown.js"></script>
    
</body>
</html>