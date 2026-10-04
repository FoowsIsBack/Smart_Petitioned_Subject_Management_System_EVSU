<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/accounting_payment.css">
    <link rel="shortcut icon" href="/assets/icons/evsu_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Accounting | Payment Verification</title>
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
                            <p>kirylldave@evsu.edu.ph</p>
                            <span>Accounting Office - Ormoc Campus</span>
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
                    <h3>ACCOUNTING</h3>
                </div>
                <nav class="sidebar_nav">
                    <button type="button" onclick="accountingDashboard()">Dashboard</button>
                    <button onclick="accountingAssessments()">Assessments</button>
                    <button type="button" class="dashboard">Payment Verification</button>
                </nav>
            </aside>
            <main class="content">
                <div class="studentwelcome">
                    <h3>Payment Verification</h3>
                    <p>Petitions advance to the Campus Director once all shares are settled</p>
                </div>
                <div class="payment_card">
                    <?php if (!empty($subject_info)): ?>
                        <div class="payment_card_header">
                            <div class="subject_info">
                                <h4><?php echo htmlspecialchars($subject_info['code_title'] ?? ''); ?></h4>
                                <span class="ref_number"><?php echo htmlspecialchars($subject_info['reference'] ?? ''); ?></span>
                            </div>
                            <div class="amount_info">
                                <span class="amount_label">PER STUDENT</span>
                                <h3 class="amount_val">₱<?php echo htmlspecialchars($subject_info['per_student'] ?? '0.00'); ?></h3>
                                <span class="paid_status_badge">
                                    <?php echo htmlspecialchars($subject_info['paid_count'] ?? 0); ?>/<?php echo htmlspecialchars($subject_info['total_count'] ?? 0); ?> paid
                                </span>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="table_responsive">
                        <table class="payment_table">
                            <thead>
                                <tr>
                                    <th>Student</th>
                                    <th>Student ID</th>
                                    <th>Status</th>
                                    <th class="text_right">Record OR</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($student_list)): ?>
                                    <?php foreach ($student_list as $student): ?>
                                        <tr>
                                            <td class="student_name"><?php echo htmlspecialchars($student['name'] ?? ''); ?></td>
                                            <td class="student_id"><?php echo htmlspecialchars($student['student_id'] ?? ''); ?></td>
                                            <td>
                                                <?php if (strtolower($student['status']) === 'paid'): ?>
                                                    <span class="badge_paid">Paid · OR <?php echo htmlspecialchars($student['or_number']); ?></span>
                                                <?php else: ?>
                                                    <span class="badge_unpaid">Unpaid</span>
                                                <?php endif; ?>
                                            </td>
                                            <td class="text_right">
                                                <?php if (strtolower($student['status']) === 'paid'): ?>
                                                    <span class="text_verified">Verified</span>
                                                <?php else: ?>
                                                    <form method="POST" action="process_payment.php" class="or_form">
                                                        <input type="hidden" name="student_id" value="<?php echo htmlspecialchars($student['student_id']); ?>">
                                                        <input type="text" name="or_number" placeholder="OR number" class="or_input" required>
                                                        <button type="submit" class="btn_verify">Verify</button>
                                                    </form>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <tr class="empty_row">
                                        <td colspan="4">
                                            <div class="empty_state">
                                                <i class="fa-solid fa-folder-open"></i>
                                                <p>No record found</p>
                                                <span>There are currently no student records available for payment verification.</span>
                                            </div>
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