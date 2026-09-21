const otpInputs = document.querySelectorAll('.otp_container input');

otpInputs.forEach((input, index) => {

    input.addEventListener('input', function() {

        this.value = this.value.replace(/\D/g, '');

        if(this.value && index < otpInputs.length - 1){
            otpInputs[index + 1].focus();
        }

    });

    input.addEventListener('paste', function(e) {

        e.preventDefault();

        const pastedData = e.clipboardData.getData('text').replace(/\D/g, '');

        pastedData.split('').slice(0, otpInputs.length).forEach((digit, i) => {
            otpInputs[i].value = digit;
        });

        const nextIndex = Math.min(pastedData.length, otpInputs.length - 1);
        otpInputs[nextIndex].focus();

    });

});