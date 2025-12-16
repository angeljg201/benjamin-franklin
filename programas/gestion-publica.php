<?php
$pageTitle = "Gestión Pública - Benjamin Franklin";
$rootPath = "../";
include '../includes/header.php';
?>

    <main class="course-page-wrapper">
        <section class="course-hero">
            <div class="container">
                <div class="hero-content">
                    <span class="hero-badge">Programa de Especialización</span>
                    <h1>Gestión Pública</h1>
                    <p>Desarrolla capacidades para dirigir y administrar eficientemente las entidades del Estado, conociendo los sistemas administrativos, contrataciones y modernización de la gestión pública.</p>
                    <a href="#" class="btn btn-light-outline"><i class="fa-solid fa-download"></i> DESCARGAR BROCHURE</a>
                </div>
            </div>
        </section>

        <div class="container course-grid">
            <div class="course-content">
                <div class="course-info-bar">
                    <div class="info-item"><i class="fa-regular fa-clock"></i><div><strong>Duración</strong><span>6 Meses</span></div></div>
                    <div class="info-item"><i class="fa-solid fa-chalkboard-user"></i><div><strong>Modalidad</strong><span>Híbrido</span></div></div>
                    <div class="info-item"><i class="fa-solid fa-certificate"></i><div><strong>Créditos</strong><span>24 Académicos</span></div></div>
                </div>

                <section class="syllabus-section">
                    <h2 class="section-title">Plan de Estudios</h2>
                    <div class="accordion">
                        <div class="accordion-item"><button class="accordion-header">Mes 1: Modernización del Estado <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Política nacional de modernización.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Mes 2: Planeamiento Estratégico <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>CEPLAN y POI.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Mes 3: Presupuesto Público <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Programación multianual.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Mes 4: Contrataciones del Estado (OSCE) <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Ley 30225 y modificaciones.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Mes 5: Inversión Pública (Invierte.pe) <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Ciclo de inversiones.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Mes 6: Control Gubernamental <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Contraloría General de la República.</li></ul></div></div>
                    </div>
                </section>
            </div>
            <aside class="course-sidebar">
                <div class="sticky-card">
                    <div class="card-image-header">
                        <img src="<?php echo $rootPath; ?>assets/img/program-card.jpg" alt="Gestión Pública">
                        <span class="live-badge"><i class="fa-solid fa-graduation-cap"></i> Diploma</span>
                    </div>
                    <div class="card-body">
                        <h3 class="card-course-title">Especialización en Gestión Pública</h3>
                        <div class="card-price"><span class="currency">S/</span> 450 <span class="modality">x Mensualidad</span></div>
                        <p style="font-size: 0.9rem; color: #666; margin-bottom: 20px;">Matrícula: S/ 100.00</p>
                        <div class="card-actions">
                            <a href="<?php echo $rootPath; ?>index.php#contacto" class="btn btn-primary full-width">Inscribirme</a>
                            <a href="https://wa.me/51999999999" target="_blank" class="btn btn-whatsapp full-width">Hablar con Asesor <i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </main>
    <script>document.querySelectorAll('.accordion-header').forEach(b=>{b.addEventListener('click',()=>{b.classList.toggle('active');const c=b.nextElementSibling;c.style.maxHeight=b.classList.contains('active')?c.scrollHeight+"px":0;b.querySelector('i').style.transform=b.classList.contains('active')?"rotate(180deg)":"rotate(0deg)";});});</script>

<?php include '../includes/footer.php'; ?>
