<?php
$pageTitle = "Contacto - Benjamin Franklin";
$rootPath = "../";
include '../includes/header.php';
?>

<main>
    <!-- Hero Section (Reusing Course Hero) -->
    <section class="course-hero" style="padding: 120px 0 60px;">
        <div class="container">
            <div class="hero-content" style="text-align: center;">
                <span class="hero-badge">INSTITUCIONAL</span>
                <h1 style="margin-top: 15px;">CONTACTO</h1>
                <p>Estamos aquí para ayudarte. Comunícate con nosotros para cualquier consulta o información.</p>
            </div>
        </div>
    </section>

    <!-- Form Section (Reusing Banner Contacto layout) -->
    <section class="banner-contacto" style="background: #f9fafb; padding: 80px 0;">
        <div class="container banner-grid">
            <!-- Left Content: Text -->
            <div class="banner-text">
                <span style="color: var(--secondary-color); font-weight: 700; display: block; margin-bottom: 10px;">¿NECESITAS MÁS INFORMACIÓN?</span>
                <h2 class="contact-page-title" style="color: var(--primary-color); margin-bottom: 20px; line-height: 1.2;">¿Tienes alguna consulta?</h2>
                <p class="banner-subtitle" style="margin-bottom: 30px;">Déjanos tus datos y nos comunicaremos contigo a la brevedad posible.</p>
                
                <a href="https://wa.me/51995364552?text=<?php echo urlencode('¡Hola! Estoy en la pagina web y me gustaría obtener más información.'); ?>" target="_blank" class="btn btn-whatsapp" style="display: inline-flex; align-items: center; gap: 10px; padding: 15px 30px;">
                    <i class="fa-brands fa-whatsapp" style="font-size: 1.2rem;"></i> Contactar por WhatsApp
                </a>
            </div>

            <!-- Right Content: Form (Reusing Form Card) -->
            <div class="banner-form-card">
                <form action="#" class="lead-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label>Nombres</label>
                            <input type="text" name="nombres" placeholder="Ingresa tus nombres" required>
                        </div>
                        <div class="form-group">
                            <label>Apellidos</label>
                            <input type="text" name="apellidos" placeholder="Ingresa tus apellidos" required>
                        </div>
                    </div>

                    <div class="form-row">
                         <div class="form-group">
                            <label>DNI</label>
                            <input type="text" name="dni" placeholder="Ingresa tu DNI" maxlength="8" pattern="[0-9]*" required>
                        </div>
                        <div class="form-group">
                            <label>Teléfono / Celular</label>
                            <input type="tel" name="telefono" placeholder="Ingresa tu número" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Correo Electrónico</label>
                        <input type="email" name="email" placeholder="ejemplo@correo.com" required>
                    </div>

                    <div class="form-group">
                        <label>Selecciona tu Interés</label>
                        <div class="select-wrapper">
                            <select name="interes" required>
                                <option value="" disabled selected>-- Seleccionar --</option>
                                <option value="Cursos">Cursos Libres</option>
                                <option value="Programas">Programas de Especialización</option>
                                <option value="Corporativo">Capacitación Corporativa</option>
                                <option value="Otros">Otros</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Mensaje (Opcional)</label>
                        <textarea name="mensaje" class="form-control" rows="4" placeholder="Escribe tu mensaje aquí..." style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; font-family: inherit;"></textarea>
                        <div style="text-align: right; font-size: 0.8rem; color: #666; margin-top: 5px;">0 caracteres / 0 palabras</div>
                    </div>

                    <button type="submit" class="btn btn-secondary btn-block">ENVIAR CONSULTA</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Contact Info Section (Reusing PQ Grid - 4 columns) -->
    <section class="por-que-estudiar" style="background: white; padding: 80px 0;">
        <div class="container">
            <div class="section-header" style="text-align: center; margin-bottom: 50px;">
                <h2>Contáctanos</h2>
                <p>Escríbenos o llámanos a través de los siguientes medios</p>
            </div>

            <div class="pq-grid">
                <!-- Teléfonos -->
                <div class="pq-card" style="text-align: center;">
                    <div class="pq-icon"><i class="fa-solid fa-phone-volume"></i></div>
                    <div class="pq-content">
                        <h3>TELÉFONOS</h3>
                        <p>+01 225-1146</p>
                        <p>+01 226-2674</p>
                    </div>
                </div>

                <!-- WhatsApp -->
                <div class="pq-card" style="text-align: center;">
                    <div class="pq-icon"><i class="fa-brands fa-whatsapp"></i></div>
                    <div class="pq-content">
                        <h3>WHATSAPP</h3>
                        <p>+51 995 114 947</p>
                    </div>
                </div>

                <!-- Chat -->
                <div class="pq-card" style="text-align: center;">
                    <div class="pq-icon"><i class="fa-regular fa-comments"></i></div>
                    <div class="pq-content">
                        <h3>CHAT</h3>
                        <p>Escríbenos en Redes</p>
                    </div>
                </div>

                <!-- Correos -->
                <div class="pq-card" style="text-align: center;">
                    <div class="pq-icon"><i class="fa-regular fa-envelope"></i></div>
                    <div class="pq-content">
                        <h3>CORREOS</h3>
                        <p>informes@localhost</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Section (Reusing PQ Grid again for consistency in 4 cols) -->
    <section class="por-que-estudiar" style="background: #f4f4f4; padding: 80px 0;">
        <div class="container">
            <div class="section-header" style="text-align: center; margin-bottom: 50px;">
                <h2>REDES SOCIALES</h2>
                <p>Conéctate con nosotros para descubrir contenido exclusivo</p>
            </div>

            <div class="pq-grid">
                <!-- Facebook -->
                <div class="pq-card" style="text-align: center;">
                    <div class="pq-icon"><i class="fa-brands fa-facebook-f" style="color: #1877F2;"></i></div>
                    <div class="pq-content">
                        <h3>FACEBOOK</h3>
                        <p>Somos más de 6 mil en Facebook. ¡Síguenos!</p>
                    </div>
                </div>

                <!-- YouTube -->
                <div class="pq-card" style="text-align: center;">
                    <div class="pq-icon"><i class="fa-brands fa-youtube" style="color: #FF0000;"></i></div>
                    <div class="pq-content">
                        <h3>YOUTUBE</h3>
                        <p>Contenido educativo de calidad. ¡Suscríbete!</p>
                    </div>
                </div>

                <!-- Instagram -->
                <div class="pq-card" style="text-align: center;">
                    <div class="pq-icon"><i class="fa-brands fa-instagram" style="color: #bc1888;"></i></div>
                    <div class="pq-content">
                        <h3>INSTAGRAM</h3>
                        <p>Descubre inspiración educativa. ¡Síguenos!</p>
                    </div>
                </div>

                <!-- TikTok -->
                <div class="pq-card" style="text-align: center;">
                    <div class="pq-icon"><i class="fa-brands fa-tiktok" style="color: #000;"></i></div>
                    <div class="pq-content">
                        <h3>TIKTOK</h3>
                        <p>Aprende y diviértete con nosotros. ¡Síguenos!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location Section (Reusing About Layout) -->
    <section id="ubicacion" class="about" style="padding: 80px 0;">
        <div class="container about-content">
            <!-- Left: Map (Using about-img container) -->
            <div class="about-img" style="height: 400px;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.665427402047!2d-77.0051658!3d-12.0863001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8771c9cc189%3A0x1e360432314987f6!2sAv.%20Aviaci%C3%B3n%202484%2C%20San%20Borja%2015034!5e0!3m2!1ses!2spe!4v1700000000000!5m2!1ses!2spe" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="width: 100%; height: 100%; border: 0; border-radius: 10px;"></iframe>
            </div>

            <!-- Right: Text (Using about-text container) -->
            <div class="about-text">
                <div class="section-header" style="text-align: left; margin-bottom: 30px;">
                    <h2>Ubicación</h2>
                </div>
                
                <div style="margin-bottom: 30px;">
                    <h3 style="color: var(--primary-color); margin-bottom: 10px; font-size: 1.2rem;">DIRECCIÓN</h3>
                    <p style="font-size: 1.1rem; color: #555;">Av. Aviación 2484, San Borja, Lima, Perú</p>
                </div>

                <div>
                    <h3 style="color: var(--primary-color); margin-bottom: 10px; font-size: 1.2rem;">INDICACIONES</h3>
                    <ul style="list-style: none; padding: 0;">
                        <li style="margin-bottom: 15px; display: flex; gap: 10px; align-items: start;">
                            <i class="fa-solid fa-location-dot" style="color: var(--secondary-color); margin-top: 5px;"></i>
                            <span style="font-size: 1.1rem; color: #555;">Estamos a una cuadra de la Av. Javier Prado Este.</span>
                        </li>
                        <li style="display: flex; gap: 10px; align-items: start;">
                            <i class="fa-solid fa-building" style="color: var(--secondary-color); margin-top: 5px;"></i>
                            <span style="font-size: 1.1rem; color: #555;">Ubicados a poca distancia del centro comercial “La Rambla”.</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

</main>

<script>
    // Simple char counter reuse if needed, or inline
    const textarea = document.querySelector('textarea[name="mensaje"]');
    const counter = textarea ? textarea.nextElementSibling : null;
    if(textarea && counter) {
        textarea.addEventListener('input', function() {
            const l = this.value.length;
            const w = this.value.trim() === '' ? 0 : this.value.trim().split(/\s+/).length;
            counter.innerText = `${l} caracteres / ${w} palabras`;
        });
    }
</script>

<?php include '../includes/footer.php'; ?>
