import { createRoot } from 'react-dom/client';
import App from './inicio/App';

const contenedor = document.getElementById('artcraft-inicio');

const leerDato = (atributo, valorInicial) => {
    try {
        return JSON.parse(contenedor.dataset[atributo]) ?? valorInicial;
    } catch {
        return valorInicial;
    }
};

const props = {
    destacados: leerDato('destacados', []),
    categorias: leerDato('categorias', []),
    urls: leerDato('urls', {}),
};

createRoot(contenedor).render(<App {...props} />);
