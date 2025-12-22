<?php
$pageTitle = "Gestión de Proyectos - Benjamin Franklin";
$rootPath = "../";
$numeroWhatsApp = "51956704678";
$mensajeWhatsApp = "Hola, estoy en la página web y deseo acceder al CURSO: *Especialización en Gestión de Proyectos* y obtener mi CERTIFICADO.";
include '../includes/header.php';
?>

    <main class="course-page-wrapper">
            <aside class="course-sidebar">
                <div class="sticky-card">
                    <div class="card-image-header">
                        <img src="<?php echo $rootPath; ?>assets/img/programas/programa-gestion-proyectos.jpg" alt="Gestión de Proyectos">

                    </div>
                    <div class="card-body">
                        <h3 class="card-course-title">Especialización en Gestión de Proyectos</h3>
                        
                        <div style="display: flex; gap: 8px; align-items: flex-start; margin-bottom: 20px;">
                            <i class="fa-solid fa-circle-check" style="color: #5b4efe; font-size: 1.1rem; margin-top: 3px;"></i>
                            <p style="margin: 0; font-size: 0.9rem; color: #4b5563; line-height: 1.4;">Incluye materiales, prácticas, sesiones en vivo y certificación oficial UNI.</p>
                        </div>
                        <div class="card-actions">
                            <a href="https://pagos.bf.edu.pe/" target="_blank" class="btn btn-primary full-width">COMPRAR AHORA</a>
                            <a href="https://wa.me/<?php echo $numeroWhatsApp; ?>?text=<?php echo urlencode($mensajeWhatsApp); ?>" target="_blank" class="btn btn-whatsapp full-width">
                                <span class="btn-wa-text">
                                    <span class="wa-small">Solicitar información por</span>
                                    <span class="wa-large">WHATSAPP</span>
                                </span>
                                <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </aside>
        <section class="course-hero">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-breadcrumb">INICIO • PROGRAMAS • GESTIÓN DE PROYECTOS</div>
                    <span class="hero-badge">ESPECIALIZACIÓN</span>
                    <h1>Gestión de Proyectos</h1>
                    <p>El programa brinda una formación práctica en la planificación y control de proyectos bajo estándares internacionales y metodologías ágiles. Los participantes aprenderán a gestionar recursos, riesgos y equipos, asegurando resultados eficientes y el logro de los objetivos planteados.</p>
                    
                    <div class="hero-stats-bar">
                        <div class="hero-stats-left">
                            <span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i></span>
                            <span class="rating-text">4.7 Calificaciones</span>
                        </div>
                        <div class="hero-stats-right">
                            <i class="fa-solid fa-user-group"></i> 450 Alumnos capacitados en este programa
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container course-grid">
            <div class="course-content">
                <div class="course-info-bar">
                    <div class="info-item"><i class="fa-regular fa-calendar"></i><div><strong>Inicio</strong><span>24 de Enero</span></div></div>
                    <div class="info-item"><i class="fa-regular fa-clock"></i><div><strong>Duración</strong><span>4 Meses</span></div></div>
                    <div class="info-item"><i class="fa-solid fa-chalkboard-user"></i><div><strong>Modalidad</strong><span>100% Virtual</span></div></div>
                </div>

                <section class="syllabus-section">
                    <h2 class="syllabus-title"><i class="fa-solid fa-book"></i> Plan de Estudios</h2>
                    <p class="syllabus-text">
                        Descubre nuestro plan de estudios en Gestión de Proyectos.
                        Con una duración de 4 Meses, este programa consta de 6 módulos diseñados para brindarte una formación sólida y aplicada.
                        Adquirirás competencias técnicas y profesionales actualizadas, combinando fundamentos teóricos con experiencias prácticas guiadas por especialistas del sector.
                        Potencia tus habilidades, mejora tu perfil profesional y prepárate para nuevas oportunidades laborales.
                        ¡Inscríbete hoy y comienza a transformar tu futuro con nosotros!
                    </p>
                    <div class="accordion">
                        <div class="accordion-item"><button class="accordion-header">MÓDULO 1 – Fundamentos de Gestión de Proyectos <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Introducción a la Gestión de Proyectos y PMBOK 7ma Edición.</li><li>Ciclo de vida del proyecto y fases del proceso de dirección.</li><li>Metodologías ágiles vs. tradicionales en gestión de proyectos.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">MÓDULO 2 – Planificación y Ejecución <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Definición del alcance, EDT/WBS y estructuración del proyecto.</li><li>Planificación del cronograma: herramientas y técnicas.</li><li>Estimación y gestión de costos en proyectos.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">MÓDULO 3 – Riesgos, Calidad y Adquisiciones <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Identificación y análisis de riesgos</li><li>Plan de calidad</li><li>Gestión de contrataciones y adquisiciones</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">MÓDULO 4 – Liderazgo y Equipos <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Liderazgo en proyectos</li><li>Gestión de interesados</li><li>Comunicación efectiva y resolución de conflictos</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">MÓDULO 5 – Herramientas y Transformación Digital <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>MS Project, Jira y Trello</li><li>Gestión de portafolios y PMO</li><li>Metodologías ágiles avanzadas (Scrum, Kanban, Lean)</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">MÓDULO 6 – Proyecto Final <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Taller práctico (simulación)</li><li>Aplicación de metodologías híbridas</li><li>Presentación y evaluación del proyecto final</li></ul></div></div>
    </div>

                </section>
                
                <?php include '../includes/benefits_section.php'; ?>
                <?php include '../includes/payment_methods.php'; ?>
            </div>
            


        </div>
    </main>
    <script>document.querySelectorAll('.accordion-header').forEach(b=>{b.addEventListener('click',()=>{b.classList.toggle('active');const c=b.nextElementSibling;c.style.maxHeight=b.classList.contains('active')?c.scrollHeight+"px":0;b.querySelector('i').style.transform=b.classList.contains('active')?"rotate(180deg)":"rotate(0deg)";});});</script>

<?php include '../includes/footer.php'; ?>
