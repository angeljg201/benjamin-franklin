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
                    <div class="hero-breadcrumb">INICIO • PROGRAMAS • GESTIÓN PÚBLICA</div>
                    <span class="hero-badge">DIPLOMA</span>
                    <h1>Gestión Pública</h1>
                    <p>Desarrolla capacidades para dirigir y administrar eficientemente las entidades del Estado, conociendo los sistemas administrativos, contrataciones y modernización de la gestión pública.</p>
                    
                    <div class="hero-stats-bar">
                        <div class="hero-stats-left">
                            <span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></span>
                            <span class="rating-text">4.9 Calificaciones</span>
                        </div>
                        <div class="hero-stats-right">
                            <i class="fa-solid fa-user-group"></i> 520 Alumnos capacitados en este programa
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
                    <div class="info-item"><i class="fa-regular fa-calendar"></i><div><strong>Inicio</strong><span>27 de Enero</span></div></div>
                    <div class="info-item"><i class="fa-regular fa-clock"></i><div><strong>Duración</strong><span>4 Meses</span></div></div>
                    <div class="info-item"><i class="fa-solid fa-chalkboard-user"></i><div><strong>Modalidad</strong><span>100% Virtual</span></div></div>
                    <div class="info-item"><i class="fa-solid fa-certificate"></i><div><strong>Certificación</strong><span>Oficial</span></div></div>
                </div>

                <section class="syllabus-section">
                    <h2 class="section-title">Plan de Estudios</h2>
                    <div class="accordion">
                        <div class="accordion-item"><button class="accordion-header">Mes 1: Modernización y Planeamiento <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Modernización del Estado.</li><li>Planeamiento Estratégico (CEPLAN).</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Mes 2: Administración Financiera <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Presupuesto Público.</li><li>Tesorería y Contabilidad Gubernamental.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Mes 3: Gestión de Inversiones y Compras <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Inversión Pública (Invierte.pe).</li><li>Contrataciones del Estado (OSCE).</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Mes 4: Control y Ética Pública <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Control Gubernamental.</li><li>Ética y transparencia en la gestión pública.</li></ul></div></div>
                    </div>
                </section>
                
                <?php include '../includes/benefits_section.php'; ?>
            </div>
            


        </div>
    </main>
    <script>document.querySelectorAll('.accordion-header').forEach(b=>{b.addEventListener('click',()=>{b.classList.toggle('active');const c=b.nextElementSibling;c.style.maxHeight=b.classList.contains('active')?c.scrollHeight+"px":0;b.querySelector('i').style.transform=b.classList.contains('active')?"rotate(180deg)":"rotate(0deg)";});});</script>

<?php include '../includes/footer.php'; ?>
