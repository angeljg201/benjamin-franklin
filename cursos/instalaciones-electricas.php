<?php
$pageTitle = "Instalaciones Eléctricas Domiciliarias - Benjamin Franklin";
$rootPath = "../";
include '../includes/header.php';
?>

    <main class="course-page-wrapper">
        <section class="course-hero">
            <div class="container">
                <div class="hero-content">
                    <span class="hero-badge">Capacitación Técnica</span>
                    <h1>Instalaciones Eléctricas</h1>
                    <p>Capacítate para diseñar, ejecutar y mantener instalaciones eléctricas en viviendas, cumpliendo con el Código Nacional de Electricidad y normas de seguridad.</p>
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
                        <div class="accordion-item"><button class="accordion-header">Módulo I: Fundamentos de Electricidad <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Voltaje, corriente y resistencia (Ley de Ohm).</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Módulo II: Instrumentos de Medición <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Uso del multímetro y pinza amperimétrica.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Módulo III: Circuitos de Alumbrado <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Interruptores simples, dobles y conmutación.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Módulo IV: Circuitos de Tomacorrientes <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Instalación y puesta a tierra.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Módulo V: Tableros de Distribución <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Llaves térmicas y diferenciales.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Módulo VI: Lectura de Planos Eléctricos <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Simbología y diagrama unifilar.</li></ul></div></div>
                    </div>
                </section>
            </div>
            <aside class="course-sidebar">
                <div class="sticky-card">
                    <div class="card-image-header">
                        <img src="<?php echo $rootPath; ?>assets/img/program-card.jpg" alt="Instalaciones Eléctricas">
                         <span class="live-badge"><i class="fa-solid fa-circle-play"></i> En vivo</span>
                    </div>
                    <div class="card-body">
                        <h3 class="card-course-title">Instalaciones Eléctricas</h3>
                        <div class="card-price"><span class="currency">S/</span> 300 <span class="modality">- Virtual</span></div>
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
