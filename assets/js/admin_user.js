const addEmployeeButton = document.querySelector(".add_user_button");
const employeeModal = document.getElementById("employeeModal");
const closeEmployeeModal = document.getElementById("closeEmployeeModal");
const cancelEmployeeModal = document.getElementById("cancelEmployeeModal");

addEmployeeButton.addEventListener("click", function() {
    employeeModal.classList.add("show");
});

closeEmployeeModal.addEventListener("click", function() {
    employeeModal.classList.remove("show");
});

cancelEmployeeModal.addEventListener("click", function() {
    employeeModal.classList.remove("show");
});

employeeModal.addEventListener("click", function(event) {
    if (event.target === employeeModal) {
        employeeModal.classList.remove("show");
    }
});