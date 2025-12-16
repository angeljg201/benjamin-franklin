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
                        <img src="<?php echo $rootPath; ?>assets/img/program-card.jpg" alt="Curso Power BI">
                        <span class="live-badge"><i class="fa-solid fa-circle-play"></i> En vivo</span>
                    </div>
                    <div class="card-body">
                        <h3 class="card-course-title">Análisis de Datos con POWER BI</h3>
                        
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
                    <p>El participante desarrollará habilidades para transformar datos en visualizaciones interactivas y reportes dinámicos, integrando información de distintas fuentes y creando dashboards actualizados en tiempo real.</p>
                    
                    <div class="hero-stats-bar">
                        <div class="hero-stats-left">
                            <span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                            <span class="rating-text">4.9 Calificaciones</span>
                        </div>
                        <div class="hero-stats-right">
                            <i class="fa-solid fa-user-group"></i> 510 Alumnos capacitados en este curso
                        </div>
                    </div>

                    <div class="hero-share">
                        <span>Compartir:</span>
                        <div class="hero-share-icons">
                            <a href="#" class="share-icon"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#" class="share-icon"><i class="fa-brands fa-whatsapp"></i></a>
                            <a href="#" class="share-icon"><i class="fa-brands fa-twitter"></i></a>
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
                    <div class="info-item">
                        <i class="fa-regular fa-calendar"></i>
                        <div>
                            <strong>Inicio</strong>
                            <span>¡Inicios mensuales!</span>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fa-regular fa-clock"></i>
                        <div>
                            <strong>Modalidad</strong>
                            <span>Virtual</span>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fa-regular fa-file"></i>
                        <div>
                            <strong>Certificado</strong>
                            <span>Digital y Físico</span>
                        </div>
                    </div>
                </div>

                <!-- Syllabus (Temario) -->
                <section class="syllabus-section">
                    <h2 class="section-title">Temario</h2>
                    <p class="section-subtitle">Lo que aprenderás en este curso</p>

                    <div class="accordion">
                        <div class="accordion-item">
                            <button class="accordion-header">
                                Módulo I: Introducción a Power BI y Conexión de Datos <i class="fa-solid fa-chevron-down"></i>
                            </button>
                            <div class="accordion-body">
                                <ul>
                                    <li>¿Qué es Power BI? Componentes y arquitectura.</li>
                                    <li>Descarga e instalación de Power BI Desktop.</li>
                                    <li>Conexión a diferentes fuentes de datos (Excel, Web, CSV, etc.).</li>
                                    <li>Limpieza y transformación básica de datos con Power Query.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <button class="accordion-header">
                                Módulo II: Modelado de Datos <i class="fa-solid fa-chevron-down"></i>
                            </button>
                            <div class="accordion-body">
                                <ul>
                                    <li>Conceptos de modelado: Tablas de hechos y dimensiones.</li>
                                    <li>Relaciones entre tablas (uno a uno, uno a muchos).</li>
                                    <li>Creación de columnas calculadas y medidas básicas.</li>
                                    <li>Introducción al lenguaje DAX.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <button class="accordion-header">
                                Módulo III: Visualización de Datos I <i class="fa-solid fa-chevron-down"></i>
                            </button>
                            <div class="accordion-body">
                                <ul>
                                    <li>Tipos de gráficos: Barras, columnas, líneas y circulares.</li>
                                    <li>Uso de tarjetas y filtros (slicers).</li>
                                    <li>Formato y personalización de visualizaciones.</li>
                                    <li>Creación de jerarquías para análisis drill-down.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <button class="accordion-header">
                                Módulo IV: Visualización de Datos II <i class="fa-solid fa-chevron-down"></i>
                            </button>
                            <div class="accordion-body">
                                <ul>
                                    <li>Gráficos de dispersión y mapas geográficos.</li>
                                    <li>Uso de matrices y tablas dinámicas.</li>
                                    <li>Interacciones entre visualizaciones.</li>
                                    <li>Importación de objetos visuales personalizados.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <button class="accordion-header">
                                Módulo V: Publicación y Dashboards <i class="fa-solid fa-chevron-down"></i>
                            </button>
                            <div class="accordion-body">
                                <ul>
                                    <li>Publicación de reportes en Power BI Service.</li>
                                    <li>Creación de paneles (Dashboards) en la nube.</li>
                                    <li>Compartir reportes y configuración de seguridad básica.</li>
                                    <li>Actualización programada de datos.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <button class="accordion-header">
                                Módulo VI: Proyecto Final Integrador <i class="fa-solid fa-chevron-down"></i>
                            </button>
                            <div class="accordion-body">
                                <ul>
                                    <li>Definición del problema de negocio.</li>
                                    <li>Importación y limpieza de datos reales.</li>
                                    <li>Desarrollo del modelo de datos y medidas DAX.</li>
                                    <li>Diseño y presentación del Dashboard final.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Certification Preview -->
                <section class="certification-section" style="margin-top: 60px;">
                    <div class="section-header" style="text-align: left; margin-bottom: 30px;">
                        <h2>Obtén tu Certificado</h2>
                    </div>
                    <div style="display: flex; gap: 30px; flex-wrap: wrap; align-items: center;">
                         <div style="flex: 1; min-width: 300px;">
                            <p>Nuestro Certificado de Capacitación es reconocido por el Ministerio de Educación - MINEDU y el Ministerio de Trabajo y Promoción del Empleo – MTPE.</p>
                            <ul style="margin-top: 20px; list-style: none;">
                                <li style="margin-bottom: 10px;"><i class="fa-solid fa-check-circle" style="color: var(--secondary-color);"></i> Válido para concursos públicos y privados.</li>
                                <li style="margin-bottom: 10px;"><i class="fa-solid fa-check-circle" style="color: var(--secondary-color);"></i> Código QR de verificación.</li>
                            </ul>
                        </div>
                    </div>
                </section>

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
