/*
* This file contains js functions of sign-up view
* */

// Password strength checker
const RESPONSES = {
    first_step: 'Bad ☹',
    second_step: 'Weak ☹',
    third_step: 'Good ☺',
    fourth_step: 'Strong ☺',
    default: 'Password strength'
}
const PASSWORD_MIN_LENGTH = 8

let password_field = document.querySelector('.form-password')
let password_indicator = document.querySelector('.password_indicator')
let progressbar = password_indicator.children[0].children[0]
let response_element = password_indicator.children[1]

const StrengthResponse = (percent) => {
    if (percent <= 0) {
        progressbar.style.width = "0"
        response_element.innerHTML = RESPONSES.default
        return
    }
    switch (true) {
        case percent <= 25:
            progressbar.style.width = "25%"
            response_element.innerHTML = RESPONSES.first_step
            break;
        case percent <= 50:
            progressbar.style.width = "50%"
            response_element.innerHTML = RESPONSES.second_step
            break;
        case percent <= 90:
            progressbar.style.width = "75%"
            response_element.innerHTML = RESPONSES.third_step
            break;
        case percent > 90:
            progressbar.style.width = "100%"
            response_element.innerHTML = RESPONSES.fourth_step
            break;
        default:
            progressbar.style.width = "0"
            response_element.innerHTML = RESPONSES.default
            break;
    }
}

password_field.addEventListener('keyup', (e) => {
    let value_length = parseInt(e.target.value.length)
    const PERCENT = 100 * value_length / PASSWORD_MIN_LENGTH
    StrengthResponse(PERCENT)
})
