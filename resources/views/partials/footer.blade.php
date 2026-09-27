<footer class="pie-pagina">
    <div class="grupo-1">
        <div class="box">
            <figure>
                <a href="{{ route('inicio') }}">
                    <img src="{{ asset('imagenes/Logo-footer.png') }}" alt="Logo de Art Craft">
                </a>
            </figure>
        </div>

        <div class="box">
            <h2>SÍGUENOS</h2>
            <div class="red-social">
                <a href="#" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" title="YouTube"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>

        <div class="box">
            <h2>CONTÁCTANOS</h2>
            <p><i class="fa-solid fa-location-dot"></i> Popayán, Cauca</p>
            <p><i class="fa-solid fa-phone"></i> +57 300 000 0000</p>
            <p><i class="fa-solid fa-envelope"></i> artcraft@gmail.com</p>
        </div>

        <div class="box">
            <h2>MÉTODOS DE PAGO</h2>
            <div class="red-pagos">
                <a href="#" title="Visa"><i class="fa-brands fa-cc-visa"></i></a>
                <a href="#" title="Mastercard"><i class="fa-brands fa-cc-mastercard"></i></a>
                <a href="#" class="nequi" title="Nequi">N</a>
                <a href="#" title="PSE"><i class="fa-solid fa-building-columns"></i></a>
            </div>
        </div>
    </div>

    <div class="grupo-2">
        <small>&copy; {{ date('Y') }} <b>Art Craft</b> &middot; Todos los derechos reservados.</small>
    </div>
</footer>
