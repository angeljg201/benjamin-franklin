<?php
$pageTitle = "Instituto Profesional | Formación de Excelencia";
$rootPath = "./";
include 'includes/header.php';
?>

    <!-- Hero Section -->
    <section id="inicio" class="hero">
        <img src="assets/img/hero-students.png" alt="Estudiantes en campus" class="hero-bg">
        <div class="overlay"></div>

        <div class="container hero-content">
            <span class="hero-tagline">Más de 15 años de excelencia</span>
            <h1>Formando profesionales para el mundo real</h1>
            <p>Descubre tu potencial con nuestra metodología práctica y convenios universitarios que impulsan tu carrera
                al siguiente nivel.</p>

            <div class="hero-buttons">
                <a href="#carreras" class="btn btn-secondary">Ver Carreras</a>
                <a href="#cursos" class="btn btn-outline">Conoce Nuestros Cursos</a>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main>
        <!-- Sección: Por qué estudiar en UPN (añadida) -->
        <section id="por-que-estudiar" class="por-que-estudiar">
            <div class="container">
                <div class="pq-header">
                    <h2>¿Por qué estudiar en Benjamin Franklin?</h2>
                </div>

                <div class="pq-grid">
                    <div class="pq-card">
                        <div class="pq-icon"><i class="fa-solid fa-medal"></i></div>
                        <div class="pq-content">
                            <h3>CALIDAD ACADÉMICA CERTIFICADA</h3>
                            <p>Reconocida por prestigiosos rankings y acreditadoras nacionales e internacionales.</p>
                        </div>
                    </div>

                    <div class="pq-card">
                        <div class="pq-icon"><i class="fa-solid fa-globe"></i></div>
                        <div class="pq-content">
                            <h3>INNOVADOR MODELO EDUCATIVO</h3>
                            <p>Que te prepara de forma práctica, especializada y conectada con el mundo real.</p>
                        </div>
                    </div>

                    <div class="pq-card">
                        <div class="pq-icon"><i class="fa-solid fa-briefcase"></i></div>
                        <div class="pq-content">
                            <h3>ALTA EMPLEABILIDAD</h3>
                            <p>9 de cada 10 egresados trabajan (Ipsos 2024)</p>
                        </div>
                    </div>

                    <div class="pq-card">
                        <div class="pq-icon"><i class="fa-solid fa-desktop"></i></div>
                        <div class="pq-content">
                            <h3>INFRAESTRUCTURA Y TECNOLOGÍA DE VANGUARDIA</h3>
                            <p>Espacios diseñados para aplicar metodologías activas acorde con las exigencias del
                                futuro.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Lead Generation Form Section -->
        <section id="banner-contacto" class="banner-contacto">
            <div class="container banner-grid">
                <div class="banner-text">
                    <h2>Conecta con tu futuro profesional</h2>
                    <p class="banner-subtitle">Da el primer paso hacia el éxito. Tu formación de excelencia comienza
                        aquí.</p>
                    <div class="banner-features">
                        <div class="b-feature">
                            <i class="fa-solid fa-check"></i>
                            <span>Asesoría personalizada</span>
                        </div>
                        <div class="b-feature">
                            <i class="fa-solid fa-check"></i>
                            <span>Becas y financiamiento</span>
                        </div>
                    </div>
                </div>

                <div class="banner-form-card">
                    <form action="#" class="lead-form" id="submit-to-google-sheet">
                        <div class="form-row">
                            <div class="form-group">
                                <label>Nombre/s</label>
                                <input type="text" name="first_name" placeholder="Ingresa tu nombre" required>
                            </div>
                            <div class="form-group">
                                <label>Apellidos</label>
                                <input type="text" name="last_name" placeholder="Ingresa tus apellidos" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Correo Electrónico</label>
                            <input type="email" name="email" placeholder="ejemplo@correo.com" required>
                        </div>

                        <div class="form-group">
                            <label>Celular</label>
                            <input type="tel" name="phone" placeholder="999 999 999" required>
                        </div>

                        <div class="form-group">
                            <label>¿Qué quieres estudiar?</label>
                            <div class="select-wrapper">
                                <select name="study_type" id="study-type" required>
                                    <option value="" disabled selected>Selecciona una opción</option>
                                    <option value="cursos">Cursos de Especialización</option>
                                    <option value="programas">Programas de Especialización</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Programa/Curso de Interés</label>
                            <div class="select-wrapper">
                                <select name="specific_program" id="specific-program" required disabled>
                                    <option value="" disabled selected>Selecciona primero el tipo</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-check">
                            <label class="custom-checkbox">
                                <input type="checkbox" name="privacy" required>
                                <span class="checkmark"></span>
                                <span class="check-text">He leído y acepto las <strong>políticas de
                                        privacidad</strong>.</span>
                            </label>
                        </div>

                        <button type="submit" class="btn btn-secondary btn-block">¡Contáctenme!</button>
                    </form>
                </div>
            </div>
        </section>

        <!-- Nosotros Section -->
        <section id="nosotros" class="about">
            <div class="container about-content">
                <div class="about-text">
                    <div class="section-header" style="text-align: left; margin: 0 0 30px 0;">
                        <h2>Nuestra Historia</h2>
                        <p>15 años construyendo futuro</p>
                    </div>
                    <p>
                        Desde hace más de una década y media, nos dedicamos a formar profesionales altamente
                        capacitados,
                        respondiendo a las exigencias de un mercado laboral en constante evolución. Nuestra institución
                        se ha consolidado como un referente en educación superior técnica, gracias a nuestra metodología
                        práctica y enfoque humano.
                    </p>
                    <p>
                        Contamos con un respaldo académico sólido y convenios estratégicos que garantizan la calidad
                        educativa que nuestros estudiantes merecen.
                    </p>

                    <div class="values-grid">
                        <div class="value-item">
                            <i class="fa-solid fa-bullseye"></i>
                            <h4>Misión</h4>
                        </div>
                        <div class="value-item">
                            <i class="fa-solid fa-eye"></i>
                            <h4>Visión</h4>
                        </div>
                        <div class="value-item">
                            <i class="fa-solid fa-gem"></i>
                            <h4>Valores</h4>
                        </div>
                    </div>
                </div>
                <div class="about-img">
                    <img src="assets/img/about-us.png" alt="Instalaciones modernas">
                </div>
            </div>
        </section>

        <!-- Carreras Section -->
        <section id="carreras" class="programs">
            <div class="container">
                <div class="section-header">
                    <h2>Nuestros Programas</h2>
                    <p>Programas de especialización para impulsar tu carrera</p>
                </div>

                <div class="programs-grid">
                    <!-- Card 1 -->
                    <article class="program-card">
                        <div class="program-img">
                            <img src="assets/img/program-card.jpg" alt="Diseño Gráfico">
                        </div>
                        <div class="program-info">
                            <h3>Seguridad y Salud en el Trabajo</h3>
                            <ul class="program-details">
                                <li><i class="fa-regular fa-clock"></i> 6 Meses</li>
                                <li><i class="fa-solid fa-chalkboard-user"></i> Presencial / Híbrido</li>
                                <li><i class="fa-solid fa-certificate"></i> Certificación Oficial</li>
                            </ul>
                            <div class="card-footer">
                                <a href="programas/seguridad-salud.php" class="btn btn-primary" style="width: 100%; text-align: center;">Ver Malla
                                    Curricular</a>
                            </div>
                        </div>
                    </article>

                    <!-- Card 2 -->
                    <article class="program-card">
                        <div class="program-img">
                            <img src="assets/img/program-card.jpg" alt="Marketing">
                        </div>
                        <div class="program-info">
                            <h3>Gestión Ambiental</h3>
                            <ul class="program-details">
                                <li><i class="fa-regular fa-clock"></i> 6 Meses</li>
                                <li><i class="fa-solid fa-chalkboard-user"></i> Presencial / Híbrido</li>
                                <li><i class="fa-solid fa-certificate"></i> Certificación Oficial</li>
                            </ul>
                            <div class="card-footer">
                                <a href="programas/gestion-ambiental.php" class="btn btn-primary" style="width: 100%; text-align: center;">Ver Malla
                                    Curricular</a>
                            </div>
                        </div>
                    </article>

                    <!-- Card 3 -->
                    <article class="program-card">
                        <div class="program-img">
                            <img src="assets/img/program-card.jpg" alt="Desarrollo de Software">
                        </div>
                        <div class="program-info">
                            <h3>Gestión Pública</h3>
                            <ul class="program-details">
                                <li><i class="fa-regular fa-clock"></i> 6 Meses</li>
                                <li><i class="fa-solid fa-chalkboard-user"></i> Presencial / Híbrido</li>
                                <li><i class="fa-solid fa-certificate"></i> Certificación Oficial</li>
                            </ul>
                            <div class="card-footer">
                                <a href="programas/gestion-publica.php" class="btn btn-primary" style="width: 100%; text-align: center;">Ver Malla
                                    Curricular</a>
                            </div>
                        </div>
                    </article>
                    <!-- Card 4 -->
                    <article class="program-card">
                        <div class="program-img">
                            <img src="assets/img/program-card.jpg" alt="Gestión de Proyectos">
                        </div>
                        <div class="program-info">
                            <h3>Gestión de Proyectos</h3>
                            <ul class="program-details">
                                <li><i class="fa-regular fa-clock"></i> 6 Meses</li>
                                <li><i class="fa-solid fa-chalkboard-user"></i> Presencial / Híbrido</li>
                                <li><i class="fa-solid fa-certificate"></i> Certificación Oficial</li>
                            </ul>
                            <div class="card-footer">
                                <a href="programas/gestion-proyectos.php" class="btn btn-primary" style="width: 100%; text-align: center;">Ver Malla
                                    Curricular</a>
                            </div>
                        </div>
                    </article>
                </div>

                <div style="text-align: center; margin-top: 50px;">
                    <a href="#contacto" class="btn btn-outline"
                        style="border-color: var(--primary-color); color: var(--primary-color);">Solicitar
                        Información</a>
                </div>

                <!-- Infinite Scroll Slider -->
                <div class="slider-container"
                    style="margin-top: 60px; overflow: hidden; background: #fff; padding: 20px 0;">
                    <div class="section-header" style="margin-bottom: 30px;">
                        <h2>Nuestras Certificaciones</h2>
                    </div>
                    <div class="logo-slider">
                        <div class="slide-track">
                            <!-- Slides -->
                            <div class="slide"><img src="assets/img/logos/logo_prada.png" alt="Prada"></div>
                            <div class="slide"><img src="assets/img/logos/logo_nintendo.png" alt="Nintendo"></div>
                            <div class="slide"><img src="assets/img/logos/logo_apple.png" alt="Apple"></div>
                            <div class="slide"><img src="assets/img/logos/logo_stripe.png" alt="Stripe"></div>
                            <div class="slide"><img src="assets/img/logos/logo_prada.png" alt="Prada"></div>
                            <div class="slide"><img src="assets/img/logos/logo_nintendo.png" alt="Nintendo"></div>
                            <div class="slide"><img src="assets/img/logos/logo_apple.png" alt="Apple"></div>

                            <!-- Duplicates for infinite loop -->
                            <div class="slide"><img src="assets/img/logos/logo_stripe.png" alt="Stripe"></div>
                            <div class="slide"><img src="assets/img/logos/logo_prada.png" alt="Prada"></div>
                            <div class="slide"><img src="assets/img/logos/logo_nintendo.png" alt="Nintendo"></div>
                            <div class="slide"><img src="assets/img/logos/logo_apple.png" alt="Apple"></div>
                            <div class="slide"><img src="assets/img/logos/logo_stripe.png" alt="Stripe"></div>
                            <div class="slide"><img src="assets/img/logos/logo_prada.png" alt="Prada"></div>
                            <div class="slide"><img src="assets/img/logos/logo_nintendo.png" alt="Nintendo"></div>
                        </div>
                    </div>
                </div>

    </main>

<?php include 'includes/footer.php'; ?>
