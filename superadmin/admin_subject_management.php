<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/icons/evsu_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/admin_subject.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <title>Super Admin Subject Management - EVSU Petition Portal</title>
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
                    <button type="button" onclick="adminPmanagement()">Petition Management</button>
                    <button type="button" onclick="adminUmanagement()">User Management</button>
                    <button type="button" class="dashboard">Subject Management</button>
                    <button type="button" onclick="adminWorkflow()">Workflow Monitoring</button>
                    <button type="button" onclick="adminReports()">Reports & Analytics</button>
                    <button type="button" onclick="adminLogs()">System Logs</button>
                </nav>
            </aside>
            <main class="content">
                <div class="admin_welcome">
                    <h3>Subject Management</h3>
                    <p>Manage subjects available for petition and class formation.</p>
                </div>
                <div class="petition_toolbar">
                    <div class="petition_search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" id="subjectSearch" placeholder="Search Subject...">
                    </div>
                    <div class="user_actions">
                        <button type="button" class="add_user_button">
                            <i class="fa-solid fa-plus"></i> Add Subject
                        </button>
                        <button type="button" class="refresh_button">
                            <i class="fa-solid fa-rotate-right"></i> Refresh
                        </button>
                    </div>
                </div>
                <div class="petition_table_container">
                    <table class="petition_table">
                        <thead>
                            <tr>
                                <th>Code</th>
                                <th>Subject</th>
                                <th>Units</th>
                                <th>Program</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="subjectTableBody">
                            <tr>
                                <td>IT 311</td>
                                <td>Information Systems</td>
                                <td>3</td>
                                <td>BSIT</td>
                                <td>
                                    <button type="button" class="view_button edit_subject_button">Edit</button>
                                    <button type="button" class="view_button view_subject_button">View</button>
                                    <button type="button" class="view_button view_subject_button">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>IT 305</td>
                                <td>Web Development</td>
                                <td>3</td>
                                <td>BSIT</td>
                                <td>
                                    <button type="button" class="view_button edit_subject_button">Edit</button>
                                    <button type="button" class="view_button view_subject_button">View</button>
                                    <button type="button" class="view_button view_subject_button">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>IT 210</td>
                                <td>Database Systems</td>
                                <td>3</td>
                                <td>BSIT</td>
                                <td>
                                    <button type="button" class="view_button edit_subject_button">Edit</button>
                                    <button type="button" class="view_button view_subject_button">View</button>
                                    <button type="button" class="view_button view_subject_button">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>IT 401</td>
                                <td>Capstone Project</td>
                                <td>3</td>
                                <td>BSIT</td>
                                <td>
                                    <button type="button" class="view_button edit_subject_button">Edit</button>
                                    <button type="button" class="view_button view_subject_button">View</button>
                                    <button type="button" class="view_button view_subject_button">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="no_petitions" id="noSubjects">
                        <i class="fa-solid fa-book"></i>
                        <h4>No subjects found</h4>
                        <p>There are currently no subjects available.</p>
                    </div>
                </div>
                <div class="petition_pagination">
                    <p id="paginationText">Showing 1–4 of 4 subjects</p>
                    <div class="pagination_buttons">
                        <button type="button" id="previousPage">
                            <i class="fa-solid fa-chevron-left"></i>
                        </button>
                        <button type="button" class="active">1</button>
                        <button type="button" id="nextPage">
                            <i class="fa-solid fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </main>
            <div class="subject_modal" id="subjectModal">
                <div class="subject_modal_content">
                    <div class="subject_modal_header">
                        <h3>Add Subject</h3>
                        <button type="button" class="subject_modal_close" id="closeSubjectModal">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <div class="subject_modal_body">
                        <div class="subject_form_group">
                            <label for="subjectCode">Subject Code</label>
                            <input type="text" id="subjectCode" placeholder="e.g. IT 311">
                        </div>
                        <div class="subject_form_group">
                            <label for="subjectName">Subject Name</label>
                            <input type="text" id="subjectName" placeholder="e.g. Information Systems">
                        </div>
                        <div class="subject_form_row">
                            <div class="subject_form_group">
                                <label for="subjectUnits">Units</label>
                                <input type="number" id="subjectUnits" placeholder="e.g. 3" min="1" max="6">
                            </div>
                            <div class="subject_form_group">
                                <label for="subjectProgram">Program</label>
                                <select id="subjectProgram">
                                    <option value="">Select Program</option>
                                    <option value="BSIT">BSIT</option>
                                    <option value="BSCS">BSCS</option>
                                    <option value="BSIS">BSIS</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="subject_modal_footer">
                        <button type="button" class="subject_cancel_button" id="cancelSubjectModal">Cancel</button>
                        <button type="button" class="subject_save_button" id="saveSubject">
                            <i class="fa-solid fa-plus"></i> Add Subject
                        </button>
                    </div>
                </div>
            </div>
            <div class="subject_modal" id="editSubjectModal">
                <div class="subject_modal_content">
                    <div class="subject_modal_header">
                        <h3>Edit Subject</h3>
                        <button type="button" class="subject_modal_close" id="closeEditSubjectModal">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <div class="subject_modal_body">
                        <div class="subject_form_group">
                            <label for="editSubjectCode">Subject Code</label>
                            <input type="text" id="editSubjectCode" placeholder="e.g. IT 311">
                        </div>
                        <div class="subject_form_group">
                            <label for="editSubjectName">Subject Name</label>
                            <input type="text" id="editSubjectName" placeholder="e.g. Information Systems">
                        </div>
                        <div class="subject_form_row">
                            <div class="subject_form_group">
                                <label for="editSubjectUnits">Units</label>
                                <input type="number" id="editSubjectUnits" placeholder="e.g. 3" min="1" max="6">
                            </div>
                            <div class="subject_form_group">
                                <label for="editSubjectProgram">Program</label>
                                <select id="editSubjectProgram">
                                    <option value="">Select Program</option>
                                    <option value="BSIT">BSIT</option>
                                    <option value="BSCS">BSCS</option>
                                    <option value="BSIS">BSIS</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="subject_modal_footer">
                        <button type="button" class="subject_cancel_button" id="cancelEditSubjectModal">Cancel</button>
                        <button type="button" class="subject_save_button" id="updateSubject">
                            <i class="fa-solid fa-floppy-disk"></i> Save Changes
                        </button>
                    </div>
                </div>
            </div>
            <div class="subject_modal" id="viewSubjectModal">
                <div class="subject_modal_content">
                    <div class="subject_modal_header">
                        <h3>Subject Details</h3>
                        <button type="button" class="subject_modal_close" id="closeViewSubjectModal">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <div class="subject_modal_body">
                        <div class="subject_form_group">
                            <label for="viewSubjectCode">Subject Code</label>
                            <input type="text" id="viewSubjectCode" readonly>
                        </div>
                        <div class="subject_form_group">
                            <label for="viewSubjectName">Subject Name</label>
                            <input type="text" id="viewSubjectName" readonly>
                        </div>
                        <div class="subject_form_row">
                            <div class="subject_form_group">
                                <label for="viewSubjectUnits">Units</label>
                                <input type="text" id="viewSubjectUnits" readonly>
                            </div>
                            <div class="subject_form_group">
                                <label for="viewSubjectProgram">Program</label>
                                <input type="text" id="viewSubjectProgram" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="subject_modal_footer">
                        <button type="button" class="subject_cancel_button" id="closeViewSubjectButton">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/assets/js/nextpage.js"></script>
    <script src="/assets/js/admin_dropdown.js"></script>
    <script src="/assets/js/admin_subject.js"></script>
    <script src="/assets/js/refresh.js"></script>

</body>
</html>