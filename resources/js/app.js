import './bootstrap';

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
