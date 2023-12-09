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
let items = document.querySelectorAll(".item");
let prices = document.querySelectorAll(".price");
let selectBtn = document.querySelectorAll(".select");
let selectAll = document.querySelector(".selectAll");
let totalItem = document.querySelectorAll(".totalItem");
let totalPriceBf = document.querySelector(".totalPrice");
let finalPrice = document.querySelector(".finalPrice");
let deliveryCharge = document.querySelector(".delivery");

document.querySelector("title").innerHTML =
    items.length + " items found in Cart";

selectBtn.forEach((btn, index) => {
    let quantity = quantities[index];
    let minus = minusAll[index];
    let plus = plusAll[index];

    plus.addEventListener("click", () => {
        quantity.innerHTML++;
        updateTotal();
    });

    minus.addEventListener("click", () => {
        if (quantity.innerHTML > 1) {
            quantity.innerHTML--;
            updateTotal();
        }
    });

    btn.addEventListener("input", () => {
        updateTotal();
    });
});

function updateTotal() {
    let totalQuantity = 0;
    let totalPrice = 0;
    let oneChecked = false;

    selectBtn.forEach((btn, index) => {
        let quantity = quantities[index];
        let price = Number(prices[index].innerHTML);

        if (btn.checked) {
            totalQuantity += Number(quantity.innerHTML);
            totalPrice += price * Number(quantity.innerHTML);
            oneChecked = true;
        }

        setTimeout(() => {
            if (btn.checked == false) {
                selectAll.checked = false;
            }
        }, 1);
    });

    totalItem.forEach((total) => {
        total.innerHTML = totalQuantity;
    });

    totalPriceBf.innerHTML = (totalPrice).toFixed(2);
    
    if (oneChecked) {
        finalPrice.innerHTML = (totalPrice + Number(deliveryCharge.innerHTML)).toFixed(2);
    } else {
        finalPrice.innerHTML = "0.00";
    }
}

selectAll.addEventListener("input", () => {
    selectBtn.forEach((btn) => {
        if (selectAll.checked == true) {
            btn.checked = true;
            updateTotal();
        } else {
            btn.checked = false;
            updateTotal();
        }
    })
})