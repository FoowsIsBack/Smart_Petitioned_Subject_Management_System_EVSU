const profileButton = document.getElementById("profileButton");
const profileDropdown = document.getElementById("profileDropdown");
const notificationButton = document.getElementById("notificationButton");
const notificationDropdown = document.getElementById("notificationDropdown");
const markAllRead = document.getElementById("markAllRead");
const notificationBadge = document.getElementById("notificationBadge");

profileButton.addEventListener("click", function(event) {
    if (event.target.closest("#notificationButton")) {
        return;
    }
    event.stopPropagation();
    profileDropdown.classList.toggle("show");
    notificationDropdown.classList.remove("show");
});

notificationButton.addEventListener("click", function(event) {
    event.stopPropagation();
    notificationDropdown.classList.toggle("show");
    profileDropdown.classList.remove("show");
});

markAllRead.addEventListener("click", function(event) {
    event.stopPropagation();
    document.querySelectorAll(".notification_item.unread").forEach(function(notification) {
        notification.classList.remove("unread");
    });
    notificationBadge.style.display = "none";
});

document.addEventListener("click", function() {
    profileDropdown.classList.remove("show");
    notificationDropdown.classList.remove("show");
});

document.addEventListener("DOMContentLoaded", function(){

    const petitionManagementButton = document.getElementById("petitionManagementButton");
    const petitionManagementMenu = document.getElementById("petitionManagementMenu");

    petitionManagementMenu.classList.add("show");
    petitionManagementButton.parentElement.classList.add("open");

    petitionManagementButton.addEventListener("click", function(){
        petitionManagementMenu.classList.toggle("show");
        petitionManagementButton.parentElement.classList.toggle("open");
    });
});