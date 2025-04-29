const menuToggle = document.querySelector('.menu-toggle');
const navLinksContainer = document.querySelector('.nav-links-container');

menuToggle.addEventListener('click', () => {
    navLinksContainer.classList.toggle('show');
});
