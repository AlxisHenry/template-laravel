import './bootstrap';

const Burger = document.querySelector('.navbar_burger')
const NavbarContainer = document.querySelector('.navbar')
const BurgerContent = document.querySelector('.navbar_burger_content')

Burger.addEventListener('click', () => {

    console.log('clicked')
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
