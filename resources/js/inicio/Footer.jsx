const REDES = [
    ['fa-facebook-f', 'Facebook'],
    ['fa-instagram', 'Instagram'],
    ['fa-youtube', 'YouTube'],
];

export default function Footer({ urls }) {
    return (
        <footer className="pie-pagina">
            <div className="grupo-1">
                <div className="box">
                    <figure>
                        <a href={urls.inicio}>
                            <img src={`${urls.base}/imagenes/Logo-footer.png`} alt="Logo de Art Craft" />
                        </a>
                    </figure>
                </div>

                <div className="box">
                    <h2>SÍGUENOS</h2>
                    <div className="red-social">
                        {REDES.map(([icono, nombre]) => (
                            <a key={nombre} href="#" title={nombre}>
                                <i className={`fa-brands ${icono}`}></i>
                            </a>
                        ))}
                    </div>
                </div>

                <div className="box">
                    <h2>CONTÁCTANOS</h2>
                    <p>
                        <i className="fa-solid fa-location-dot"></i> Popayán, Cauca
                    </p>
                    <p>
                        <i className="fa-solid fa-phone"></i> +57 300 000 0000
                    </p>
                    <p>
                        <i className="fa-solid fa-envelope"></i> artcraft@gmail.com
                    </p>
                </div>

                <div className="box">
                    <h2>MÉTODOS DE PAGO</h2>
                    <div className="red-pagos">
                        <a href="#" title="Visa">
                            <i className="fa-brands fa-cc-visa"></i>
                        </a>
                        <a href="#" title="Mastercard">
                            <i className="fa-brands fa-cc-mastercard"></i>
                        </a>
                        <a href="#" className="nequi" title="Nequi">
                            N
                        </a>
                        <a href="#" title="PSE">
                            <i className="fa-solid fa-building-columns"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div className="grupo-2">
                <small>
                    &copy; {new Date().getFullYear()} <b>Art Craft</b> &middot; Todos los derechos
                    reservados.
                </small>
            </div>
        </footer>
    );
}
