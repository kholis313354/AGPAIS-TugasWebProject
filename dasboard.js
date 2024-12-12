// Dark Mode

const sideMenu = document.querySelector("aside");
const menuBtn = document.getElementById("menu-btn");
const closeBtn = document.getElementById("close-btn");
const darkModeLayer = document.querySelector(".dark-mode-layer");
const darkMode = document.querySelector(".dark-mode");
const modeDark = document.querySelector(".copyrightText");

menuBtn.addEventListener("click", () => {
  sideMenu.style.display = "block";
});

closeBtn.addEventListener("click", () => {
  sideMenu.style.display = "none";
});
function isDarkModeActive() {
  const cookies = document.cookie.split(';');
  for (const cookie of cookies) {
    const [key, value] = cookie.trim().split('=');
    if (key === 'darkMode' && value === 'true') {
      return true;
    }
  }
  return false;
}

function initializeDarkMode() {
  if (isDarkModeActive()) {
    document.body.classList.add("dark-mode-variables");
    darkModeLayer.classList.add("night");
  } else {
    document.body.classList.remove("dark-mode-variables");
    darkModeLayer.classList.remove("night");
  }
}

darkMode.addEventListener("click", () => {
  document.body.classList.toggle("dark-mode-variables");
  darkModeLayer.classList.toggle("night");
  setDarkModeCookie();
});

modeDark.addEventListener("click", () => {
  document.body.classList.toggle("dark-mode-variables");
  darkModeLayer.classList.toggle("night");
  setDarkModeCookie();
});

function setDarkModeCookie() {
  const isDarkMode = document.body.classList.contains('dark-mode-variables');
  document.cookie = `darkMode=${isDarkMode}; expires=365d; path=/`;
}
window.onload = initializeDarkMode;
