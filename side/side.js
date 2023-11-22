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