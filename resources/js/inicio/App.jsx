import { useMemo, useState } from 'react';
import Navbar from './Navbar';
import Hero from './Hero';
import Destacados from './Destacados';
import Footer from './Footer';

export default function App({ destacados, categorias, urls }) {
    const [busqueda, setBusqueda] = useState('');
    const [carrito, setCarrito] = useState([]);

    const agregarAlCarrito = (producto) => {
        setCarrito((actual) => [...actual, producto.id]);
    };

    const productosVisibles = useMemo(() => {
        const termino = busqueda.trim().toLowerCase();

        if (!termino) {
            return destacados;
        }

        return destacados.filter((producto) =>
            [producto.nombre, producto.categoria, producto.descripcion]
                .join(' ')
                .toLowerCase()
                .includes(termino),
        );
    }, [destacados, busqueda]);

    return (
        <>
            <Navbar
                urls={urls}
                busqueda={busqueda}
                onBusqueda={setBusqueda}
                totalCarrito={carrito.length}
            />

            <main className="pagina-inicio">
                <Hero urls={urls} />

                <Destacados
                    productos={productosVisibles}
                    categorias={categorias}
                    totalCarrito={carrito.length}
                    onAgregar={agregarAlCarrito}
                    urls={urls}
                />
            </main>

            <Footer urls={urls} />
        </>
    );
}
