document.addEventListener('DOMContentLoaded', () => {
    const toggle = document.querySelector('[data-nav-toggle]');
    const nav = document.querySelector('[data-main-nav]');

    if (!toggle || !nav) {
        return;
    }

    const closeNavigation = () => {
        nav.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
        toggle.setAttribute('aria-label', toggle.dataset.labelOpen);
    };

    toggle.addEventListener('click', () => {
        const isOpen = nav.classList.toggle('is-open');

        toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        toggle.setAttribute('aria-label', isOpen
            ? toggle.dataset.labelClose
            : toggle.dataset.labelOpen);
    });

    nav.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', closeNavigation);
    });
});
