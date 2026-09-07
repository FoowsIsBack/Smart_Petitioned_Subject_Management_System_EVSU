function togglePassword(){
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

function togglePassword1(){
    const passwordField = document.getElementById('currentpass');
    const toggleIcon = document.querySelector('.toggle_password1');

    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        toggleIcon.src = '/assets/icons/hidepass.png';
    } else {
        passwordField.type = 'password';
        toggleIcon.src = '/assets/icons/showpass.png';
    }
}

function togglePassword2(){
    const passwordField = document.getElementById('newpass');
    const toggleIcon = document.querySelector('.toggle_password2');

    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        toggleIcon.src = '/assets/icons/hidepass.png';
    } else {
        passwordField.type = 'password';
        toggleIcon.src = '/assets/icons/showpass.png';
    }
}

function togglePassword3(){
    const passwordField = document.getElementById('confirmnewpass');
    const toggleIcon = document.querySelector('.toggle_password3');

    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        toggleIcon.src = '/assets/icons/hidepass.png';
    } else {
        passwordField.type = 'password';
        toggleIcon.src = '/assets/icons/showpass.png';
    }
}