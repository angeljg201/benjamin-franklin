<?php
$pageTitle = "Gestión Pública - Benjamin Franklin";
$rootPath = "../";
include '../includes/header.php';
?>

    <main class="course-page-wrapper">
            <aside class="course-sidebar">
                <div class="sticky-card">
                    <div class="card-image-header">
                        <img src="<?php echo $rootPath; ?>assets/img/programas/programa-gestion-publica.jpg" alt="Gestión Pública">

                    </div>
                    <div class="card-body">
                        <h3 class="card-course-title">Especialización en Gestión Pública</h3>
                        <div class="card-price"><span class="currency">S/</span> 450 <span class="modality">- Virtual</span></div>
                        <div style="display: flex; gap: 8px; align-items: flex-start; margin-bottom: 20px; margin-top: 15px;">
                            <i class="fa-solid fa-circle-check" style="color: #5b4efe; font-size: 1.1rem; margin-top: 3px;"></i>
                            <p style="margin: 0; font-size: 0.9rem; color: #4b5563; line-height: 1.4;">Incluye materiales, prácticas, sesiones en vivo y certificación oficial UNI.</p>
                        </div>
                        <div class="card-actions">
                            <a href="<?php echo $rootPath; ?>index.php#contacto" class="btn btn-primary full-width">Inscribirme</a>
                            <a href="https://wa.me/51999999999" target="_blank" class="btn btn-whatsapp full-width">
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
                    <div class="hero-breadcrumb">INICIO • PROGRAMAS • GESTIÓN PÚBLICA</div>
                    <span class="hero-badge">ESPECIALIZACIÓN</span>
                    <h1>Gestión Pública</h1>
                    <p>El programa ofrece una formación práctica en administración pública, políticas públicas, gestión financiera, presupuesto e inversión pública. Los participantes desarrollarán competencias para liderar con eficiencia, transparencia e innovación en el sector público.</p>
                    
                    <div class="hero-stats-bar">
                        <div class="hero-stats-left">
                            <span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                            <span class="rating-text">4.9 Calificaciones</span>
                        </div>
                        <div class="hero-stats-right">
                            <i class="fa-solid fa-user-group"></i> 520 Alumnos capacitados en este programa
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="container course-grid">
            <div class="course-content">
                <div class="course-info-bar">
                    <div class="info-item"><i class="fa-regular fa-calendar"></i><div><strong>Inicio</strong><span>27 de Enero</span></div></div>
                    <div class="info-item"><i class="fa-regular fa-clock"></i><div><strong>Duración</strong><span>4 Meses</span></div></div>
                    <div class="info-item"><i class="fa-solid fa-chalkboard-user"></i><div><strong>Modalidad</strong><span>100% Virtual</span></div></div>
                </div>

                <section class="syllabus-section">
                    <h2 class="syllabus-title"><i class="fa-solid fa-book"></i> Plan de Estudios</h2>
                    <p class="syllabus-text">
                        Descubre nuestro plan de estudios en Gestión Pública.
                        Con una duración de 4 Meses, este programa consta de 4 módulos diseñados para brindarte una formación sólida y aplicada.
                        Adquirirás competencias técnicas y profesionales actualizadas, combinando fundamentos teóricos con experiencias prácticas guiadas por especialistas del sector.
                        Potencia tus habilidades, mejora tu perfil profesional y prepárate para nuevas oportunidades laborales.<br>
                        ¡Inscríbete hoy y comienza a transformar tu futuro con nosotros!
                    </p>
                    <div class="accordion">
                        <div class="accordion-item"><button class="accordion-header">MÓDULO 1 – Fundamentos de la Gestión Pública <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Fundamentos de la Gestión Pública.</li><li>Estructura del Estado y organización del gobierno.</li><li>Modernización del Estado y reforma del sector público.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">MÓDULO 2 – Políticas Públicas y Planeamiento Estratégico <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Marco conceptual de las políticas públicas.</li><li>Planeamiento estratégico en la gestión pública.</li><li>Implementación y evaluación de políticas públicas.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">MÓDULO 3 – Presupuesto y Gestión Financiera Pública <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Presupuesto público y su marco normativo.</li><li>Presupuesto por Resultados (PpR).</li><li>Gestión financiera y control del gasto público.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">MÓDULO 4 – Inversión Pública y Gestión de Proyectos <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Marco normativo de la inversión pública en el Perú.</li><li>Ciclo de vida de un proyecto de inversión pública.</li><li>Gestión de cartera de proyectos y cierre de brechas.</li></ul></div></div>
    </div>

                </section>
                
                <?php include '../includes/benefits_section.php'; ?>
                <?php include '../includes/payment_methods.php'; ?>
            </div>
            


        </div>
    </main>
    <script>document.querySelectorAll('.accordion-header').forEach(b=>{b.addEventListener('click',()=>{b.classList.toggle('active');const c=b.nextElementSibling;c.style.maxHeight=b.classList.contains('active')?c.scrollHeight+"px":0;b.querySelector('i').style.transform=b.classList.contains('active')?"rotate(180deg)":"rotate(0deg)";});});</script>

<?php include '../includes/footer.php'; ?>
