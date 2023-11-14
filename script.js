const leftButton = document.querySelector(".left");
const rightButton = document.querySelector(".right");
const bannerContainer = document.querySelector(".banner");
const bannerImg = document.querySelectorAll(".banner img");

const scrollAmount = bannerContainer.offsetWidth;
let currentPosition = 0;

rightButton.addEventListener("click", () => {
    currentPosition += scrollAmount;
    bannerContainer.scrollLeft = currentPosition;
    if (currentPosition == (scrollAmount * bannerImg.length)) {
        bannerContainer.scrollLeft = 0;
        currentPosition = 0;
    }
});

leftButton.addEventListener("click", () => {
    currentPosition -= scrollAmount;
    bannerContainer.scrollLeft = currentPosition;
});
