<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/department_groups.css">
    <link rel="shortcut icon" href="/assets/icons/evsu_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <title>Department Head | Petition Groups</title>
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
                    <button class="dashboard">Petition Groups</button>
                    <button onclick="departIntructors()">Instructors</button>
                    <button onclick="departSubjects()">Subjects</button>
                    <button onclick="departStudents()">Students</button>
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
                            <input type="text" id="searchInput" placeholder="Search reference or subject">
                        </div>
                        <div class="filter_box">
                            <select class="status_filter" id="statusFilter">
                                <option value="all">All status</option>
                                <option value="CLASS ACTIVATED">Class Activated</option>
                                <option value="FULLY APPROVED">Fully Approved</option>
                                <option value="AWAITING PAYMENT">Awaiting Payment</option>
                                <option value="FOR DEPARTMENT HEAD REVIEW">For Department Head Review</option>
                                <option value="GATHERING PETITIONERS">Gathering Petitioners</option>
                                <option value="REJECTED">Rejected</option>
                            </select>
                        </div>
                    </div>
                    <div class="table_responsive">
                        <table class="students_table">
                            <thead>
                                <tr>
                                    <th>Reference</th>
                                    <th>Subject</th>
                                    <th>Petitioners</th>
                                    <th>Instructor</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($students)): ?>
                                    <?php foreach ($students as $row): ?>
                                        <tr>
                                            <td class="ref_no"><?php echo htmlspecialchars($row['reference_no']); ?></td>
                                            <td>
                                                <strong class="subj_code"><?php echo htmlspecialchars($row['subject_code']); ?></strong>
                                                <span class="subj_title"><?php echo htmlspecialchars($row['subject_title']); ?></span>
                                            </td>
                                            <td>
                                                <strong class="count_bold"><?php echo htmlspecialchars($row['current_petitioners']); ?></strong> 
                                                <span class="count_muted">/ <?php echo htmlspecialchars($row['min_petitioners']); ?> min</span>
                                            </td>
                                            <td class="instructor_name <?php echo empty($row['instructor']) ? 'unassigned' : ''; ?>">
                                                <?php echo !empty($row['instructor']) ? htmlspecialchars($row['instructor']) : 'Not yet assigned'; ?>
                                            </td>
                                            <td>
                                                <?php 
                                                    $status = $row['status'];
                                                    $badgeClass = 'badge_orange'; // default
                                                    if ($status == 'CLASS ACTIVATED') $badgeClass = 'badge_green';
                                                    elseif ($status == 'FULLY APPROVED') $badgeClass = 'badge_green_filled';
                                                    elseif ($status == 'AWAITING PAYMENT') $badgeClass = 'badge_yellow';
                                                    elseif ($status == 'REJECTED') $badgeClass = 'badge_red';
                                                ?>
                                                <span class="status_badge <?php echo $badgeClass; ?>">• <?php echo htmlspecialchars($status); ?></span>
                                            </td>
                                            <td>
                                                <a href="view_petition.php?id=<?php echo $row['id']; ?>" class="action_btn">Open</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="6" class="table_empty_state">
                                            <i class="fa-solid fa-folder-open"></i>
                                            <p>No student petition records found.</p>
                                            <span>Try adjusting your search or filter options.</span>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="table_footer">
                        <p>Showing <?php echo !empty($students) ? count($students) : 0; ?> petition group(s)</p>
                        <div class="pagination">
                            <button class="page_btn" disabled><i class="fa-solid fa-chevron-left"></i></button>
                            <span class="page_number">1 / 1</span>
                            <button class="page_btn" disabled><i class="fa-solid fa-chevron-right"></i></button>
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