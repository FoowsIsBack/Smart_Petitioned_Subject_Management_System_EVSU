const addSubjectButton = document.querySelector(".add_user_button");
const subjectModal = document.getElementById("subjectModal");
const closeSubjectModal = document.getElementById("closeSubjectModal");
const cancelSubjectModal = document.getElementById("cancelSubjectModal");

addSubjectButton.addEventListener("click", function() {
    subjectModal.classList.add("show");
});

closeSubjectModal.addEventListener("click", function() {
    subjectModal.classList.remove("show");
});

cancelSubjectModal.addEventListener("click", function() {
    subjectModal.classList.remove("show");
});

subjectModal.addEventListener("click", function(event) {
    if (event.target === subjectModal) {
        subjectModal.classList.remove("show");
    }
});