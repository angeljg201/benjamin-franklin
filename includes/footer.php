    <!-- Footer -->
    <footer id="contacto">
        <div class="container">
            <div class="footer-grid">
                <!-- Columna 1: Ubicación -->
                <div class="footer-col">
                    <h3>UBICACIÓN</h3>

                    <div class="location-info">
                        <p>Campus principal</p>
                        <p>Av. Universitaria 1234, Lima 1</p>
                        <p>15088, Perú</p>
                    </div>

                    <div class="location-links">
                        <a href="#" class="location-link">
                            <i class="fa-solid fa-location-dot"></i>
                            Cómo llegar
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                        <a href="#" class="location-link">
                            Ver mapa del campus
                            <i class="fa-solid fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Columna 2: Contacto -->
                <div class="footer-col">
                    <h3>CONTACTO</h3>

                    <div class="contact-details">
                        <p>Central telefónica 626-2000</p>
                        <p>Desde provincias 0800-1-7827 (servicio gratuito)</p>
                    </div>

                    <div class="contact-actions">
                        <a href="#" class="mensaje-box">
                            <span>Enviar mensaje</span>
                            <i class="fa-regular fa-envelope"></i>
                        </a>

                        <a href="#" class="reclamaciones-box">
                            <span class="top-text">Libro de</span>
                            <span class="bot-text">Reclamaciones</span>
                            <div class="book-icon"><i class="fa-solid fa-book-open"></i></div>
                        </a>
                    </div>
                </div>

                <!-- Columna 3: Sobre la Institución -->
                <div class="footer-col">
                    <h3>SOBRE BENJAMIN FRANKLIN</h3> <!-- Nombre genérico o específico según contexto -->

                    <div class="institution-details">
                        <p>INSTITUTO DE EDUCACIÓN SUPERIOR</p>
                        <p>RUC: 20155945860</p>
                    </div>

                    <ul class="footer-nav">
                        <li><a href="#">Mapa del sitio <i class="fa-solid fa-chevron-right"></i></a></li>
                        <li><a href="#">Términos y condiciones de uso <i class="fa-solid fa-chevron-right"></i></a></li>
                        <li><a href="#">Política de privacidad <i class="fa-solid fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="bottom-content">
                    <p>&copy; Instituto Superior Benjamin Franklin - Todos los derechos reservados</p>
                    <div class="social-links-circle">
                        <span>SÍGUENOS EN:</span>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <!-- X logo might be needed, using twitter for now or x-twitter in fa6 -->
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-spotify"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?php echo $rootPath; ?>assets/js/script.js"></script>
    <?php if (isset($extraScripts)) echo $extraScripts; ?>
</body>

</html>
