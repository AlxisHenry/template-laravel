/*
* This file contains all js for the navigation component
* */

// Extends menu features
export const NavbarAnimation = () => {
    const Burger = document.querySelector('.navbar_burger')
    const NavbarContainer = document.querySelector('.navbar')

    if (!Burger || !NavbarContainer) {
        return false;
    }

    Burger.addEventListener('click', () => {
        NavbarContainer.classList.toggle('extend')
    })
    window.addEventListener('resize', () => {
        if (window.innerWidth > 980) {
            NavbarContainer.classList.remove('extend')
        }
    })

}
