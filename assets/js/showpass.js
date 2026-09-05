function togglePassword() {
    const passwordField = document.getElementById('password');
    const toggleIcon = document.querySelector('.toggle_password');
            
    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        toggleIcon.src = '/assets/icons/hidepass.png';
    } else {
        passwordField.type = 'password';
        toggleIcon.src = '/assets/icons/showpass.png';
    }
}