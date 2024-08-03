let dropdown = document.querySelector('.menu'), //ul
submenu = document.querySelector('.menu ul'), //ul li a
buttonClick = document.querySelector('.check-button'), //button
hamburger = document.querySelector('.menu-icon');

buttonClick.addEventListener( 'click', () => {
    dropdown.classList.toggle('show-dropdown');
    if( submenu ){
        submenu.classList.toggle('show-dropdown');
    }
    hamburger.classList.toggle('animate-button');
})