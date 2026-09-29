<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/icons/evsu_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/admin_reports.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <title>Super Admin Reports & Analytics - EVSU Petition Portal</title>
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
                    <button onclick="adminUmanagement()">User Management</button>
                    <button onclick="adminSmanagement()">Subject Management</button>
                    <button onclick="adminWorkflow()">Workflow Monitoring</button>
                    <button class="dashboard">Reports & Analytics</button>
                    <button onclick="adminLogs()">System Logs</button>
                </nav>
            </aside>
            <main class="content">
                <div class="admin_welcome">
                    <h3>Reports & Analytics</h3>
                    <p>View system statistics and petition performance.</p>
                </div>
                <div class="reports_toolbar">
                    <div class="reports_filter">
                        <select id="reportPeriod">
                            <option value="this_year">This Year</option>
                            <option value="last_year">Last Year</option>
                            <option value="this_month">This Month</option>
                            <option value="last_month">Last Month</option>
                        </select>
                    </div>
                    <button type="button" class="generate_report_button">
                        <i class="fa-solid fa-file-lines"></i>
                        Generate Report
                    </button>
                </div>
                <div class="dashboard_cards">
                    <div class="dashboard_card">
                        <div class="dashboard_card_icon">
                            <i class="fa-solid fa-file-lines"></i>
                        </div>
                        <div class="dashboard_card_content">
                            <span>Total Petitions</span>
                            <h3>124</h3>
                        </div>
                    </div>
                    <div class="dashboard_card">
                        <div class="dashboard_card_icon">
                            <i class="fa-solid fa-circle-check"></i>
                        </div>
                        <div class="dashboard_card_content">
                            <span>Approved</span>
                            <h3>86</h3>
                        </div>
                    </div>
                    <div class="dashboard_card">
                        <div class="dashboard_card_icon">
                            <i class="fa-solid fa-clock"></i>
                        </div>
                        <div class="dashboard_card_content">
                            <span>Pending</span>
                            <h3>24</h3>
                        </div>
                    </div>
                    <div class="dashboard_card">
                        <div class="dashboard_card_icon">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </div>
                        <div class="dashboard_card_content">
                            <span>Rejected</span>
                            <h3>14</h3>
                        </div>
                    </div>
                </div>
                <div class="reports_grid">
                    <div class="report_panel activity_panel">
                        <div class="report_panel_header">
                            <div>
                                <h3>Petition Activity</h3>
                                <p>Monthly petition activity for the selected period.</p>
                            </div>
                        </div>
                        <div class="activity_chart">
                            <div class="chart_y_axis">
                                <span>40</span>
                                <span>30</span>
                                <span>20</span>
                                <span>10</span>
                                <span>0</span>
                            </div>
                            <div class="chart_area">
                                <div class="chart_grid">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <div class="chart_bars">
                                    <div class="chart_column">
                                        <div class="chart_bar" style="height: 45%;"></div>
                                        <span>Jan</span>
                                    </div>
                                    <div class="chart_column">
                                        <div class="chart_bar" style="height: 60%;"></div>
                                        <span>Feb</span>
                                    </div>
                                    <div class="chart_column">
                                        <div class="chart_bar" style="height: 40%;"></div>
                                        <span>Mar</span>
                                    </div>
                                    <div class="chart_column">
                                        <div class="chart_bar" style="height: 75%;"></div>
                                        <span>Apr</span>
                                    </div>
                                    <div class="chart_column">
                                        <div class="chart_bar" style="height: 55%;"></div>
                                        <span>May</span>
                                    </div>
                                    <div class="chart_column">
                                        <div class="chart_bar" style="height: 85%;"></div>
                                        <span>Jun</span>
                                    </div>
                                    <div class="chart_column">
                                        <div class="chart_bar" style="height: 65%;"></div>
                                        <span>Jul</span>
                                    </div>
                                    <div class="chart_column">
                                        <div class="chart_bar" style="height: 90%;"></div>
                                        <span>Aug</span>
                                    </div>
                                    <div class="chart_column">
                                        <div class="chart_bar" style="height: 70%;"></div>
                                        <span>Sep</span>
                                    </div>
                                    <div class="chart_column">
                                        <div class="chart_bar" style="height: 50%;"></div>
                                        <span>Oct</span>
                                    </div>
                                    <div class="chart_column">
                                        <div class="chart_bar" style="height: 80%;"></div>
                                        <span>Nov</span>
                                    </div>
                                    <div class="chart_column">
                                        <div class="chart_bar" style="height: 95%;"></div>
                                        <span>Dec</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="report_panel status_panel">
                        <div class="report_panel_header">
                            <div>
                                <h3>Petition Status</h3>
                                <p>Current petition distribution.</p>
                            </div>
                        </div>
                        <div class="status_chart">
                            <div class="status_circle">
                                <div>
                                    <strong>124</strong>
                                    <span>Total</span>
                                </div>
                            </div>
                            <div class="status_legend">
                                <div>
                                    <span class="legend_dot approved"></span>
                                    <p>Approved</p>
                                    <strong>86</strong>
                                </div>
                                <div>
                                    <span class="legend_dot pending"></span>
                                    <p>Pending</p>
                                    <strong>24</strong>
                                </div>
                                <div>
                                    <span class="legend_dot rejected"></span>
                                    <p>Rejected</p>
                                    <strong>14</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="report_panel subjects_panel">
                    <div class="report_panel_header">
                        <div>
                            <h3>Most Petitioned Subjects</h3>
                            <p>Subjects with the highest number of petitions.</p>
                        </div>
                    </div>
                    <div class="subject_report_list">
                        <div class="subject_report_item">
                            <div class="subject_report_info">
                                <strong>IT 311 - Information Systems</strong>
                                <span>24 petitions</span>
                            </div>
                            <div class="subject_progress">
                                <div style="width: 100%;"></div>
                            </div>
                        </div>
                        <div class="subject_report_item">
                            <div class="subject_report_info">
                                <strong>IT 305 - Web Development</strong>
                                <span>19 petitions</span>
                            </div>
                            <div class="subject_progress">
                                <div style="width: 79%;"></div>
                            </div>
                        </div>
                        <div class="subject_report_item">
                            <div class="subject_report_info">
                                <strong>IT 210 - Database Systems</strong>
                                <span>15 petitions</span>
                            </div>
                            <div class="subject_progress">
                                <div style="width: 63%;"></div>
                            </div>
                        </div>
                        <div class="subject_report_item">
                            <div class="subject_report_info">
                                <strong>IT 401 - Capstone Project</strong>
                                <span>12 petitions</span>
                            </div>
                            <div class="subject_progress">
                                <div style="width: 50%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="report_actions">
                    <button type="button" class="export_pdf_button">
                        <i class="fa-solid fa-file-pdf"></i>
                        Export PDF
                    </button>
                    <button type="button" class="export_excel_button">
                        <i class="fa-solid fa-file-excel"></i>
                        Export Excel
                    </button>
                </div>
            </main>
        </div>
    </div>

    <script src="/assets/js/nextpage.js"></script>
    <script src="/assets/js/admin_dropdown.js"></script>

</body>
</html>