<?php
$pageTitle = "Análisis de Datos con POWER BI - Benjamin Franklin";
$rootPath = "../";
include '../includes/header.php';
?>

    <!-- Course Page Container -->
    <main class="course-page-wrapper">
            <aside class="course-sidebar">
                <div class="sticky-card">
                    <div class="card-image-header">
                        <img src="<?php echo $rootPath; ?>assets/img/cursos/curso-power-bi.jpg" alt="Curso Power BI">

                    </div>
                    <div class="card-body">
                        <h3 class="card-course-title">Análisis de Datos con POWER BI</h3>
                        
                        <div style="display: flex; gap: 8px; align-items: flex-start; margin-bottom: 8px;">
                            <i class="fa-solid fa-circle-check" style="color: #5b4efe; font-size: 1.1rem; margin-top: 3px;"></i>
                            <p style="margin: 0; font-size: 0.9rem; color: #4b5563; line-height: 1.4;">
                                Incluye materiales, prácticas, sesiones en vivo y certificación oficial UNI.
                            </p>
                        </div>
                        
                        <div class="card-price">
                            <span class="currency">S/</span> 350 <span class="modality">- Virtual</span>
                        </div>

                        <div class="card-actions">
                            <a href="<?php echo $rootPath; ?>index.php#contacto" class="btn btn-primary full-width">Comprar ahora</a>
                            <a href="https://wa.me/51999999999" target="_blank" class="btn btn-whatsapp full-width">
                                Solicitar información por <br> <strong>WHATSAPP</strong> <i class="fa-brands fa-whatsapp"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </aside>
        
        <!-- Hero Section -->
        <section class="course-hero">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-breadcrumb">INICIO • CURSOS • TECNOLOGÍA • POWER BI</div>
                    <span class="hero-badge">CURSO</span>
                    <h1>Análisis de Datos con POWER BI</h1>
                    <p>El participante desarrollará habilidades para transformar datos en visualizaciones interactivas, construir dashboards profesionales, integrar múltiples fuentes de información y crear reportes dinámicos que impulsen la toma de decisiones.
