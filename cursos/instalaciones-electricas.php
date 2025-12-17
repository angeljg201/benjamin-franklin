<?php
$pageTitle = "Instalaciones Eléctricas Domiciliarias - Benjamin Franklin";
$rootPath = "../";
include '../includes/header.php';
?>

    <main class="course-page-wrapper">
            <aside class="course-sidebar">
                <div class="sticky-card">
                    <div class="card-image-header">
                        <img src="<?php echo $rootPath; ?>assets/img/program-card.jpg" alt="Instalaciones Eléctricas">

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
        <section class="course-hero">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-breadcrumb">INICIO • CURSOS • CONSTRUCCIÓN • ELECTRICIDAD</div>
                    <span class="hero-badge">CURSO</span>
                    <h1>Instalaciones Eléctricas</h1>
                    <p>Domina los fundamentos de instalaciones residenciales y comerciales, lectura de planos eléctricos y normas de seguridad vigentes.</p>
                    
                    <div class="hero-stats-bar">
                        <div class="hero-stats-left">
                            <span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i></span>
                            <span class="rating-text">4.7 Calificaciones</span>
                        </div>
                        <div class="hero-stats-right">
                            <i class="fa-solid fa-user-group"></i> 256 Alumnos capacitados en este curso
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
            


        </div>
    </main>
    <script>document.querySelectorAll('.accordion-header').forEach(b=>{b.addEventListener('click',()=>{b.classList.toggle('active');const c=b.nextElementSibling;c.style.maxHeight=b.classList.contains('active')?c.scrollHeight+"px":0;b.querySelector('i').style.transform=b.classList.contains('active')?"rotate(180deg)":"rotate(0deg)";});});</script>

<?php include '../includes/footer.php'; ?>
