document.addEventListener('DOMContentLoaded', function () {

    const toggle = document.querySelector('.nav-toggle');
    const nav = document.querySelector('#main-nav');

    if (!toggle || !nav) {
        return;
    }

    toggle.addEventListener('click', function () {

        const isOpen = nav.classList.toggle('is-open');

        toggle.setAttribute(
            'aria-expanded',
            isOpen ? 'true' : 'false'
        );

        toggle.setAttribute(
            'aria-label',
            isOpen ? 'Fermer le menu' : 'Ouvrir le menu'
        );
    });

    nav.querySelectorAll('a').forEach(function (link) {

        link.addEventListener('click', function () {
            nav.classList.remove('is-open');

            toggle.setAttribute('aria-expanded', 'false');
            toggle.setAttribute('aria-label', 'Ouvrir le menu');
        });

    });

});