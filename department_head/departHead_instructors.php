<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/department_instructors.css">
    <link rel="shortcut icon" href="/assets/icons/evsu_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <title>Department Head | Instructors</title>
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
                    <button class="dashboard">Instructors</button>
                    <button onclick="departSubjects()">Subjects</button>
                    <button onclick="departStudents()">Students</button>
                    <button onclick="departReports()">Reports</button>
                </nav>
            </aside>
            <main class="content">
                <div class="instructor_header_container">
                    <div class="studentwelcome">
                        <h3>Instructor Management</h3>
                        <p>Ranks and hourly rates drive automatic petition fee computation.</p>
                    </div>
                    <button class="btn_add_instructor" id="openAddModal">
                        <i class="fa-solid fa-plus"></i> Add Instructor
                    </button>
                </div>
                <div class="students_table_card">
                    <div class="table_responsive">
                        <table class="students_table">
                            <thead>
                                <tr>
                                    <th>Instructor</th>
                                    <th>Rank</th>
                                    <th>Department</th>
                                    <th>Rate / hr</th>
                                    <th>Load</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($instructors)): ?>
                                    <?php foreach ($instructors as $row): ?>
                                        <tr>
                                            <td class="instructor_name_bold"><?php echo htmlspecialchars($row['name']); ?></td>
                                            <td class="text_muted"><?php echo htmlspecialchars($row['rank']); ?></td>
                                            <td class="text_muted"><?php echo htmlspecialchars($row['department']); ?></td>
                                            <td class="text_muted">₱<?php echo number_format($row['rate'], 2); ?></td>
                                            <td class="text_muted"><?php echo htmlspecialchars($row['load_count']); ?></td>
                                            <td>
                                                <a href="edit_instructor.php?id=<?php echo $row['id']; ?>" class="action_btn edit_btn">
                                                    <i class="fa-solid fa-pen"></i> Edit
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="6" class="table_empty_state">
                                            <i class="fa-solid fa-user-tie"></i>
                                            <p>No instructor records found.</p>
                                            <span>Click "+ Add Instructor" to create a new entry.</span>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="table_footer">
                        <p>Showing <?php echo !empty($instructors) ? count($instructors) : 0; ?> instructor(s)</p>
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
    <div class="modal_overlay" id="addInstructorModal">
        <div class="modal_container">
            <div class="modal_header">
                <h3><i class="fa-solid fa-user-plus"></i> Add New Instructor</h3>
                <button type="button" class="modal_close" id="closeAddModal">&times;</button>
            </div>
            <form action="add_instructor_process.php" method="POST" id="addInstructorForm">
                <div class="modal_body">
                    <div class="form_group">
                        <label for="full_name">Full Name</label>
                        <input type="text" id="full_name" name="full_name" placeholder="e.g. Engr. Rodel M. Tabuena" required>
                    </div>
                    <div class="form_row">
                        <div class="form_group">
                            <label for="academic_rank">Academic Rank</label>
                            <select id="academic_rank" name="academic_rank" required>
                                <option value="" disabled selected>Select Rank</option>
                                <option value="Instructor I">Instructor I</option>
                                <option value="Instructor II">Instructor II</option>
                                <option value="Instructor III">Instructor III</option>
                                <option value="Assistant Professor I">Assistant Professor I</option>
                                <option value="Assistant Professor II">Assistant Professor II</option>
                                <option value="Associate Professor I">Associate Professor I</option>
                                <option value="Professor I">Professor I</option>
                                <option value="Professor II">Professor II</option>
                            </select>
                        </div>
                        <div class="form_group">
                            <label for="department">Department</label>
                            <select id="department" name="department" required>
                                <option value="" disabled selected>Select Department</option>
                                <option value="Information Technology">Information Technology</option>
                                <option value="Computer Science">Culinary Arts</option>
                                <option value="General Education">Electrical Engineering</option>
                                <option value="Engineering">Civil Engineering</option>
                            </select>
                        </div>
                    </div>
                    <div class="form_row">
                        <div class="form_group">
                            <label for="hourly_rate">Hourly Rate (₱)</label>
                            <input type="number" step="0.01" id="hourly_rate" name="hourly_rate" placeholder="0.00" required>
                        </div>
                        <div class="form_group">
                            <label for="current_load">Current Load</label>
                            <input type="number" id="current_load" name="current_load" placeholder="0" min="0" value="0" required>
                        </div>
                    </div>
                </div>
                <div class="modal_footer">
                    <button type="button" class="btn_cancel" id="cancelAddModal">Cancel</button>
                    <button type="submit" class="btn_submit"><i class="fa-solid fa-check"></i> Save Instructor</button>
                </div>
            </form>
        </div>
    </div>
    
    <script src="/assets/js/nextpage.js"></script>
    <script src="/assets/js/student_dropdown.js"></script>
    <script src="/assets/js/instructor_modal.js"></script>
    
</body>
</html>