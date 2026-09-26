<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/icons/evsu_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/student_payment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <title>Payment Assessment - EVSU Petition Portal</title>
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
                    <button onclick="myPetition()">My Petition</button>
                    <button class="payment">Payment Assessment</button>
                </nav>
            </aside>
            <main class="content">
                <div class="payment_head">
                    <h3>Payment Assessment</h3>
                    <p>Fees computed and confirmed by the Accounting Office.</p>
                </div>
                <div class="payment_card">
                    <div class="payment_card_header">
                        <div class="header_left">
                            <h4>Assessed Petitions</h4>
                            <p>Settle payments at the Cashier's Office</p>
                        </div>
                        <div class="header_right">
                            <span class="outstanding_label">OUTSTANDING</span>
                            <span class="outstanding_amount">₱<?php echo isset($total_outstanding) ? number_format($total_outstanding, 2) : '0.00'; ?></span>
                        </div>
                    </div>
                    <div class="table_container">
                        <table>
                            <thead>
                                <tr>
                                    <th>Reference</th>
                                    <th>Subject</th>
                                    <th>Total Fee</th>
                                    <th>My Share</th>
                                    <th>Status</th>
                                    <th class="text_right">Documents</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($assessments)): ?>
                                    <?php foreach ($assessments as $row): ?>
                                        <tr>
                                            <td class="ref_code"><?php echo htmlspecialchars($row['reference_no']); ?></td>
                                            <td>
                                                <div class="subject_code"><?php echo htmlspecialchars($row['subject_code']); ?></div>
                                                <div class="subject_name"><?php echo htmlspecialchars($row['subject_title']); ?></div>
                                            </td>
                                            <td class="fee_text">₱<?php echo number_format($row['total_fee'], 2); ?></td>
                                            <td class="fee_text share_highlight">₱<?php echo number_format($row['my_share'], 2); ?></td>
                                            <td>
                                                <span class="status_badge status_<?php echo strtolower($row['status']); ?>">
                                                    <span class="dot"></span> <?php echo strtoupper(htmlspecialchars($row['status'])); ?>
                                                </span>
                                            </td>
                                            <td class="text-right">
                                                <a href="download_assessment.php?id=<?php echo $row['id']; ?>" class="btn_doc">
                                                    <i class="fa-solid fa-file-pdf"></i> View Slip
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr>
                                        <td colspan="6" class="empty_cell">
                                            No assessments issued yet.
                                        </td>
                                    </tr>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="/assets/js/nextpage.js"></script>
    <script src="/assets/js/student_dropdown.js"></script>
    
</body>
</html>