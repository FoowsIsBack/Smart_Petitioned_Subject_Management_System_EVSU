<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/icons/evsu_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/admin_usermanagement.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <title>Super Admin User Management - EVSU Petition Portal</title>
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
                                <button type="button" id="markAllRead">
                                    Mark all as read
                                </button>
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
                    <button type="button" class="dashboard">User Management</button>
                    <button type="button" onclick="adminSmanagement()">Subject Management</button>
                    <button type="button" onclick="adminWorkflow()">Workflow Monitoring</button>
                    <button type="button" onclick="adminReports()">Reports & Analytics</button>
                    <button type="button" onclick="adminLogs()">System Logs</button>
                </nav>
            </aside>
            <main class="content">
                <div class="admin_welcome">
                    <h3>User Management</h3>
                    <p>
                        Manage students, faculty, employees, and system administrators.
                    </p>
                </div>
                <div class="petition_toolbar">
                    <div class="petition_search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <input type="text" placeholder="Search User...">
                    </div>
                    <div class="user_actions">
                        <button type="button" class="add_user_button">
                            <i class="fa-solid fa-user-plus"></i> Add Employee</button>
                        <button type="button" class="refresh_button">
                            <i class="fa-solid fa-rotate-right"></i> Refresh</button>
                    </div>
                </div>
                <div class="petition_table_container">
                    <table class="petition_table">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="userTableBody">
                            <tr>
                                <td>2022-001</td>
                                <td>Juan Dela Cruz</td>
                                <td>juan@evsu.edu.ph</td>
                                <td>Accounting</td>
                                <td>
                                    <button type="button" class="view_button">View</button>
                                    <button type="button" class="view_button">Edit</button>
                                    <button type="button" class="view_button">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2022-002</td>
                                <td>Maria Santos</td>
                                <td>maria@evsu.edu.ph</td>
                                <td>Department Head</td>
                                <td>
                                    <button type="button" class="view_button">View</button>
                                    <button type="button" class="view_button">Edit</button>
                                    <button type="button" class="view_button">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>EMP-001</td>
                                <td>Pedro Reyes</td>
                                <td>pedro@evsu.edu.ph</td>
                                <td>Faculty</td>
                                <td>
                                    <button type="button" class="view_button">View</button>
                                    <button type="button" class="view_button">Edit</button>
                                    <button type="button" class="view_button">Delete</button>
                                </td>
                            </tr>
                            <tr>
                                <td>ADM-001</td>
                                <td>Admin User</td>
                                <td>admin@evsu.edu.ph</td>
                                <td>Admin</td>
                                <td>
                                    <button type="button" class="view_button">View</button>
                                    <button type="button" class="view_button">Edit</button>
                                    <button type="button" class="view_button">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="no_petitions" id="noUsers">
                        <i class="fa-solid fa-users"></i>
                        <h4>No users found</h4>
                        <p>There are currently no users available.</p>
                    </div>
                </div>
            </main>
            <div class="employee_modal" id="employeeModal">
                <div class="employee_modal_content">
                    <div class="employee_modal_header">
                        <h3>Add Employee</h3>
                        <button type="button" class="employee_modal_close" id="closeEmployeeModal"><i class="fa-solid fa-xmark"></i></button>
                    </div>
                    <div class="employee_modal_body">
                        <div class="employee_form_row">
                            <div class="employee_form_group">
                                <label for="employeeId">Employee ID</label>
                                <input type="text" id="employeeId" placeholder="e.g. EMP-002">
                            </div>
                            <div class="employee_form_group">
                                <label for="employeeRole">Role</label>
                                <select id="employeeRole">
                                    <option value="">Select Role</option>
                                    <option value="Faculty">Faculty</option>
                                    <option value="Department Head">Department Head</option>
                                    <option value="Accounting">Accounting</option>
                                    <option value="Cashier">Cashier</option>
                                    <option value="Campus Director">Campus Director</option>
                                    <option value="VPAA">VPAA</option>
                                    <option value="University President">University President</option>
                                    <option value="Registrar">Registrar</option>
                                </select>
                            </div>
                        </div>
                        <div class="employee_form_row">
                            <div class="employee_form_group">
                                <label for="employeeFirstName">First Name</label>
                                <input type="text" id="employeeFirstName" placeholder="e.g. Kiryll Dave">
                            </div>
                            <div class="employee_form_group">
                                <label for="employeeLastName">Last Name</label>
                                <input type="text" id="employeeLastName" placeholder="e.g. Bangcoyo">
                            </div>
                        </div>
                        <div class="employee_form_group">
                            <label for="employeeEmail">EVSU Email</label>
                            <input type="email" id="employeeEmail" placeholder="e.g. kirylldavebangcoyo@evsu.edu.ph">
                        </div>
                        <div class="employee_form_group">

                            <label for="employeeDepartment">Department</label>
                            <input type="text" id="employeeDepartment" placeholder="e.g. Information Technology">
                        </div>
                        <div class="employee_form_row">
                            <div class="employee_form_group">
                                <label for="employeePassword">Password</label>
                                <input type="password" id="employeePassword" placeholder="Enter password">
                            </div>
                            <div class="employee_form_group">
                                <label for="employeeConfirmPassword">Confirm Password</label>
                                <input type="password" id="employeeConfirmPassword" placeholder="Confirm password">
                            </div>
                        </div>
                    </div>
                    <div class="employee_modal_footer">
                        <button type="button" class="employee_cancel_button" id="cancelEmployeeModal">Cancel</button>
                        <button type="button" class="employee_save_button" id="saveEmployee">
                            <i class="fa-solid fa-user-plus"></i>Add Employee</button>
                    </div>
                </div>
            </div> 
        </div>
    </div>

    <script src="/assets/js/nextpage.js"></script>
    <script src="/assets/js/admin_dropdown.js"></script>
    <script src="/assets/js/admin_user.js"></script>
    <script src="/assets/js/refresh.js"></script>

</body>
</html>