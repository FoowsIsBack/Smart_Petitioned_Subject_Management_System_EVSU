<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/department_subjects.css">
    <link rel="shortcut icon" href="/assets/icons/evsu_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <title>Department Head | Subjects</title>
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
                    <button class="dashboard">Subjects</button>
                    <button onclick="departStudents()">Students</button>
                    <button onclick="departReports()">Reports</button>
                </nav>
            </aside>
            <main class="content">
                <div class="instructor_header_container">
                    <div class="studentwelcome">
                        <h3>Subject Management</h3>
                        <p>Subjects available for petition in the current term.</p>
                    </div>
                    <button class="btn_add_instructor" onclick="toggleAddModal(true)">
                        <i class="fa-solid fa-plus"></i> Add Subject
                    </button>
                </div>
                <div class="students_table_card">
                    <div class="table_responsive">
                        <table class="students_table">
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Descriptive Title</th>
                                    <th>Units</th>
                                    <th>Type</th>
                                    <th>Petitioners</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="instructor_name_bold">IT 312</td>
                                    <td class="text_muted">Systems Integration and Architecture</td>
                                    <td class="text_muted">3</td>
                                    <td class="text_muted">Lecture</td>
                                    <td class="text_muted">12</td>
                                    <td>
                                        <button class="action_btn edit_btn" 
                                                onclick="openEditModal('1', 'IT 312', '3', 'Systems Integration and Architecture', 'Lecture', 'Information Technology')">
                                            <i class="fa-solid fa-pen"></i> Edit
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="instructor_name_bold">IT 214</td>
                                    <td class="text_muted">Data Structures and Algorithms</td>
                                    <td class="text_muted">3</td>
                                    <td class="text_muted">Laboratory</td>
                                    <td class="text_muted">9</td>
                                    <td>
                                        <button class="action_btn edit_btn" 
                                                onclick="openEditModal('2', 'IT 214', '3', 'Data Structures and Algorithms', 'Laboratory', 'Information Technology')">
                                            <i class="fa-solid fa-pen"></i> Edit
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <div class="modal_overlay" id="addSubjectModal">
        <div class="modal_content">
            <div class="modal_header">
                <h2>Add Subject</h2>
                <button class="close_btn" onclick="toggleAddModal(false)">&times;</button>
            </div>
            <form action="process_add_subject.php" method="POST" class="modal_body">
                <div class="form_group">
                    <label for="addSubjectCode">Subject Code</label>
                    <input type="text" id="addSubjectCode" name="subject_code" placeholder="e.g. IT 312" required>
                </div>
                <div class="form_group">
                    <label for="addUnits">Units</label>
                    <input type="number" id="addUnits" name="units" placeholder="e.g. 3" min="1" required>
                </div>
                <div class="form_group">
                    <label for="addDescriptiveTitle">Descriptive Title</label>
                    <input type="text" id="addDescriptiveTitle" name="descriptive_title" placeholder="e.g. Systems Integration and Architecture" required>
                </div>
                <div class="form_group">
                    <label for="addType">Type</label>
                    <select id="addType" name="type" required>
                        <option value="Lecture" selected>Lecture</option>
                        <option value="Laboratory">Laboratory</option>
                    </select>
                </div>
                <div class="form_group">
                    <label for="addDepartment">Department</label>
                    <input type="text" id="addDepartment" name="department" placeholder="e.g. Information Technology" required>
                </div>
                <div class="modal_footer">
                    <button type="button" class="btn_cancel" onclick="toggleAddModal(false)">Cancel</button>
                    <button type="submit" class="btn_submit">Save Subject</button>
                </div>
            </form>
        </div>
    </div>

    <div class="modal_overlay" id="editSubjectModal">
        <div class="modal_content">
            <div class="modal_header">
                <h2>Edit Subject</h2>
                <button class="close_btn" onclick="toggleEditModal(false)">&times;</button>
            </div>
            <form action="process_edit_subject.php" method="POST" class="modal_body">
                <input type="hidden" id="editSubjectId" name="subject_id">
                <div class="form_group">
                    <label for="editSubjectCode">Subject Code</label>
                    <input type="text" id="editSubjectCode" name="subject_code" required>
                </div>
                <div class="form_group">
                    <label for="editUnits">Units</label>
                    <input type="number" id="editUnits" name="units" min="1" required>
                </div>
                <div class="form_group">
                    <label for="editDescriptiveTitle">Descriptive Title</label>
                    <input type="text" id="editDescriptiveTitle" name="descriptive_title" required>
                </div>
                <div class="form_group">
                    <label for="editType">Type</label>
                    <select id="editType" name="type" required>
                        <option value="Lecture">Lecture</option>
                        <option value="Laboratory">Laboratory</option>
                    </select>
                </div>
                <div class="form_group">
                    <label for="editDepartment">Department</label>
                    <input type="text" id="editDepartment" name="department" required>
                </div>
                <div class="modal_footer">
                    <button type="button" class="btn_cancel" onclick="toggleEditModal(false)">Cancel</button>
                    <button type="submit" class="btn_submit">Update Subject</button>
                </div>
            </form>
        </div>
    </div>

    <script src="/assets/js/nextpage.js"></script>
    <script src="/assets/js/student_dropdown.js"></script>
    <script src="/assets/js/instructor_modal.js"></script>

</body>
</html>