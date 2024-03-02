const menuSearch = document.querySelector('.menu__search') as HTMLInputElement | null;
const search = document.querySelector('.search') as HTMLInputElement | null;
const header = document.querySelector('.header') as HTMLElement | null;
const overlayClose = document.querySelector('.overlay__close') as HTMLElement | null;

if (menuSearch && search && header && overlayClose) {
    menuSearch.addEventListener('click', () => {
        search.classList.toggle('active');
        overlayClose.classList.toggle('active');

        const overlaySearch = document.querySelector('.overlay-search') as HTMLElement | null;

        if (!overlaySearch) {
            const overlay = document.createElement('div');
            overlay.className = 'overlay-search';
            header.appendChild(overlay);

            overlay.addEventListener('click', () => {
                search.classList.toggle('active');
                header.removeChild(overlay);
                overlayClose.classList.toggle('active');
            });
        } else {
            header.removeChild(overlaySearch);
        }
    });
}
