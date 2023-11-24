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

let quantities = document.querySelectorAll(".quantity-number");
let plusAll = document.querySelectorAll(".plus");
let minusAll = document.querySelectorAll(".minus");

quantities.forEach((quantity, index) => {
    let plus = plusAll[index];
    let minus = minusAll[index];
    plus.addEventListener("click", () => {
        quantity.innerHTML++;
        if (quantity.innerHTML > 1) {
            minus.disabled = false;
        }
    })
    minus.addEventListener("click", () => {
        if (quantity.innerHTML <= 1) {
            minus.disabled = true;
        } else {
            minus.disabled = false;
            quantity.innerHTML--;
        }
    })
});
    /* pluses.forEach((plus) => {
    })
    minuses.forEach((minus) => {
        minus.addEventListener("click", () => {
            if (quantity.innerHTML <= 1) {
                minus.disabled = true;
            } else {
                minus.disabled = false;
                quantity.innerHTML--;
            }
        });
    }) */
/* }) */
