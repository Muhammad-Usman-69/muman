let inputs = document.querySelectorAll(".input");
let labels = document.querySelectorAll(".label")

inputs.forEach((input, index) => {
    let label = labels[index]
    input.addEventListener("input", () => {
        if (input.value !== "") {
            label.classList.add("filled");
            input.classList.add("border-blue-500");
        } else {
            label.classList.remove("filled");
            input.classList.remove("border-blue-500");
        }
    })
})

let quantity = document.querySelector(".quantity-number");
let plus = document.querySelector(".plus");
let minus = document.querySelector(".minus");

plus.addEventListener("click", () => {
    quantity.innerHTML++;
})

minus.addEventListener("click", () => {
    if (quantity.innerHTML == 1) {
        minus.disabled = true;
    } else {
        minus.disabled = false;
        quantity.innerHTML--;
    }
});