<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/department_dashboard.css">
    <link rel="shortcut icon" href="/assets/icons/evsu_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <title>Department Head | Dashboard</title>
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
                        <p>Jaymel Morpos</p>
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
                    <h3>DEPARTMENT HEAD</h3>
                </div>
                <nav class="sidebar_nav">
                    <button class="dashboard">Dashboard</button>
                    <button onclick="departGroups()">Petition Groups</button>
                    <button onclick="departIntructors()">Instructors</button>
                    <button onclick="departSubjects()">Subjects</button>
                    <button onclick="departStudents()">Students</button>
                    <button onclick="departReports()">Reports</button>
                </nav>
            </aside>
            <main class="content">
                <div class="studentwelcome">
                    <h3>Welcome, Jaymel Morpos</h3>
                    <p>Petition demand, endorsements, and instructor capacity.</p>
                </div>
                <div class="dashboard_cards">
                    <div class="card1">
                        <div>
                            <p>FOR MY REVIEW</p>
                            <h3>0</h3>
                        </div>
                        <i class="fa-solid fa-file-circle-check card_icon"></i>
                    </div>
                    <div class="card2">
                        <div>
                            <p>GATHERING PETITIONERS</p>
                            <h3>0</h3>
                        </div>
                        <i class="fa-solid fa-users card_icon"></i>
                    </div>
                    <div class="card3">
                        <div>
                            <p>ENDORSED / IN PROCESS</p>
                            <h3>0</h3>
                        </div>
                        <i class="fa-solid fa-spinner card_icon"></i>
                    </div>
                    <div class="card4">
                        <div>
                            <p>TOTAL PETITIONERS</p>
                            <h3>0</h3>
                        </div>
                        <i class="fa-solid fa-user-group card_icon"></i>
                    </div>
                </div>
                <div class="instructor_loading">
                    <div class="instructor_loading_header">
                        <h4>Instructor Loading</h4>
                        <p>Current petition class assignments</p>
                    </div>
                    <div class="instructor_list">
                        <div class="instructor_item">
                            <div class="instructor_details">
                                <strong>Morpos, Joseph Jaymel S.</strong>
                                <span>Capstone Project and Research 2 · ₱480/hr</span>
                            </div>
                            <div class="load_badge">2 load</div>
                        </div>
                        <div class="instructor_item">
                            <div class="instructor_details">
                                <strong>Aseo, Marc Fritz Y.</strong>
                                <span>System Administration and Maintenance · ₱620/hr</span>
                            </div>
                            <div class="load_badge">1 load</div>
                        </div>
                        <div class="instructor_item">
                            <div class="instructor_details">
                                <strong>Perante, Wilferd Jude A.</strong>
                                <span>Object Oriented Programming · ₱420/hr</span>
                            </div>
                            <div class="load_badge">3 load</div>
                        </div>
                        <div class="instructor_item">
                            <div class="instructor_details">
                                <strong>Pol, Apas Miro</strong>
                                <span>Event Driven · ₱740/hr</span>
                            </div>
                            <div class="load_badge">0 load</div>
                        </div>
                        <div class="instructor_item">
                            <div class="instructor_details">
                                <strong>Bertulfo, Edward</strong>
                                <span>CCNA · ₱450/hr</span>
                            </div>
                            <div class="load_badge">2 load</div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="/assets/js/nextpage.js"></script>
    <script src="/assets/js/student_dropdown.js"></script>
    
</body>
</html>