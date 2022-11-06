const allChecked = document.querySelectorAll(".messageCheckboxContact");
const constactField = document.querySelector(".contacts-field");

confirmChoiceContact.addEventListener("click", () => {
    allChecked.forEach((element) => {
        if (element.checked) {
            //    add element value to contact field
            constactField.value += `${element.value}, `;
        }
    });
});

// For Group Section
const allCheckedGroup = document.querySelectorAll(".messageCheckboxGroup");
confirmChoice.addEventListener("click", () => {
    allCheckedGroup.forEach((element) => {
        if (element.checked) {
            //    add element value to contact field
            constactField.value += `${element.value}, `;
        }
    });
});
