const refreshButton = document.querySelector(".refresh_button");

refreshButton.addEventListener("click", function() {
    const icon = this.querySelector("i");

    icon.classList.add("fa-spin");

    setTimeout(function() {
        window.location.reload();
    }, 500);
});