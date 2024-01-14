
const disabledEmail = document.querySelector("#disabled_email");
disabledEmail.addEventListener("click", () => {
    const emailInput = document.querySelector("#email");
    if(emailInput.disabled) {
        emailInput.removeAttribute("disabled")
    } else {
        emailInput.setAttribute("disabled", "")
        emailInput.value = "";
    }
})

const currentDate = document.querySelector("#current_date");
currentDate.addEventListener('click', () => {
    const date = document.querySelector("#date");
    const today = new Date();

    date.value = `${today.toISOString().split('T')[0]}`
})