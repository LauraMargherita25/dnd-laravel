require('./bootstrap');
const confirmationForm = document.querySelector(".form");
document.querySelectorAll(".btn-delete").forEach((button) => {
    button.addEventListener("click", function () {
        confirmationForm.action =
            confirmationForm.dataset.base + "/" + this.dataset.id;
    });
});


