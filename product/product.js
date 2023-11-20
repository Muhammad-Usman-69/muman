const leftButton = document.querySelector(".left");
const rightButton = document.querySelector(".right");
const bannerContainer = document.querySelector(".banner");
const bannerImg = document.querySelectorAll(".banner img");

const scrollAmount = bannerContainer.offsetWidth;
let currentPosition = 0;
let clickTime = Date.now();

function scrollRight() {
    clickTime = Date.now();
    currentPosition += scrollAmount;
    bannerContainer.scrollLeft = currentPosition;
    
    if (currentPosition == (scrollAmount * bannerImg.length)) {
        bannerContainer.scrollLeft = 0;
        currentPosition = 0;
    }
};

rightButton.addEventListener("click",scrollRight);

leftButton.addEventListener("click", () => {
    currentPosition -= scrollAmount;
    bannerContainer.scrollLeft = currentPosition;
});

window.addEventListener('load', () => {
    setInterval(() => {
        if (Date.now() - clickTime >= 4000) {
            scrollRight();
        }
    }, 1);
});

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

const originalText = "Cowin Blue Wholesale Aviation Active Noise Cancelling Headphones Wired Gaming Earphones Headsets Bluetooth Headphones Wireless";
const characters = originalText.split(' ');
const hyphenatedText = characters.join('-');

// Get the element with id "output" and set its innerHTML to the hyphenated text
console.log(hyphenatedText);