const show_element = document.querySelector(".show-create");
const add_contact = document.querySelector(".new-contact-aside");
const close_view = document.querySelector(".close-view");
show_element.addEventListener("click", function () {
    add_contact.classList.add("show-contact");
});

close_view.addEventListener("click", function () {
    add_contact.classList.remove("show-contact");
});


