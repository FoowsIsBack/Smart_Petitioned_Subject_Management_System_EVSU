const newPassword = document.getElementById("newpass");
const confirmPassword = document.getElementById("confirmnewpass");
const lengthRequirement = document.getElementById("length");
const uppercaseRequirement = document.getElementById("uppercase");
const lowercaseRequirement = document.getElementById("lowercase");
const numberRequirement = document.getElementById("number");
const specialRequirement = document.getElementById("special");
const strengthBar = document.getElementById("strengthBar");
const strengthText = document.getElementById("strengthText");
const newError = document.getElementById("newError");
const confirmError = document.getElementById("confirmError");

function validatePassword(){

    const password = newPassword.value;

    const hasLength = password.length >= 8;
    const hasUppercase = /[A-Z]/.test(password);
    const hasLowercase = /[a-z]/.test(password);
    const hasNumber = /[0-9]/.test(password);
    const hasSpecial = /[^A-Za-z0-9]/.test(password);

    updateRequirement(
        lengthRequirement, hasLength, "8+ characters"
    );

    updateRequirement(
        uppercaseRequirement, hasUppercase, "Uppercase"
    );

    updateRequirement(
        lowercaseRequirement, hasLowercase, "Lowercase"
    );

    updateRequirement(
        numberRequirement, hasNumber, "Number"
    );

    updateRequirement(
        specialRequirement, hasSpecial, "Special character"
    );

    updateStrength(
        hasLength, hasUppercase, hasLowercase, hasNumber, hasSpecial
    );

    if(password.length === 0){
        newPassword.classList.remove("input_error");
        newPassword.classList.remove("input_valid");
        newError.textContent = "";
        return;
    }
    if(
        hasLength && hasUppercase && hasLowercase && hasNumber && hasSpecial
    ){
        newPassword.classList.remove("input_error");
        newPassword.classList.add("input_valid");
        newError.textContent = "";

    }else{
        newPassword.classList.remove("input_valid");
        newPassword.classList.add("input_error");
        newError.textContent = "Password does not meet all requirements";
    }
    checkConfirmPassword();
}

function updateRequirement(element, valid, text){

    if(valid){
        element.textContent = "✓ " + text;
        element.classList.remove("invalid");
        element.classList.add("valid");
    }else{
        element.textContent = "✗ " + text;
        element.classList.remove("valid");
        element.classList.add("invalid");
    }
}

function updateStrength(
    hasLength, hasUppercase, hasLowercase, hasNumber, hasSpecial
) {

    let score = 0;

    if (hasLength) score++;
    if (hasUppercase) score++;
    if (hasLowercase) score++;
    if (hasNumber) score++;
    if (hasSpecial) score++;

    if(score === 0){
        strengthBar.style.width = "0%";
        strengthBar.style.backgroundColor = "transparent";
        strengthText.textContent = "Password strength";
    }else if(score <= 2){
        strengthBar.style.width = "30%";
        strengthBar.style.backgroundColor = "rgb(220, 53, 69)";
        strengthText.style.color = "rgb(220, 53, 69)";
        strengthText.textContent = "Weak";
    }else if(score <= 4){
        strengthBar.style.width = "60%";
        strengthBar.style.backgroundColor = "rgb(253, 126, 20)";
        strengthText.style.color = "rgb(253, 126, 20)";
        strengthText.textContent = "Medium";
    }else{
        strengthBar.style.width = "100%";
        strengthBar.style.backgroundColor = "rgb(25, 135, 84)";
        strengthText.style.color = "rgb(25, 135, 84)";
        strengthText.textContent = "Strong";
    }
}

function checkConfirmPassword(){

    const password = newPassword.value;
    const confirm = confirmPassword.value;

    if(confirm.length === 0){
        confirmPassword.classList.remove("input_error");
        confirmPassword.classList.remove("input_valid");
        confirmError.textContent = "";
        return;
    }
    if(password === confirm){
        confirmPassword.classList.remove("input_error");
        confirmPassword.classList.add("input_valid");
        confirmError.textContent = "";
    }else{
        confirmPassword.classList.remove("input_valid");
        confirmPassword.classList.add("input_error");
        confirmError.textContent = "Passwords do not match";
    }
}

newPassword.addEventListener("input", validatePassword);
confirmPassword.addEventListener("input", checkConfirmPassword);