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
        if (Date.now() - clickTime >= 1) {
            scrollRight();
        }
    }, 4000);
});

function updateCountdown() {
    let curDate = Date.now();
    const desDate = new Date("2030/1/1");
    let milliDesDate = desDate.getTime();
    let newDate = milliDesDate - curDate;

    const second = 1000;
    const minute = second * 60;
    const hour = minute * 60;
    const day = hour * 24;

    // const days = Math.floor(newDate / day);
    const hours = Math.floor((newDate % day) / hour);
    const minutes = Math.floor((newDate % hour) / minute);
    const seconds = Math.floor((newDate % minute) / second);

    // const paddedDays = days < 10 ? `0${days}` : days;
    const paddedHours = hours < 10 ? `0${hours}` : hours;
    const paddedMinutes = minutes < 10 ? `0${minutes}` : minutes;
    const paddedSeconds = seconds < 10 ? `0${seconds}` : seconds;

    document.querySelector(".hours").innerHTML = paddedHours;
    document.querySelector(".minutes").innerHTML = paddedMinutes;
    document.querySelector(".seconds").innerHTML = paddedSeconds;
}

setInterval(updateCountdown, 1000);



