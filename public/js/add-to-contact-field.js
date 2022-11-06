const allChecked = document.querySelectorAll(".messageCheckboxContact");
const constactField = document.querySelector(".contacts-field");
const confirmContact = document.querySelector(".confirm-choice-contact");

confirmContact.addEventListener("click", () => {
    allChecked.forEach((element) => {
        if (element.checked) {
            //    add element value to contact field
            constactField.value += `${element.value}, `;
        }
    });
});
