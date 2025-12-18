<?php
$pageTitle = "Instalaciones de Drywall - Benjamin Franklin";
$rootPath = "../";
include '../includes/header.php';
?>

    <main class="course-page-wrapper">
            <aside class="course-sidebar">
                <div class="sticky-card">
                    <div class="card-image-header">
                        <img src="<?php echo $rootPath; ?>assets/img/cursos/curso-instalaciones-drywall.jpg" alt="Instalaciones de Drywall">

                    </div>
                    <div class="card-body">
                        <h3 class="card-course-title">Instalaciones de Drywall</h3>
                        <div class="card-price" style="display: flex; flex-direction: column; gap: 5px;">
                             <div><span class="currency">S/</span> 330 <span class="modality">- Virtual</span></div>
                             <div><span class="currency">S/</span> 480 <span class="modality">- Presencial</span></div>
                        </div>
                        <div class="card-actions">
                            <a href="<?php echo $rootPath; ?>index.php#contacto" class="btn btn-primary full-width">Comprar ahora</a>
                            <a href="https://wa.me/51999999999" target="_blank" class="btn btn-whatsapp full-width">Solicitar información por <br> <strong>WHATSAPP</strong> <i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </aside>
        <section class="course-hero">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-breadcrumb">INICIO • CURSOS • CONSTRUCCIÓN • DRYWALL</div>
                    <span class="hero-badge">CURSO</span>
                    <h1>Instalaciones de Drywall</h1>
                    <p>El curso de Instalaciones de Drywall te capacita en la instalación, acabado y mantenimiento de sistemas de drywall, aplicando técnicas modernas y el uso adecuado de materiales, herramientas y equipos especializados. Desarrollarás habilidades prácticas altamente demandadas en el sector de la construcción, lo que te permitirá acceder a diversas oportunidades laborales, trabajar con mayor eficiencia y destacar profesionalmente, incorporando además conceptos actuales de innovación y sostenibilidad en los procesos constructivos.</p>
                    
                    <div class="hero-stats-bar">
                        <div class="hero-stats-left">
                            <span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i></span>
                            <span class="rating-text">4.5 Calificaciones</span>
                        </div>
                        <div class="hero-stats-right">
                            <i class="fa-solid fa-user-group"></i> 349 Alumnos capacitados en este curso
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

        <div class="container course-grid">
            <div class="course-content">
                <div class="course-info-bar">
                    <div class="info-item"><i class="fa-regular fa-calendar"></i><div><strong>Inicio</strong><span>¡Inicios mensuales!</span></div></div>
                    <div class="info-item"><i class="fa-regular fa-clock"></i><div><strong>Duración</strong><span>2 Meses</span></div></div>
                    <div class="info-item"><i class="fa-solid fa-chalkboard-user"></i><div><strong>Modalidad</strong><span>Presencial y Virtual</span></div></div>
                    <div class="info-item"><i class="fa-regular fa-file"></i><div><strong>Certificado</strong><span>Digital y Físico</span></div></div>
                </div>

                <section class="syllabus-section">
                    <h2 class="section-title">Plan de Estudios</h2>
                    <div class="accordion">
                        <div class="accordion-item"><button class="accordion-header">Módulo I: Conceptos generales, herramientas para la instalación y EPP <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Introducción y seguridad.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Módulo II: Sistema de construcción en seco <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Fundamentos del sistema.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Módulo III: Detalles arquitectónicos <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Acabados y formas.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Módulo IV: Cenefas <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Construcción de cenefas.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Módulo V: Emplacado <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Técnicas de emplacado.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Módulo VI: Mesones <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Estructura de mesones.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Módulo VII: Detalles arquitectónicos II <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Acabados avanzados.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Módulo VIII: Presentación de proyecto <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Evaluación final.</li></ul></div></div>
                    </div>
                </section>
            </section>
                
                <?php include '../includes/benefits_section.php'; ?>
            </div>
            


        </div>
    </main>
    <script>document.querySelectorAll('.accordion-header').forEach(b=>{b.addEventListener('click',()=>{b.classList.toggle('active');const c=b.nextElementSibling;c.style.maxHeight=b.classList.contains('active')?c.scrollHeight+"px":0;b.querySelector('i').style.transform=b.classList.contains('active')?"rotate(180deg)":"rotate(0deg)";});});</script>

<?php include '../includes/footer.php'; ?>
