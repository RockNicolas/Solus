let menuOpen = false;

function toggleMenu(event) {
    const logo = document.getElementById('logo');
    const menu = document.querySelector('.dropdown-menu');

    logo.classList.toggle('clicked');
    menu.classList.toggle('show');

    if (menu.classList.contains('show')) {
        logo.classList.add('slow-rotate'); 
    } else {
        logo.classList.remove('slow-rotate');
    }

    menuOpen = !menuOpen;
    event.stopPropagation();
}

document.addEventListener('click', function(event) {
    const menu = document.querySelector('.dropdown-menu');
    const logo = document.getElementById('logo');
    const logoContainer = document.querySelector('.logo-container');

    if (menuOpen && !logoContainer.contains(event.target) && !menu.contains(event.target)) {
        menu.classList.remove('show');
        logo.classList.remove('slow-rotate'); 
        logo.classList.remove('clicked'); 
        menuOpen = false; 
    }
});
