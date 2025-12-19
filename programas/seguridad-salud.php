<?php
$pageTitle = "Seguridad y Salud en el Trabajo - Benjamin Franklin";
$rootPath = "../";
include '../includes/header.php';
?>

    <main class="course-page-wrapper">
            <aside class="course-sidebar">
                <div class="sticky-card">
                    <div class="card-image-header">
                        <img src="<?php echo $rootPath; ?>assets/img/programas/programa-seguridad-salud.jpg" alt="SST">

                    </div>
                    <div class="card-body">
                        <h3 class="card-course-title">Especialización en Seguridad y Salud</h3>
                        <div class="card-price"><span class="currency">S/</span> 450 <span class="modality">- Virtual</span></div>
                         <p style="font-size: 0.9rem; color: #666; margin-bottom: 20px;">Matrícula: S/ 100.00</p>
                        <div class="card-actions">
                            <a href="<?php echo $rootPath; ?>index.php#contacto" class="btn btn-primary full-width">Inscribirme</a>
                            <a href="https://wa.me/51999999999" target="_blank" class="btn btn-whatsapp full-width">Hablar con Asesor <i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </aside>
        <section class="course-hero">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-breadcrumb">INICIO • PROGRAMAS • SEGURIDAD Y SALUD</div>
                    <span class="hero-badge">ESPECIALIZACIÓN</span>
                    <h1>Seguridad y Salud en el Trabajo</h1>
                    <p>Especialízate en la prevención de riesgos laborales, normativa legal vigente (Ley 29783) y sistemas de gestión para proteger la integridad del talento humano y la productividad empresarial.</p>
                    
                    <div class="hero-stats-bar">
                        <div class="hero-stats-left">
                            <span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i></span>
                            <span class="rating-text">4.8 Calificaciones</span>
                        </div>
                        <div class="hero-stats-right">
                            <i class="fa-solid fa-user-group"></i> 380 Alumnos capacitados en este programa
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
                    <div class="info-item"><i class="fa-regular fa-calendar"></i><div><strong>Inicio</strong><span>26 de Enero</span></div></div>
                    <div class="info-item"><i class="fa-regular fa-clock"></i><div><strong>Duración</strong><span>4 Meses</span></div></div>
                    <div class="info-item"><i class="fa-solid fa-chalkboard-user"></i><div><strong>Modalidad</strong><span>100% Virtual</span></div></div>
                    <div class="info-item"><i class="fa-solid fa-certificate"></i><div><strong>Certificación</strong><span>Oficial</span></div></div>
                </div>

                <section class="syllabus-section">
                    <h2 class="syllabus-title"><i class="fa-solid fa-book"></i> Plan de Estudios</h2>
                    <p class="syllabus-text">
                        Descubre nuestro plan de estudios en Seguridad y Salud en el Trabajo.
                        Con una duración de 4 Meses, este programa consta de 4 módulos diseñados para brindarte una formación sólida y aplicada.
                        Adquirirás competencias técnicas y profesionales actualizadas, combinando fundamentos teóricos con experiencias prácticas guiadas por especialistas del sector.
                        Potencia tus habilidades, mejora tu perfil profesional y prepárate para nuevas oportunidades laborales.
                        ¡Inscríbete hoy y comienza a transformar tu futuro con nosotros!
                    </p>
                    <div class="accordion">
                        <div class="accordion-item"><button class="accordion-header">Mes 1: Marco Legal e IPERC <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Ley 29783 y su reglamento.</li><li>Identificación de Peligros y Riesgos (IPERC).</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Mes 2: Higiene y Ergonomía <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Higiene y Ergonomía Ocupacional.</li><li>Monitoreos ocupacionales.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Mes 3: Investigación y Emergencias <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Investigación de Accidentes.</li><li>Respuesta a Emergencias y Primeros Auxilios.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Mes 4: Auditoría y Mejora Continua <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Auditoría del Sistema de Gestión.</li><li>Implementación de la norma ISO 45001.</li></ul></div></div>
    </div>

                </section>
                
                <?php include '../includes/benefits_section.php'; ?>
                <?php include '../includes/payment_methods.php'; ?>
            </div>
            


        </div>
    </main>
    <script>document.querySelectorAll('.accordion-header').forEach(b=>{b.addEventListener('click',()=>{b.classList.toggle('active');const c=b.nextElementSibling;c.style.maxHeight=b.classList.contains('active')?c.scrollHeight+"px":0;b.querySelector('i').style.transform=b.classList.contains('active')?"rotate(180deg)":"rotate(0deg)";});});</script>

<?php include '../includes/footer.php'; ?>
