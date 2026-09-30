<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/department_reports.css">
    <link rel="shortcut icon" href="/assets/icons/evsu_logo.png" type="image/x-icon">
    <title>Department Head | Reports</title>
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
                    <button onclick="departDashboard()">Dashboard</button>
                    <button onclick="departGroups()">Petition Groups</button>
                    <button onclick="departIntructors()">Instructors</button>
                    <button onclick="departSubjects()">Subjects</button>
                    <button onclick="departStudents()">Students</button>
                    <button class="dashboard">Reports</button>
                </nav>
            </aside>
            <main class="content">
                <div class="studentwelcome">
                    <h3>Petition Reports</h3>
                    <p>Term summary for the current semester.</p>
                </div>
                <div class="reports_container">
                    <div class="report_section">
                        <h4 class="section_title">Petition Overview</h4>
                        <div class="dashboard_cards">
                            <div id="card1" class="report_card">
                                <span>TOTAL PETITIONS</span>
                                <h2>0</h2>
                            </div>
                            <div id="card2" class="report_card">
                                <span>PETITIONING STUDENTS</span>
                                <h2>0</h2>
                            </div>
                            <div id="card3" class="report_card">
                                <span>FOR MY REVIEW</span>
                                <h2>0</h2>
                            </div>
                            <div id="card4" class="report_card">
                                <span>GATHERING PETITIONERS</span>
                                <h2>0</h2>
                            </div>
                        </div>
                    </div>
                    <div class="report_section">
                        <h4 class="section_title">Workflow Distribution</h4>
                        <div class="workflow_card">
                            <?php 
                            $max_val = !empty($workflow_counts) ? max($workflow_counts) : 1;
                            if ($max_val <= 0) $max_val = 1;
                            ?>
                            <?php if (!empty($workflow_counts)): ?>
                                <?php foreach ($workflow_counts as $label => $count): ?>
                                    <?php 
                                        $percentage = round(($count / $max_val) * 100);
                                    ?>
                                    <div class="workflow_item">
                                        <div class="wf_info">
                                            <span class="wf_label"><?php echo htmlspecialchars($label); ?></span>
                                            <span class="wf_value"><?php echo htmlspecialchars($count); ?></span>
                                        </div>
                                        <div class="wf_bar_bg">
                                            <div class="wf_bar_fill" style="width: <?php echo $percentage; ?>%;"></div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <div class="workflow_item">
                                    <div class="wf_info">
                                        <span class="wf_label">No data available</span>
                                        <span class="wf_value">0</span>
                                    </div>
                                    <div class="wf_bar_bg">
                                        <div class="wf_bar_fill" style="width: 0%;"></div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="report_section">
                        <h4 class="section_title">Per-Subject Summary</h4>
                        <div class="table_responsive">
                            <table class="reports_table">
                                <thead>
                                    <tr>
                                        <th>Subject</th>
                                        <th>Petitioners</th>
                                        <th>Instructor</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="subject_code">IT 311</td>
                                        <td>12</td>
                                        <td>Instructor A</td>
                                        <td><span class="status_badge approved">Approved</span></td>
                                    </tr>
                                    <tr>
                                        <td class="subject_code">IT 305</td>
                                        <td>8</td>
                                        <td>Instructor B</td>
                                        <td><span class="status_badge gathering">Gathering</span></td>
                                    </tr>
                                    <tr>
                                        <td class="subject_code">IT 210</td>
                                        <td>15</td>
                                        <td>Instructor C</td>
                                        <td><span class="status_badge review">For Review</span></td>
                                    </tr>
                                </tbody>
                            </table>
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