const profileButton = document.getElementById("profileButton");
const profileDropdown = document.getElementById("profileDropdown");

profileButton.addEventListener("click", function(event){
    event.stopPropagation();
    profileDropdown.classList.toggle("show");
});

document.addEventListener("click", function(){
    profileDropdown.classList.remove("show");
});
