let dropdown = document.querySelector('.menu'), //ul
submenu = document.querySelector('.menu ul'), //ul li a
buttonClick = document.querySelector('.hamburger-menu'), //button
hamburger = document.querySelector('.menu-icon');
ariaExpanded = false;

buttonClick.addEventListener( 'click', () => {
    dropdown.classList.toggle('show-dropdown');
    if( submenu ){
        submenu.classList.toggle('show-dropdown');
    }
    hamburger.classList.toggle('animate-button');
    ariaExpanded = !ariaExpanded;
    buttonClick.ariaExpanded = ariaExpanded;
})