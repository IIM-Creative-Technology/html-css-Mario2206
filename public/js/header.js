const toggleButton = document.querySelector(".toggle-button")
const toggleButton2 = document.querySelector(".close")
const nav = document.querySelector("nav")

const SWITCH_CLASS = "hide-switch"

toggleButton.addEventListener("click", toggleAction)
toggleButton2.addEventListener("click", toggleAction)

function toggleAction () {
    nav.classList.toggle(SWITCH_CLASS)
}