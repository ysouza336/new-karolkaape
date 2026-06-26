'use-strict';


const toggle = document.querySelector('.menu-toggle');
const menu = document.querySelector('.menu-principal');
const overlay = document.querySelector('.overlay-menu');

toggle.addEventListener('click', () => {

    menu.classList.toggle('ativo');

    overlay.classList.toggle('ativo');

    if(menu.classList.contains('ativo')) {

        toggle.classList.remove('fa-bars');
        toggle.classList.add('fa-xmark');

    } else {

        toggle.classList.remove('fa-xmark');
        toggle.classList.add('fa-bars');

    }

});

overlay.addEventListener('click', () => {

    menu.classList.remove('ativo');

    overlay.classList.remove('ativo');

    toggle.classList.remove('fa-xmark');
    toggle.classList.add('fa-bars');

});

/**FILTROS */

document.addEventListener('DOMContentLoaded', function () {

    var grid = document.querySelector('.gallery-grid');

    if (!grid) return;

    var iso = new Isotope(grid, {
        itemSelector: '.gallery-item',
        layoutMode: 'fitRows'
    });

    var filterButtons = document.querySelectorAll('.filters .btn');

    filterButtons.forEach(function (btn) {
        btn.addEventListener('click', function () {

            // remove active de todos e adiciona no clicado
            filterButtons.forEach(b => b.classList.remove('btn-dark'));
            filterButtons.forEach(b => b.classList.add('btn-outline-dark'));
            this.classList.remove('btn-outline-dark');
            this.classList.add('btn-dark');

            var filterValue = this.getAttribute('data-filter');
            iso.arrange({ filter: filterValue });
        });
    });

});



