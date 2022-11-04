const show_window_button = document.querySelector(".show-update");
const update_window = document.querySelector(".update-contact-aside");
const close_view_update = document.querySelector(".close-view-update");

show_window_button.addEventListener("click", () => {
    update_window.classList.add("show-contact");
});

close_view_update.addEventListener("click", function () {
    update_window.classList.remove("show-contact");
});
