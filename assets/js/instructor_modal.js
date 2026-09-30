document.addEventListener("DOMContentLoaded", function () {
    const modal = document.getElementById("addInstructorModal");
    const openBtn = document.getElementById("openAddModal");
    const closeBtn = document.getElementById("closeAddModal");
    const cancelBtn = document.getElementById("cancelAddModal");
    const form = document.getElementById("addInstructorForm");

    if (openBtn) {
        openBtn.addEventListener("click", function () {
            modal.classList.add("show");
        });
    }
    function closeModal() {
        modal.classList.remove("show");
        if (form) form.reset();
    }
    if (closeBtn) closeBtn.addEventListener("click", closeModal);
    if (cancelBtn) cancelBtn.addEventListener("click", closeModal);
    window.addEventListener("click", function (e) {
        if (e.target === modal) {
            closeModal();
        }
    });
});

function toggleAddModal(show) {
    const modal = document.getElementById('addSubjectModal');
    if (show) {
        modal.classList.add('show');
    } else {
        modal.classList.remove('show');
    }
}

function toggleEditModal(show) {
    const modal = document.getElementById('editSubjectModal');
    if (show) {
        modal.classList.add('show');
    } else {
        modal.classList.remove('show');
    }
}

function openEditModal(id, code, units, title, type, department) {
    document.getElementById('editSubjectId').value = id;
    document.getElementById('editSubjectCode').value = code;
    document.getElementById('editUnits').value = units;
    document.getElementById('editDescriptiveTitle').value = title;
    document.getElementById('editType').value = type;
    document.getElementById('editDepartment').value = department;
    toggleEditModal(true);
}

window.onclick = function(event) {
    const addModal = document.getElementById('addSubjectModal');
    const editModal = document.getElementById('editSubjectModal');
    if (event.target === addModal) toggleAddModal(false);
    if (event.target === editModal) toggleEditModal(false);
};