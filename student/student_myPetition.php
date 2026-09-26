<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/icons/evsu_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/student_myPetition.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <title>My Petitions - EVSU Petition Portal</title>
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
                        <p>Kiryll Dave</p>
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
                    <h3>STUDENT</h3>
                </div>
                <nav class="sidebar_nav">
                    <button onclick="studentDashboard()">Dashboard</button>
                    <button onclick="applyPetition()">Apply for Petition</button>
                    <button class="myPetition">My Petition</button>
                    <button onclick="paymentAssessment()">Payment Assessment</button>
                </nav>
            </aside>
            <main class="content">
                <div class="mypetition_head">
                    <h3>My Petitions</h3>
                    <p>Manage your active subject petitions.</p>
                </div>
                <div class="petition_listing">
                    <div class="petition_controls">
                        <div class="search_box">
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <input type="text" id="searchInput" placeholder="Search reference or subject">
                        </div>
                        <div class="status_filter">
                            <select id="statusFilter">
                                <option value="all">All status</option>
                                <option value="gathering">Gathering Petitioners</option>
                                <option value="approved">Approved</option>
                                <option value="pending">Pending</option>
                            </select>
                        </div>
                    </div>
                    <div class="table_container">
                        <table>
                            <thead>
                                <tr>
                                    <th>Reference</th>
                                    <th>Subject</th>
                                    <th>Petitioners</th>
                                    <th>Instructor</th>
                                    <th>Status</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($petitions)): ?>
                                    <?php foreach ($petitions as $row): ?>
                                        <tr>
                                            <td class="ref_code"><?php echo htmlspecialchars($row['reference_no']); ?></td>
                                            <td>
                                                <div class="subject_code"><?php echo htmlspecialchars($row['subject_code']); ?></div>
                                                <div class="subject_name"><?php echo htmlspecialchars($row['subject_title']); ?></div>
                                            </td>
                                            <td>
                                                <span class="p_count"><?php echo htmlspecialchars($row['current_petitioners']); ?></span> 
                                                <span class="p_max">/ <?php echo htmlspecialchars($row['min_petitioners']); ?> min</span>
                                            </td>
                                            <td class="instructor_name"><?php echo htmlspecialchars($row['instructor']); ?></td>
                                            <td>
                                                <span class="status_badge status_gathering">
                                                    <span class="dot"></span> <?php echo strtoupper(htmlspecialchars($row['status'])); ?>
                                                </span>
                                            </td>
                                            <td class="text_right">
                                                <a href="view_petition.php?id=<?php echo $row['id']; ?>" class="btn_open">Open</a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="6">
                                            <div class="empty_state">
                                                <i class="fa-regular fa-folder-open"></i>
                                                <p class="empty_title">No petition groups found</p>
                                                <p class="empty_sub">You haven't joined or created any subject petitions yet.</p>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="petition_footer">
                        <span class="showing_text">
                            Showing <?php echo !empty($petitions) ? count($petitions) : 0; ?> of <?php echo !empty($petitions) ? count($petitions) : 0; ?> petition group(s)
                        </span>
                        <div class="pagination">
                            <button class="page_btn" disabled><i class="fa-solid fa-chevron-left"></i></button>
                            <span class="page_num">1 / 1</span>
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