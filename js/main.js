// BURGER MENU TOGGLE

var burger_menu = document.querySelector('.burger-icon'),
    main_nav = document.querySelector('.burger-menu-inner');

burger_menu.addEventListener('click', function () {
    if (!this.classList.contains('opened')) {
        this.classList.add('opened');
        main_nav.classList.add('opened');
    }
    else {
        this.classList.remove('opened');
        main_nav.classList.remove('opened');
    }
});