/*
* This file contains globals js of auth views
* */

// Autofocus form input
const AutoFocusInput = () => {
    let autofocus_input = document.querySelector('.auto-focus-field')
    autofocus_input ? autofocus_input.focus() : null
}

// Toggle password visibility
const TogglePasswordVisibility = () => {
    let password_lock_icon = document.querySelector('.fa-solid.fa-lock')
    let password_input = password_lock_icon.parentNode.parentNode.children[1]
    if (!password_lock_icon || !password_input) {
        return false;
    }
    password_lock_icon.addEventListener('mouseover', () => {
        password_lock_icon.className += '-open'
        password_input.type = "text"
    })
    password_lock_icon.addEventListener('mouseleave', () => {
        password_lock_icon.className = 'fa-solid fa-lock'
        password_input.type = "password"
    })
}

window.addEventListener('load', () => {
    AutoFocusInput()
    TogglePasswordVisibility()
})
