const semesterOptions = document.querySelectorAll('input[name="semester"]');
const subjectSelect = document.getElementById("subject");

semesterOptions.forEach(function(option) {
    option.addEventListener("change", function() {
        subjectSelect.disabled = false;
        subjectSelect.value = "";

        Array.from(subjectSelect.options).forEach(function(subject) {
            if (subject.value === "") {
                subject.hidden = false;
                return;
            }

            subject.hidden = subject.dataset.semester !== option.value;
        });
    });
});

const fileUpload = document.getElementById("file-upload");
const ocrStatus = document.getElementById("ocr_status");
const ocrResult = document.getElementById("ocr_result");
const submitPetition = document.querySelector(".submit_petition");
const enteredGrade = document.getElementById("entered_grade");
const detectedGrade = document.getElementById("detected_grade");

fileUpload.addEventListener("change", function() {
    if (this.files.length === 0) {
        return;
    }

    const selectedGrade = document.querySelector('input[name="grade"]:checked');

    if (!selectedGrade) {
        alert("Select your grade first.");
        this.value = "";
        return;
    }

    const grade = selectedGrade.value;

    ocrStatus.querySelector("strong").textContent = "Processing";
    ocrStatus.querySelector("span").textContent = "Verifying uploaded document.";

    setTimeout(function() {
        ocrStatus.style.display = "none";
        ocrResult.classList.add("show");
        enteredGrade.textContent = grade;
        detectedGrade.textContent = grade;
        submitPetition.disabled = false;
    }, 1000);
});