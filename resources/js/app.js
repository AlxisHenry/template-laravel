import './bootstrap';
import {value} from "lodash/seq";

// Extends menu features
const Burger = document.querySelector('.navbar_burger')
const NavbarContainer = document.querySelector('.navbar')
Burger.addEventListener('click', () => {
    if(NavbarContainer.classList.contains('extend')) {
        NavbarContainer.classList.remove('extend')
    } else {
        NavbarContainer.classList.add('extend')
    }
})
window.addEventListener('resize', () => {
    let w = window.innerWidth
    if (w > 980) {
        NavbarContainer.classList.remove('extend')
    }
})

// Focus on form fields at the loading of the view
const Input = document.querySelector('.auto-focus-field')
console.log(Input)
window.addEventListener('load', () => {
    Input ? Input.focus() : null
})

// Show password
const PasswordFormIcon = document.querySelectorAll('.form-icon')[1].children[0]
const PasswordInput = PasswordFormIcon.parentNode.parentNode.children[1]
PasswordFormIcon.addEventListener('mouseover', () => {
    PasswordFormIcon.className += '-open'
    PasswordInput.type = "text"
})
PasswordFormIcon.addEventListener('mouseleave', () => {
    PasswordFormIcon.className = 'fa-solid fa-lock'
    PasswordInput.type = "password"
})

// Password strength checker
let Responses = {
    first_step: 'Bad ☹',
    second_step: 'Weak ☹',
    third_step: 'Good ☺',
    fourth_step: 'Strong ☺',
    default: 'Password strength'
}

let PasswordField = document.querySelector('.form-password')
let PasswordIndicator = document.querySelector('.password_indicator')
const PASSWORD_MIN_VAL = PasswordIndicator.dataset.minval
let Progressbar = PasswordIndicator.children[0].children[0]
let ResponseElement = PasswordIndicator.children[1]

const StrengthResponse = (percent) => {
    if (percent <= 0) {
        Progressbar.style.width = "0"
        ResponseElement.innerHTML = Responses.default
        return
    }
    switch (true) {
        case percent <= 25:
            Progressbar.style.width = "25%"
            ResponseElement.innerHTML = Responses.first_step
            break;
        case percent <= 50:
            Progressbar.style.width = "50%"
            ResponseElement.innerHTML = Responses.second_step
            break;
        case percent <= 90:
            Progressbar.style.width = "75%"
            ResponseElement.innerHTML = Responses.third_step
            break;
        case percent > 90:
            Progressbar.style.width = "100%"
            ResponseElement.innerHTML = Responses.fourth_step
            break;
        default:
            Progressbar.style.width = "0"
            ResponseElement.innerHTML = Responses.default
            break;
    }
}

PasswordField.addEventListener('keyup', (e) => {
    let valueLength = parseInt(e.target.value.length)
    const PERCENT = 100 * valueLength / PASSWORD_MIN_VAL
    StrengthResponse(PERCENT)
})
