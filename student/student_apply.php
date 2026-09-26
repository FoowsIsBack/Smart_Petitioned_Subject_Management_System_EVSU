<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/assets/icons/evsu_logo.png" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/student_apply.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css">
    <title>Apply for Petition - EVSU Petition Portal</title>
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
                    <button class="apply">Apply for Petition</button>
                    <button onclick="myPetition()">My Petition</button>
                    <button onclick="paymentAssessment()">Payment Assessment</button>
                </nav>
            </aside>
            <main class="content">
                <div class="content_title">
                    <h3>Apply for Petition</h3>
                    <p>Grade verification is required before eligibility validation.</p>
                </div>
                <form action="/student/student_apply.php" method="post" enctype="multipart/form-data">
                    <div class="petition_form">
                        <div class="apply_form">
                            <div class="step">
                                <div class="step1">
                                    <h4>Step 1</h4>
                                    <p>Select Semester</p>
                                    <div class="semester_options">
                                        <label class="semester_option">
                                            <input type="radio" name="semester" value="1st" required>
                                            <span>First Semester</span>
                                        </label>
                                        <label class="semester_option">
                                            <input type="radio" name="semester" value="2nd">
                                            <span>Second Semester</span>
                                        </label>
                                    </div>
                                    <label for="subject">Select Subject to Petition</label>
                                    <select name="subject" id="subject" required disabled>
                                        <option value="">Choose a subject</option>
                                        <?php foreach($subjects as $subject): ?>
                                            <option value="<?= $subject['subject_id'] ?>" data-semester="<?= htmlspecialchars($subject['semester']) ?>">
                                                <?= htmlspecialchars($subject['subject_code']) ?> - <?= htmlspecialchars($subject['subject_name']) ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="step2">
                                    <h4>Step 2</h4>
                                    <p>Your Grade for this Subject</p>
                                    <div class="grade_options">
                                        <label class="grade_option">
                                            <input type="radio" name="grade" value="5.00" required>
                                            <span>5.00</span>
                                        </label>
                                        <label class="grade_option">
                                            <input type="radio" name="grade" value="4.00">
                                            <span>4.00</span>
                                        </label>
                                        <label class="grade_option">
                                            <input type="radio" name="grade" value="INC">
                                            <span>INC</span>
                                        </label>
                                        <label class="grade_option">
                                            <input type="radio" name="grade" value="DRP">
                                            <span>DRP</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="step3">
                                    <label for="file-upload" class="file-dropzone">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                            <polyline points="17 8 12 3 7 8"></polyline>
                                            <line x1="12" y1="3" x2="12" y2="15"></line>
                                        </svg>
                                        <span class="upload-title">Click to upload grade slip / certification</span>
                                        <span class="upload-subtitle">PDF, JPG or PNG · max 5MB</span>
                                        <input id="file-upload" name="grade_proof" type="file" accept=".pdf,.jpg,.jpeg,.png" required>
                                    </label>
                                </div>
                                <div class="step4">
                                    <h4>Automated OCR Grade Verification</h4>
                                    <div class="ocr_status" id="ocr_status">
                                        <div class="ocr_icon">
                                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                                                <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/>
                                                <path d="M12 8V12L14.5 14.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                                            </svg>
                                        </div>
                                        <div class="ocr_text">
                                            <strong>Awaiting</strong>
                                            <span>Awaiting document upload.</span>
                                        </div>
                                    </div>
                                    <div class="ocr_result" id="ocr_result">
                                        <div class="grade_result">
                                            <span>Entered Grade</span>
                                            <strong id="entered_grade">-</strong>
                                        </div>
                                        <div class="grade_result">
                                            <span>Detected Grade</span>
                                            <strong id="detected_grade">-</strong>
                                        </div>
                                        <div class="ocr_verified">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none">
                                                <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"/>
                                                <path d="M8 12L10.5 14.5L16 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <span>Grade verified · Eligibility validated</span>
                                        </div>
                                    </div>
                                    <button type="submit" name="submit_petition" class="submit_petition" disabled>Submit Petition</button>
                                </div>
                            </div>
                            <div class="readme">
                                <div class="readme1">
                                    <h4>Group Formation Rule</h4>
                                    <p>Petitions for the same subject are automatically grouped. A minimum of <strong>8 petitioners</strong> is required before the Department Head is notified.</p>
                                </div>
                                <div class="readme2">
                                    <h4>Eligibility Requirements</h4>
                                    <ul>
                                        <li>Subject must have been previously failed, dropped, or incomplete.</li>
                                        <li>Subject is not offered in the current term's regular block.</li>
                                        <li>Uploaded proof must match the encoded grade.</li>
                                        <li>Student must be officially enrolled for the term.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </main>
        </div>
    </div>

    <script src="/assets/js/student_apply.js"></script>
    <script src="/assets/js/nextpage.js"></script>
    <script src="/assets/js/student_dropdown.js"></script>
</body>
</html>