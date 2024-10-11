// header burger menu
const burgerMenu = document.querySelector(".burger-menu");
const burgerMenuLines = document.querySelectorAll(".burger-menu__line");
const mobileNav = document.querySelector(".mobile-nav");
let burgerMenuBool = true;

burgerMenu.addEventListener("click", (e) => {
    e.stopPropagation();
    if (burgerMenuBool) {
        mobileNav.style.display = "block";
        burgerMenu.style["justify-content"] = "center";
        burgerMenuLines[0].style.transform = "rotate(45deg)";
        burgerMenuLines[1].style.display = "none";
        burgerMenuLines[2].style.transform = "rotate(-45deg)";
        burgerMenuLines[2].style["margin-top"] = "-1px";
    }
    else {
        mobileNav.style.display = "none";
        burgerMenu.style["justify-content"] = "space-between";
        burgerMenuLines[0].style.transform = "rotate(0deg)";
        burgerMenuLines[1].style.display = "inline-block";
        burgerMenuLines[2].style.transform = "rotate(0deg)";
        burgerMenuLines[2].style["margin-top"] = "0";
    }
    burgerMenuBool = !burgerMenuBool;
});
mobileNav.addEventListener("click", (e) => {
    e.stopPropagation();
})






// header mobile
const headerMobArrows = document.querySelectorAll(".header-mob__arrow");
const headerMobMenuLists = document.querySelectorAll(".header-mob__menu_list");
let selectedElem = null;

headerMobArrows.forEach((item, i) => {
    item.addEventListener("click", () => {
        headerMobArrows.forEach((item2, j) => {
            if (i != j) {
                headerMobMenuLists[j].style.display = "none";
                headerMobArrows[j].style.transform = "rotate(0)";
            }
            else {
                headerMobMenuLists[i].style.display = "flex";
                headerMobArrows[i].style.transform = "rotate(180deg)";
            }
        })
        if (selectedElem == item) {
            headerMobMenuLists[i].style.display = "none";
            headerMobArrows[i].style.transform = "rotate(0)";
            selectedElem = null;
        } else {
            selectedElem = item;
        }
    })
})






// document click event
document.addEventListener("click", (e) => {
    mobileNav.style.display = "none";
    burgerMenu.style["justify-content"] = "space-between";
    burgerMenuLines[0].style.transform = "rotate(0deg)";
    burgerMenuLines[1].style.display = "inline-block";
    burgerMenuLines[2].style.transform = "rotate(0deg)";
    burgerMenuLines[2].style["margin-top"] = "0";
    burgerMenuBool = true;
});

//accessibility instruments  dark/light
const html = document.querySelector('html');
const theme = sessionStorage.getItem("data-theme");

if(theme) html.setAttribute("data-theme", theme);


const lightButtonS = document.querySelectorAll(".lightButton");
lightButtonS.forEach(button => {
    button.addEventListener("click", () => {
        document.documentElement.setAttribute("data-theme", "light");
        sessionStorage.setItem("data-theme", "light");
    });
});

const darkButtons = document.querySelectorAll(".darkButton");
darkButtons.forEach(button => {
    button.addEventListener("click", () => {
        document.documentElement.setAttribute("data-theme", "dark");
        sessionStorage.setItem("data-theme", "dark");
    });
});

const downButtons = document.querySelectorAll(".downButton");
const upButtons = document.querySelectorAll(".upButton");
const resetButtons = document.querySelectorAll(".restartButton");
const fontSize = sessionStorage.getItem("current-font-size");
const sizeSpan = document.querySelector(".current__size");


// Set initial font size from session storage or default
let currentFontSize = fontSize ? +fontSize : 16;
html.style.fontSize = `${currentFontSize}px`;
sizeSpan.innerText = `${currentFontSize}PX`;

// Function to update the font size
const updateFontSize = (sizeChange) => {
    currentFontSize = Math.max(7, Math.min(25, currentFontSize + sizeChange)); // Clamp size between 7 and 25
    html.style.fontSize = `${currentFontSize}px`;
    sizeSpan.innerText = `${currentFontSize}PX`;
    sessionStorage.setItem("current-font-size", currentFontSize);
};

downButtons.forEach(button => {
    button.addEventListener("click", () => {
        upButtons.forEach(up => up.style.opacity = "unset");
        if (currentFontSize > 7) {
            updateFontSize(-3);
        }
        if (currentFontSize <= 7) button.style.opacity = "0.5";
        else button.style.opacity = "unset";
    });
});

upButtons.forEach(button => {

    button.addEventListener("click", () => {
        downButtons.forEach(down => down.style.opacity = "unset");
        if (currentFontSize < 25) {
            updateFontSize(3);
        }
        if (currentFontSize >= 25) button.style.opacity = "0.5";
        else button.style.opacity = "unset";
    });
});

resetButtons.forEach(button => {
    button.addEventListener("click", () => {
        currentFontSize = 16;
        updateFontSize(0); // Reset to default size
        downButtons.forEach(down => down.style.opacity = "unset");
        upButtons.forEach(up => up.style.opacity = "unset");
    });
});

document.addEventListener("DOMContentLoaded", () => {
    if (currentFontSize >= 25) {
        upButtons.forEach(up => up.style.opacity = "0.5");
    }
    if (currentFontSize <= 7) {
        downButtons.forEach(down => down.style.opacity = "0.5");
    }
});
