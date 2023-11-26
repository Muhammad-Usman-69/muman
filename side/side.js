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

let items = document.querySelectorAll(".item");
document.querySelector("title").innerHTML =
    items.length + " items found in Cart";

let prices = document.querySelectorAll(".price");
let selectBtn = document.querySelectorAll(".select");
let selectAll = document.querySelector(".selectAll");
let totalItem = document.querySelectorAll(".totalItem");
let totalPrice = document.querySelector(".totalPrice");
let finalPrice = document.querySelector(".finalPrice");

selectBtn.forEach((btn, index) => {
    let price = Number(prices[index].innerHTML);
    
    selectAll.addEventListener("input", () => {
        if (selectAll.checked == true) {
            if (btn.checked == false) {
                btn.checked = true;
                totalItem.forEach((total) => {
                    total.innerHTML++;
                })
                if (totalPrice.innerHTML == 0) {
                    totalPrice.innerHTML = (price).toFixed(2);
                    finalPrice.innerHTML = (4 + Number(totalPrice.innerHTML)).toFixed(2);
                } else {
                    totalPrice.innerHTML = (Number(totalPrice.innerHTML) + price).toFixed(2);
                    finalPrice.innerHTML = (4 + Number(totalPrice.innerHTML)).toFixed(2);
                }
            }
        } else {
            btn.checked = false;
            totalItem.forEach((total) => {
                total.innerHTML--;
            })
            totalPrice.innerHTML = (Number(totalPrice.innerHTML) - price).toFixed(2);
            if (totalPrice.innerHTML == 0) {
                finalPrice.innerHTML = 0;
            } else {
                finalPrice.innerHTML = (Number(totalPrice.innerHTML) + 4).toFixed(2);
            }
        }
    })

    btn.addEventListener("input", () => {
        if (btn.checked == true) {
            totalItem.forEach((total) => {
                total.innerHTML++;
            })
            if (totalPrice.innerHTML == 0) {
                totalPrice.innerHTML = (price).toFixed(2);
                finalPrice.innerHTML = (4 + Number(totalPrice.innerHTML)).toFixed(2);
            } else {
                totalPrice.innerHTML = (Number(totalPrice.innerHTML) + price).toFixed(2);
                finalPrice.innerHTML = (4 + Number(totalPrice.innerHTML)).toFixed(2);
            }
        } else {
            totalItem.forEach((total) => {
                total.innerHTML--;
            })
            totalPrice.innerHTML = (Number(totalPrice.innerHTML) - price).toFixed(2);
            if (totalPrice.innerHTML == 0) {
                finalPrice.innerHTML = 0;
            } else {
                finalPrice.innerHTML = (Number(totalPrice.innerHTML) + 4).toFixed(2);
            }
        }
    })
})
