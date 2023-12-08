const NightModeButton = document.getElementById("NightModeBlog");
const body = document.body;


NightModeButton.addEventListener('click', toggleDarkMode);


function toggleDarkMode() {
    body.classList.toggle('dark-mode2');
}
