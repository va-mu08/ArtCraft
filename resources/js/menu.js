const botonMenu = document.querySelector('.menu-container .btn-menu');
const menuLateral = document.querySelector('.menu-lateral');

if (botonMenu && menuLateral) {
    botonMenu.addEventListener('click', (evento) => {
        evento.preventDefault();
        botonMenu.parentElement.classList.toggle('activo');
    });

    document.addEventListener('click', (evento) => {
        if (!menuLateral.parentElement.contains(evento.target)) {
            menuLateral.parentElement.classList.remove('activo');
        }
    });

    document.addEventListener('keydown', (evento) => {
        if (evento.key === 'Escape') {
            menuLateral.parentElement.classList.remove('activo');
        }
    });
}
