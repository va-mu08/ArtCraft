import { useState } from 'react';

const ENLACES_MENU = [
    ['Subir producto', 'subirProducto'],
    ['Perfil del artesano', 'perfil'],
    ['Blog/Historias', 'blog'],
    ['Contacto y soporte', 'contacto'],
    ['Nosotros', 'nosotros'],
    ['Categoría', 'categorias'],
];

export default function Navbar({ urls, busqueda, onBusqueda, totalCarrito }) {
    const [menuAbierto, setMenuAbierto] = useState(false);

    return (
        <header>
            <nav className="navbar">
                <div className="logo">
                    <a href={urls.inicio} title="Art Craft">
                        <img src={`${urls.base}/imagenes/logo4.png`} alt="Logo de Art Craft" />
                    </a>
                </div>

                <div className="contenedor-busqueda">
                    <input
                        className="search-box"
                        type="search"
                        value={busqueda}
                        onChange={(evento) => onBusqueda(evento.target.value)}
                        placeholder="Buscar producto..."
                        aria-label="Buscar producto en destacados"
                    />
                    <i className="fas fa-search"></i>
                </div>

                <div className="nav-icons">
                    <a href={urls.inicio}>Inicio</a>

                    <a href={urls.perfil} title="Mi perfil">
                        <i className="fa-solid fa-user"></i>
                    </a>

                    <a href="#" title="Notificaciones">
                        <i className="fa-solid fa-bell"></i>
                    </a>

                    <a href={urls.carrito} title="Carrito de compras" className="carrito-icono">
                        <i className="fa-solid fa-cart-shopping"></i>
                        {totalCarrito > 0 && <span className="contador-carrito">{totalCarrito}</span>}
                    </a>

                    <div className={`menu-container ${menuAbierto ? 'activo' : ''}`}>
                        <a
                            href="#"
                            className="btn-menu"
                            title="Menú"
                            onClick={(evento) => {
                                evento.preventDefault();
                                setMenuAbierto((abierto) => !abierto);
                            }}
                        >
                            <i className="fa-solid fa-bars"></i>
                        </a>

                        <div className="menu-lateral">
                            {ENLACES_MENU.map(([texto, clave]) => (
                                <a key={clave} href={urls[clave]} onClick={() => setMenuAbierto(false)}>
                                    {texto}
                                </a>
                            ))}
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    );
}
