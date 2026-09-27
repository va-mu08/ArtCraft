import { useState } from 'react';

const precioFormato = (valor) => `$ ${new Intl.NumberFormat('es-CO').format(valor)}`;

export default function Destacados({ productos, categorias, totalCarrito, onAgregar, urls }) {
    const [categoria, setCategoria] = useState('Todas');
    const [agregados, setAgregados] = useState([]);

    const visibles = categoria === 'Todas'
        ? productos
        : productos.filter((producto) => producto.categoria === categoria);

    const agregar = (producto) => {
        onAgregar(producto);
        setAgregados((lista) => [...lista, producto.id]);
    };

    return (
        <section className="destacados">
            <h2>Destacados del mes</h2>
            <p>Descubre las piezas artesanales más admiradas por nuestros visitantes.</p>

            <div className="filtros-categoria">
                {['Todas', ...categorias].map((nombre) => (
                    <button
                        key={nombre}
                        type="button"
                        className={`chip ${categoria === nombre ? 'activo' : ''}`}
                        onClick={() => setCategoria(nombre)}
                    >
                        {nombre}
                    </button>
                ))}

                <span className="contador-carrito-resumen">
                    <i className="fa-solid fa-cart-shopping"></i> {totalCarrito} en el carrito
                </span>
            </div>

            <div className="productos">
                {visibles.length === 0 && (
                    <p className="sin-resultados">No hay productos que coincidan con la búsqueda.</p>
                )}

                {visibles.map((producto) => (
                    <article className="producto" key={producto.id}>
                        <img src={producto.imagen} alt={producto.nombre} loading="lazy" />

                        <p className="nombre-producto">{producto.nombre}</p>
                        <p className="precio-producto">{precioFormato(producto.precio)}</p>

                        <div className="acciones-producto">
                            <a href={producto.url} className="boton-principal boton-chico">
                                Ver más
                            </a>

                            <button
                                type="button"
                                className="boton-agregar"
                                onClick={() => agregar(producto)}
                            >
                                {agregados.includes(producto.id) ? 'Agregado' : 'Agregar'}
                            </button>
                        </div>
                    </article>
                ))}
            </div>

            <div className="enlaces-inicio">
                <a href={urls.categorias} className="boton-principal">
                    Ver todo el catálogo
                </a>
            </div>
        </section>
    );
}