Incluye manejo de Power Query, modelado de datos, DAX básico e intermedio, inteligencia artificial integrada y proyecto final.</p>
                    
                    <div class="hero-stats-bar">
                        <div class="hero-stats-left">
                            <span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                            <span class="rating-text">4.9 Calificaciones</span>
                        </div>
                        <div class="hero-stats-right">
                            <i class="fa-solid fa-user-group"></i> 510 Alumnos capacitados en este curso
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Grid Layout -->
        <div class="container course-grid">
            
            <!-- Left Column: Content -->
            <div class="course-content">
                
                <!-- Info Bar (Icons) -->
                <div class="course-info-bar">
                    <div class="info-item"><i class="fa-regular fa-calendar"></i><div><strong>Inicio</strong><span>13 de Enero</span></div></div>
                    <div class="info-item"><i class="fa-regular fa-clock"></i><div><strong>Duración</strong><span>4 Semanas</span></div></div>
                    <div class="info-item"><i class="fa-solid fa-chalkboard-user"></i><div><strong>Modalidad</strong><span>100% Virtual</span></div></div>
                </div>

                <!-- Syllabus (Temario) -->
                <section class="syllabus-section">
                    <h2 class="syllabus-title"><i class="fa-solid fa-book"></i> Plan de Estudios</h2>
                    <p class="syllabus-text">
                        Descubre nuestro plan de estudios en Análisis de Datos con POWER BI.
                        Con una duración de 4 Semanas, este programa consta de 8 módulos diseñados para brindarte una formación sólida y aplicada.
                        Adquirirás competencias técnicas y profesionales actualizadas, combinando fundamentos teóricos con experiencias prácticas guiadas por especialistas del sector.
                        Potencia tus habilidades, mejora tu perfil profesional y prepárate para nuevas oportunidades laborales.
                        ¡Inscríbete hoy y comienza a transformar tu futuro con nosotros!
                    </p>
                    <div class="accordion">
                        <!-- Módulo 1 -->
                        <div class="accordion-item">
                            <button class="accordion-header">
                                MÓDULO 1 – Introducción a Power BI y Conceptos de BI <i class="fa-solid fa-chevron-down"></i>
                            </button>
                            <div class="accordion-body">
                                <ul>
                                    <li>Componentes de Power BI.</li>
                                    <li>Ecosistema de Business Intelligence.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Módulo 2 -->
                        <div class="accordion-item">
                            <button class="accordion-header">
                                MÓDULO 2 – Transformación y Limpieza de Datos (Power Query) <i class="fa-solid fa-chevron-down"></i>
                            </button>
                            <div class="accordion-body">
                                <ul>
                                    <li>ETL.</li>
                                    <li>Eliminación de errores y transformación avanzada.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Módulo 3 -->
                        <div class="accordion-item">
                            <button class="accordion-header">
                                MÓDULO 3 – Modelado de Datos (I): Diseño y Relaciones <i class="fa-solid fa-chevron-down"></i>
                            </button>
                            <div class="accordion-body">
                                <ul>
                                    <li>Modelos estrella.</li>
                                    <li>Relaciones uno-a-muchos y muchos-a-muchos.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Módulo 4 -->
                        <div class="accordion-item">
                            <button class="accordion-header">
                                MÓDULO 4 – Introducción a DAX <i class="fa-solid fa-chevron-down"></i>
                            </button>
                            <div class="accordion-body">
                                <ul>
                                    <li>Medidas.</li>
                                    <li>Columnas calculadas.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Módulo 5 -->
                        <div class="accordion-item">
                            <button class="accordion-header">
                                MÓDULO 5 – Visualización y Diseño de Informes <i class="fa-solid fa-chevron-down"></i>
                            </button>
                            <div class="accordion-body">
                                <ul>
                                    <li>Gráficos, KPIs, segmentadores.</li>
                                    <li>Mejores prácticas de diseño.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Módulo 6 -->
                        <div class="accordion-item">
                            <button class="accordion-header">
                                MÓDULO 6 – DAX Intermedio y Time Intelligence <i class="fa-solid fa-chevron-down"></i>
                            </button>
                            <div class="accordion-body">
                                <ul>
                                    <li>Cálculos dinámicos.</li>
                                    <li>Medidas de comparación temporal.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Módulo 7 -->
                        <div class="accordion-item">
                            <button class="accordion-header">
                                MÓDULO 7 – Funcionalidades Avanzadas e Inteligencia Artificial <i class="fa-solid fa-chevron-down"></i>
                            </button>
                            <div class="accordion-body">
                                <ul>
                                    <li>Predicciones.</li>
                                    <li>Integración con IA.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Módulo 8 -->
                        <div class="accordion-item">
                            <button class="accordion-header">
                                MÓDULO 8 – Proyecto Integrador <i class="fa-solid fa-chevron-down"></i>
                            </button>
                            <div class="accordion-body">
                                <ul>
                                    <li>Construcción de dashboard profesional.</li>
                                    <li>Retroalimentación final.</li>
                                </ul>
                            </div>
                        </div>
    </div>
                </section>

                <?php include '../includes/benefits_section.php'; ?>
                <?php include '../includes/payment_methods.php'; ?>

            </div>
            




        </div>

    </main>

    <script>
        // Specific script for accordion
        document.querySelectorAll('.accordion-header').forEach(button => {
            button.addEventListener('click', () => {
                const accordionContent = button.nextElementSibling;
                button.classList.toggle('active');
                
                if (button.classList.contains('active')) {
                    accordionContent.style.maxHeight = accordionContent.scrollHeight + "px";
                    button.querySelector('i').style.transform = "rotate(180deg)";
                } else {
                    accordionContent.style.maxHeight = 0;
                    button.querySelector('i').style.transform = "rotate(0deg)";
                }
            });
        });
    </script>

<?php include '../includes/footer.php'; ?>
