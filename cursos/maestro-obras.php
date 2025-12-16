<?php
$pageTitle = "Maestro de Obras - Benjamin Franklin";
$rootPath = "../";
include '../includes/header.php';
?>

    <main class="course-page-wrapper">
        <section class="course-hero">
            <div class="container">
                <div class="hero-content">
                    <span class="hero-badge">Capacitación Construcción</span>
                    <h1>Maestro de Obras</h1>
                    <p>Fórmate como líder en la construcción, aprendiendo a gestionar personal, interpretar expedientes técnicos, supervisar procesos constructivos y asegurar la calidad en obra.</p>
                    <a href="#" class="btn btn-light-outline"><i class="fa-solid fa-download"></i> DESCARGAR BROCHURE</a>
                </div>
            </div>
        </section>

        <div class="container course-grid">
            <div class="course-content">
                <div class="course-info-bar">
                    <div class="info-item"><i class="fa-regular fa-calendar"></i><div><strong>Inicio</strong><span>¡Inicios mensuales!</span></div></div>
                    <div class="info-item"><i class="fa-regular fa-clock"></i><div><strong>Modalidad</strong><span>Virtual</span></div></div>
                    <div class="info-item"><i class="fa-regular fa-file"></i><div><strong>Certificado</strong><span>Digital y Físico</span></div></div>
                </div>

                <section class="syllabus-section">
                    <h2 class="section-title">Temario</h2>
                    <div class="accordion">
                        <div class="accordion-item"><button class="accordion-header">Módulo I: Lectura de Planos y Expediente Técnico <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Interpretación de planos.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Módulo II: Procesos Constructivos (Casco) <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Cimentaciones, muros y techos.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Módulo III: Instalaciones <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Sanitarias y Eléctricas básicas.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Módulo IV: Acabados <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Enchapes, pisos y tarrajeos.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Módulo V: Metrados y Presupuestos <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Cálculo de materiales.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Módulo VI: Seguridad en Obra <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Normativa G050.</li></ul></div></div>
                    </div>
                </section>
            </div>
            <aside class="course-sidebar">
                <div class="sticky-card">
                    <div class="card-image-header">
                        <img src="<?php echo $rootPath; ?>assets/img/program-card.jpg" alt="Maestro de Obras">
                         <span class="live-badge"><i class="fa-solid fa-circle-play"></i> En vivo</span>
                    </div>
                    <div class="card-body">
                        <h3 class="card-course-title">Maestro de Obras</h3>
                        <div class="card-price"><span class="currency">S/</span> 350 <span class="modality">- Virtual</span></div>
                        <div class="card-actions">
                            <a href="<?php echo $rootPath; ?>index.php#contacto" class="btn btn-primary full-width">Comprar ahora</a>
                            <a href="https://wa.me/51999999999" target="_blank" class="btn btn-whatsapp full-width">Solicitar información por <br> <strong>WHATSAPP</strong> <i class="fa-brands fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </main>
    <script>document.querySelectorAll('.accordion-header').forEach(b=>{b.addEventListener('click',()=>{b.classList.toggle('active');const c=b.nextElementSibling;c.style.maxHeight=b.classList.contains('active')?c.scrollHeight+"px":0;b.querySelector('i').style.transform=b.classList.contains('active')?"rotate(180deg)":"rotate(0deg)";});});</script>

<?php include '../includes/footer.php'; ?>
