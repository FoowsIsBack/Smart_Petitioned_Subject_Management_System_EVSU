<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/vicepresident_dashboard.css">
    <link rel="shortcut icon" href="/assets/icons/evsu_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <title>University Vice President | Dashboard</title>
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
                        <p>Dr. Benedicto T. Militante, Jr.</p>
                        <span class="dropdown_arrow">⌄</span>
                    </div>
                    <div class="profile_dropdown" id="profileDropdown">
                        <div class="profile_info">
                            <p>benedictomilitante@evsu.edu.ph</p>
                            <span>Vice President for Academic Affairs</span>
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
                    <h3>UNIVERSITY VICE PRESIDENT</h3>
                </div>
                <nav class="sidebar_nav">
                    <button class="dashboard">Dashboard</button>
                </nav>
            </aside>
            <main class="content">
                <div class="studentwelcome">
                    <h3>Vice President for Academic Affairs Approval Queue</h3>
                    <p>Review petition requests requiring your approval or action.</p>
                </div>
                <div class="reports_container">
                    <div class="report_section">
                        <h4 class="section_title">Petition Overview</h4>
                        <div class="dashboard_cards">
                            <div id="card2" class="report_card">
                                <span>AWAITING MY APPROVAL</span>
                                <h2>0</h2>
                            </div>
                            <div id="card3" class="report_card">
                                <span>ACTED ON</span>
                                <h2>0</h2>
                            </div>
                            <div id="card4" class="report_card">
                                <span>STUDENTS AFFECTED</span>
                                <h2>0</h2>
                            </div>
                        </div>
                    </div>
                    <div class="report_section">
                        <h4 class="section_title">Per-Subject Summary</h4>
                        <div class="table_card_container">
                            <div class="table_toolbar">
                                <div class="search_box">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                    <input type="text" placeholder="Search reference or subject">
                                </div>
                                <div class="filter_box">
                                    <select name="status_filter" id="statusFilter">
                                        <option value="">All statuses</option>
                                        <option value="AWAITING MY APPROVAL">Awaiting My Approval</option>
                                        <option value="FULLY APPROVED">Fully Approved</option>
                                        <option value="REJECTED">Rejected</option>
                                        <option value="CLASS ACTIVATED">Class Activated</option>
                                    </select>
                                </div>
                            </div>
                            <div class="table_responsive">
                                <table class="reports_table">
                                    <thead>
                                        <tr>
                                            <th>Reference</th>
                                            <th>Subject</th>
                                            <th>Petitioners</th>
                                            <th>Instructor</th>
                                            <th>Status</th>
                                            <th class="text_center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if (!empty($subject_summary)): ?>
                                            <?php foreach ($subject_summary as $row): ?>
                                                <?php 
                                                    $status_upper = strtoupper($row['status'] ?? '');
                                                    $badge_class = '';
                                                    if (in_array($status_upper, ['CLASS ACTIVATED', 'FULLY APPROVED'])) {
                                                        $badge_class = 'green';
                                                    } elseif (in_array($status_upper, ['AWAITING PAYMENT', 'FOR DEPARTMENT HEAD REVIEW', 'GATHERING PETITIONERS'])) {
                                                        $badge_class = 'yellow';
                                                    } elseif ($status_upper === 'REJECTED') {
                                                        $badge_class = 'red';
                                                    }
                                                ?>
                                                <tr>
                                                    <td class="ref_code"><?php echo htmlspecialchars($row['reference'] ?? 'EVSU-PSMS-2026-0001'); ?></td>
                                                    <td>
                                                        <div class="subject_cell">
                                                            <span class="subject_code"><?php echo htmlspecialchars($row['subject_code'] ?? $row['subject']); ?></span>
                                                            <span class="subject_title"><?php echo htmlspecialchars($row['subject_title'] ?? 'Subject Description'); ?></span>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <span class="petitioner_count"><?php echo htmlspecialchars($row['petitioners']); ?></span>
                                                        <span class="petitioner_min">/ <?php echo htmlspecialchars($row['min_petitioners'] ?? '8'); ?> min</span>
                                                    </td>
                                                    <td class="instructor_name"><?php echo htmlspecialchars($row['instructor']); ?></td>
                                                    <td>
                                                        <span class="status_badge <?php echo $badge_class; ?>">
                                                            <span class="badge_dot"></span>
                                                            <?php echo htmlspecialchars($status_upper); ?>
                                                        </span>
                                                    </td>
                                                    <td class="text_center">
                                                        <button type="button" class="btn_open">Open</button>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <tr class="empty_row">
                                                <td colspan="6">
                                                    <div class="empty_state">
                                                        <i class="fa-solid fa-folder-open"></i>
                                                        <p>No record found</p>
                                                        <span>There are currently no subject petition records available.</span>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                            <?php if (!empty($subject_summary)): ?>
                                <div class="table_footer">
                                    <span class="footer_info">Showing <?php echo count($subject_summary); ?> of 10 petition group(s)</span>
                                    <div class="pagination">
                                        <button type="button" class="page_btn" disabled><i class="fa-solid fa-chevron-left"></i></button>
                                        <span class="page_num">1 / 2</span>
                                        <button type="button" class="page_btn"><i class="fa-solid fa-chevron-right"></i></button>
                                    </div>
                                </div>
                            <?php endif; ?>
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