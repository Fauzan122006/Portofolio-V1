const NightModeButton = document.getElementById("NightModeButton");
const body = document.body;


NightModeButton.addEventListener('click', toggleDarkMode);


function toggleDarkMode() {
    body.classList.toggle('dark-mode');
}
