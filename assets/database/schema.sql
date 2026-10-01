CREATE DATABASE IF NOT EXISTS smart_petitioned_subject_management;

USE smart_petitioned_subject_management;

-- =========================================
-- USERS
-- =========================================

CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255),
    role ENUM(
        'student',
        'department_head',
        'faculty',
        'accounting',
        'cashier',
        'campus_director',
        'vpaa',
        'university_president',
        'registrar',
        'system_admin'
    ) NOT NULL,
    is_active BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);


-- =========================================
-- STUDENTS
-- =========================================

CREATE TABLE students (
    student_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL UNIQUE,
    student_number VARCHAR(20) NOT NULL UNIQUE,
    first_name VARCHAR(50) NOT NULL,
    middle_name VARCHAR(50),
    last_name VARCHAR(50) NOT NULL,
    program VARCHAR(100) NOT NULL,
    year_level INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(user_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);


-- =========================================
-- EMPLOYEES
-- =========================================

CREATE TABLE employees (
    employee_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL UNIQUE,
    employee_number VARCHAR(30) NOT NULL UNIQUE,
    first_name VARCHAR(50) NOT NULL,
    middle_name VARCHAR(50),
    last_name VARCHAR(50) NOT NULL,
    position VARCHAR(100) NOT NULL,
    department VARCHAR(100),
    FOREIGN KEY (user_id) REFERENCES users(user_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);


-- =========================================
-- DEPARTMENTS
-- =========================================

CREATE TABLE departments (
    department_id INT AUTO_INCREMENT PRIMARY KEY,
    department_name VARCHAR(150) NOT NULL UNIQUE,
    department_code VARCHAR(30) NOT NULL UNIQUE
);


-- =========================================
-- SUBJECTS
-- =========================================

CREATE TABLE subjects (
    subject_id INT AUTO_INCREMENT PRIMARY KEY,
    subject_code VARCHAR(20) NOT NULL UNIQUE,
    subject_name VARCHAR(150) NOT NULL,
    units INT NOT NULL,
    department_id INT,
    description TEXT,
    is_active BOOLEAN DEFAULT TRUE,
    FOREIGN KEY (department_id) REFERENCES departments(department_id)
        ON DELETE SET NULL
        ON UPDATE CASCADE
);


-- =========================================
-- SEMESTERS
-- =========================================

CREATE TABLE semesters (
    semester_id INT AUTO_INCREMENT PRIMARY KEY,
    academic_year VARCHAR(20) NOT NULL,
    semester ENUM(
        '1st Semester',
        '2nd Semester',
        'Summer'
    ) NOT NULL,
    start_date DATE,
    end_date DATE,
    is_active BOOLEAN DEFAULT FALSE
);


-- =========================================
-- PETITIONS
-- =========================================

CREATE TABLE petitions (
    petition_id INT AUTO_INCREMENT PRIMARY KEY,
    subject_id INT NOT NULL,
    semester_id INT NOT NULL,
    petitioner_id INT NOT NULL,
    reason TEXT,
    status ENUM(
        'pending',
        'under_review',
        'approved',
        'rejected',
        'cancelled',
        'completed'
    ) DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (subject_id) REFERENCES subjects(subject_id)
        ON DELETE RESTRICT
        ON UPDATE CASCADE,
    FOREIGN KEY (semester_id) REFERENCES semesters(semester_id)
        ON DELETE RESTRICT
        ON UPDATE CASCADE,
    FOREIGN KEY (petitioner_id) REFERENCES students(student_id)
        ON DELETE RESTRICT
        ON UPDATE CASCADE
);


-- =========================================
-- PETITION STUDENTS
-- =========================================

CREATE TABLE petition_students (
    petition_student_id INT AUTO_INCREMENT PRIMARY KEY,
    petition_id INT NOT NULL,
    student_id INT NOT NULL,
    joined_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (petition_id) REFERENCES petitions(petition_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    FOREIGN KEY (student_id) REFERENCES students(student_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    UNIQUE (petition_id, student_id)
);


-- =========================================
-- PETITION REQUIREMENTS
-- =========================================

CREATE TABLE petition_requirements (
    requirement_id INT AUTO_INCREMENT PRIMARY KEY,
    petition_id INT NOT NULL,
    requirement_name VARCHAR(150) NOT NULL,
    file_path VARCHAR(255),
    status ENUM(
        'pending',
        'submitted',
        'verified',
        'rejected'
    ) DEFAULT 'pending',
    submitted_at TIMESTAMP NULL,
    verified_at TIMESTAMP NULL,
    FOREIGN KEY (petition_id) REFERENCES petitions(petition_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE
);


-- =========================================
-- PETITION APPROVALS
-- =========================================

CREATE TABLE petition_approvals (
    approval_id INT AUTO_INCREMENT PRIMARY KEY,
    petition_id INT NOT NULL,
    approver_id INT NOT NULL,
    approval_level ENUM(
        'department_head',
        'faculty',
        'accounting',
        'cashier',
        'campus_director',
        'vpaa',
        'university_president',
        'registrar'
    ) NOT NULL,
    status ENUM(
        'pending',
        'approved',
        'rejected'
    ) DEFAULT 'pending',
    remarks TEXT,
    acted_at TIMESTAMP NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (petition_id) REFERENCES petitions(petition_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    FOREIGN KEY (approver_id) REFERENCES employees(employee_id)
        ON DELETE RESTRICT
        ON UPDATE CASCADE
);


-- =========================================
-- FACULTY ASSIGNMENTS
-- =========================================

CREATE TABLE faculty_assignments (
    assignment_id INT AUTO_INCREMENT PRIMARY KEY,
    petition_id INT NOT NULL,
    faculty_id INT NOT NULL,
    assigned_by INT NOT NULL,
    assigned_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM(
        'assigned',
        'accepted',
        'declined',
        'completed'
    ) DEFAULT 'assigned',
    FOREIGN KEY (petition_id) REFERENCES petitions(petition_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    FOREIGN KEY (faculty_id) REFERENCES employees(employee_id)
        ON DELETE RESTRICT
        ON UPDATE CASCADE,
    FOREIGN KEY (assigned_by) REFERENCES employees(employee_id)
        ON DELETE RESTRICT
        ON UPDATE CASCADE
);


-- =========================================
-- PAYMENTS
-- =========================================

CREATE TABLE payments (
    payment_id INT AUTO_INCREMENT PRIMARY KEY,
    petition_id INT NOT NULL,
    student_id INT NOT NULL,
    amount DECIMAL(10,2) NOT NULL,
    payment_status ENUM(
        'pending',
        'verified',
        'rejected'
    ) DEFAULT 'pending',
    payment_reference VARCHAR(100),
    verified_by INT,
    verified_at TIMESTAMP NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (petition_id) REFERENCES petitions(petition_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    FOREIGN KEY (student_id) REFERENCES students(student_id)
        ON DELETE RESTRICT
        ON UPDATE CASCADE,
    FOREIGN KEY (verified_by) REFERENCES employees(employee_id)
        ON DELETE SET NULL
        ON UPDATE CASCADE
);


-- =========================================
-- CLASSES
-- =========================================

CREATE TABLE classes (
    class_id INT AUTO_INCREMENT PRIMARY KEY,
    petition_id INT NOT NULL,
    subject_id INT NOT NULL,
    semester_id INT NOT NULL,
    faculty_id INT,
    section VARCHAR(30),
    room VARCHAR(50),
    schedule VARCHAR(100),
    status ENUM(
        'pending',
        'formed',
        'active',
        'completed'
    ) DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (petition_id) REFERENCES petitions(petition_id)
        ON DELETE RESTRICT
        ON UPDATE CASCADE,
    FOREIGN KEY (subject_id) REFERENCES subjects(subject_id)
        ON DELETE RESTRICT
        ON UPDATE CASCADE,
    FOREIGN KEY (semester_id) REFERENCES semesters(semester_id)
        ON DELETE RESTRICT
        ON UPDATE CASCADE,
    FOREIGN KEY (faculty_id) REFERENCES employees(employee_id)
        ON DELETE SET NULL
        ON UPDATE CASCADE
);


-- =========================================
-- CLASS STUDENTS
-- =========================================

CREATE TABLE class_students (
    class_student_id INT AUTO_INCREMENT PRIMARY KEY,
    class_id INT NOT NULL,
    student_id INT NOT NULL,
    enrolled_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM(
        'enrolled',
        'dropped',
        'completed'
    ) DEFAULT 'enrolled',
    FOREIGN KEY (class_id) REFERENCES classes(class_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    FOREIGN KEY (student_id) REFERENCES students(student_id)
        ON DELETE CASCADE
        ON UPDATE CASCADE,
    UNIQUE (class_id, student_id)
);