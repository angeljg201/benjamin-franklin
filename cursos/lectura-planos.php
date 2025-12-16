<?php
$pageTitle = "Lectura de Planos - Benjamin Franklin";
$rootPath = "../";
include '../includes/header.php';
?>

    <main class="course-page-wrapper">
        <section class="course-hero">
            <div class="container">
                <div class="hero-content">
                    <span class="hero-badge">Capacitación Construcción</span>
                    <h1>Lectura de Planos</h1>
                    <p>Domina la interpretación de simbología, escalas y especificaciones técnicas en planos de arquitectura, estructura, instalaciones sanitarias y eléctricas para una correcta ejecución de obra.</p>
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
                        <div class="accordion-item">
                            <button class="accordion-header">Módulo I: Introducción y Simbología General <i class="fa-solid fa-chevron-down"></i></button>
                            <div class="accordion-body"><ul><li>Tipos de planos y escalas.</li><li>Simbología arquitectónica.</li></ul></div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-header">Módulo II: Planos de Arquitectura <i class="fa-solid fa-chevron-down"></i></button>
                            <div class="accordion-body"><ul><li>Plantas, cortes y elevaciones.</li><li>Cuadro de vanos y acabados.</li></ul></div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-header">Módulo III: Planos de Estructuras <i class="fa-solid fa-chevron-down"></i></button>
                            <div class="accordion-body"><ul><li>Cimentaciones, zapatas y vigas.</li><li>Fierros y estribos.</li></ul></div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-header">Módulo IV: Instalaciones Sanitarias <i class="fa-solid fa-chevron-down"></i></button>
                            <div class="accordion-body"><ul><li>Redes de agua y desagüe.</li><li>Simbología isométrica.</li></ul></div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-header">Módulo V: Instalaciones Eléctricas <i class="fa-solid fa-chevron-down"></i></button>
                            <div class="accordion-body"><ul><li>Circuitos de alumbrado y tomacorrientes.</li><li>Tableros de distribución.</li></ul></div>
                        </div>
                        <div class="accordion-item">
                            <button class="accordion-header">Módulo VI: Taller Práctico <i class="fa-solid fa-chevron-down"></i></button>
                            <div class="accordion-body"><ul><li>Interpretación integral de proyecto.</li><li>Metrados básicos desde planos.</li></ul></div>
                        </div>
                    </div>
                </section>
            </div>
            <aside class="course-sidebar">
                <div class="sticky-card">
                    <div class="card-image-header">
                        <img src="<?php echo $rootPath; ?>assets/img/program-card.jpg" alt="Lectura de Planos">
                         <span class="live-badge"><i class="fa-solid fa-circle-play"></i> En vivo</span>
                    </div>
                    <div class="card-body">
                        <h3 class="card-course-title">Lectura de Planos</h3>
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
