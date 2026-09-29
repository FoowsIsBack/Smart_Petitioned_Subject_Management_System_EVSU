<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/icons/evsu_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/admin_workflow.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <title>Super Admin Workflow Monitoring - EVSU Petition Portal</title>
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
                    <button type="button" onclick="adminSmanagement()">Subject Management</button>
                    <button type="button" class="dashboard">Workflow Monitoring</button>
                    <button type="button" onclick="adminReports()">Reports & Analytics</button>
                    <button type="button" onclick="adminLogs()">System Logs</button>
                </nav>
            </aside>
            <main class="content">
                <div class="admin_welcome">
                    <h3>Workflow Monitoring</h3>
                    <p>Monitor the progress of petitions across the approval workflow.</p>
                </div>
                <div class="petition_toolbar">
                    <div class="petition_search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" id="workflowSearch" placeholder="Search Petition...">
                    </div>
                    <div class="user_actions">
                        <button type="button" class="refresh_button">
                            <i class="fa-solid fa-rotate-right"></i> Refresh
                        </button>
                    </div>
                </div>
                <div class="petition_table_container">
                    <table class="petition_table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Subject</th>
                                <th>Student</th>
                                <th>Current Step</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="workflowTableBody">
                            <tr>
                                <td>#00024</td>
                                <td>IT 311</td>
                                <td>Juan D.</td>
                                <td>Dept. Head</td>
                                <td>Pending</td>
                                <td>
                                    <button type="button" class="view_button track_workflow_button">Track</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#00023</td>
                                <td>IT 305</td>
                                <td>Mark A.</td>
                                <td>Faculty</td>
                                <td>Review</td>
                                <td>
                                    <button type="button" class="view_button track_workflow_button">Track</button>
                                </td>
                            </tr>
                            <tr>
                                <td>#00022</td>
                                <td>IT 210</td>
                                <td>Ana B.</td>
                                <td>Accounting</td>
                                <td>Pending</td>
                                <td>
                                    <button type="button" class="view_button track_workflow_button">Track</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="no_petitions" id="noWorkflow">
                        <i class="fa-solid fa-route"></i>
                        <h4>No petitions found</h4>
                        <p>There are currently no petitions being monitored.</p>
                    </div>
                </div>
                <div class="petition_pagination">
                    <p id="paginationText">Showing 1–3 of 3 petitions</p>
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
            <div class="workflow_modal" id="workflowModal">
                <div class="workflow_modal_content">
                    <div class="workflow_modal_header">
                        <div>
                            <h3 id="workflowModalTitle">Petition #00024 — IT 311</h3>
                            <p id="workflowModalStudent">Student: Juan D.</p>
                        </div>
                        <button type="button" class="workflow_modal_close" id="closeWorkflowModal">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div>
                    <div class="workflow_modal_body">
                        <div class="workflow_step completed">
                            <div class="workflow_icon">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="workflow_step_content">
                                <h4>Student</h4>
                                <span>Petition Filed</span>
                            </div>
                        </div>
                        <div class="workflow_line completed_line"></div>
                        <div class="workflow_step completed">
                            <div class="workflow_icon">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <div class="workflow_step_content">
                                <h4>Department Head</h4>
                                <span>Approved</span>
                            </div>
                        </div>
                        <div class="workflow_line current_line"></div>
                        <div class="workflow_step current">
                            <div class="workflow_icon">
                                <i class="fa-solid fa-circle"></i>
                            </div>
                            <div class="workflow_step_content">
                                <h4>Faculty</h4>
                                <span>Current Step</span>
                            </div>
                        </div>
                        <div class="workflow_line"></div>
                        <div class="workflow_step waiting">
                            <div class="workflow_icon">
                                <i class="fa-regular fa-circle"></i>
                            </div>
                            <div class="workflow_step_content">
                                <h4>Accounting</h4>
                                <span>Waiting</span>
                            </div>
                        </div>
                        <div class="workflow_line"></div>
                        <div class="workflow_step waiting">
                            <div class="workflow_icon">
                                <i class="fa-regular fa-circle"></i>
                            </div>
                            <div class="workflow_step_content">
                                <h4>Cashier</h4>
                                <span>Waiting</span>
                            </div>
                        </div>
                        <div class="workflow_line"></div>
                        <div class="workflow_step waiting">
                            <div class="workflow_icon">
                                <i class="fa-regular fa-circle"></i>
                            </div>
                            <div class="workflow_step_content">
                                <h4>Campus Director</h4>
                                <span>Waiting</span>
                            </div>
                        </div>
                        <div class="workflow_line"></div>
                        <div class="workflow_step waiting">
                            <div class="workflow_icon">
                                <i class="fa-regular fa-circle"></i>
                            </div>
                            <div class="workflow_step_content">
                                <h4>VPAA</h4>
                                <span>Waiting</span>
                            </div>
                        </div>
                        <div class="workflow_line"></div>
                        <div class="workflow_step waiting">
                            <div class="workflow_icon">
                                <i class="fa-regular fa-circle"></i>
                            </div>
                            <div class="workflow_step_content">
                                <h4>University President</h4>
                                <span>Waiting</span>
                            </div>
                        </div>
                        <div class="workflow_line"></div>
                        <div class="workflow_step waiting">
                            <div class="workflow_icon">
                                <i class="fa-regular fa-circle"></i>
                            </div>
                            <div class="workflow_step_content">
                                <h4>Registrar</h4>
                                <span>Waiting</span>
                            </div>
                        </div>
                    </div>
                    <div class="workflow_modal_footer">
                        <button type="button" class="subject_cancel_button" id="closeWorkflowButton">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/assets/js/nextpage.js"></script>
    <script src="/assets/js/admin_dropdown.js"></script>
    <script src="/assets/js/refresh.js"></script>
    <script src="/assets/js/admin_workflow.js"></script>

</body>
</html>