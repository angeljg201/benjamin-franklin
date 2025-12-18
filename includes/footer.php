    <!-- Footer -->
    <footer id="contacto">
        <div class="container">
            <div class="footer-grid">
                <!-- Columna 1: Ubicación -->
                <div class="footer-col">
                    <h3>UBICACIÓN</h3>

                    <div class="location-info">
                        <p>Campus principal</p>
                        <p>Av. Aviación 2484 - San Borja Lima Perú</p>
                        <p>A una cuadra de la Av. Javier Prado Este</p>
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
                        <p>Central telefónica: 01 254-0591</p>
                        <p>Correo electrónico: informes@bf.edu.pe</p>
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
                        <p>RUC: 20518638956</p>
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
                        <a href="https://www.facebook.com/corporacioneducativabenjaminfranklin" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/corporacion_bf/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.tiktok.com/@corporacionbf" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="https://www.youtube.com/@corporacionbf" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="floating-container">
        <!-- Floating WhatsApp (Global) -->
        <a href="https://wa.me/51956704678?text=Buen%20día,%20estoy%20en%20la%20pagina%20web%20y%20estoy%20interesado%20en%20inscribirme%20en%20la%20Corporación%20Educativa%20Benjamin%20Franklin.%20¿Podrían%20proporcionarme%20más%20información?" 
           class="floating-btn btn-float-whatsapp" 
           target="_blank" 
           rel="noopener noreferrer" 
           title="Escríbenos por WhatsApp">
            <i class="fa-brands fa-whatsapp"></i>
        </a>
        
        <?php if (isset($floatingExtra)) echo $floatingExtra; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="<?php echo $rootPath; ?>assets/js/script.js"></script>
    <?php if (isset($extraScripts)) echo $extraScripts; ?>
</body>

</html>
