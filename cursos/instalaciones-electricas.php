<?php
$pageTitle = "Instalaciones Eléctricas Domiciliarias - Benjamin Franklin";
$rootPath = "../";
include '../includes/header.php';
?>

    <main class="course-page-wrapper">
            <aside class="course-sidebar">
                <div class="sticky-card">
                    <div class="card-image-header">
                        <img src="<?php echo $rootPath; ?>assets/img/cursos/curso-instalaciones-electricas.jpg" alt="Instalaciones Eléctricas">

                    </div>
                    <div class="card-body">
                        <h3 class="card-course-title">Instalaciones Eléctricas</h3>
                        <div class="card-price" style="display: flex; flex-direction: column; gap: 5px;">
                             <div><span class="currency">S/</span> 330 <span class="modality">- Virtual</span></div>
                             <div><span class="currency">S/</span> 440 <span class="modality">- Presencial</span></div>
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
                    <div class="hero-breadcrumb">INICIO • CURSOS • CONSTRUCCIÓN • ELECTRICIDAD</div>
                    <span class="hero-badge">CURSO</span>
                    <h1>Instalaciones Eléctricas</h1>
                    <p>El curso de Instalaciones Eléctricas está diseñado para formar especialistas capaces de aplicar correctamente los principios y técnicas de una instalación eléctrica segura y eficiente. Aprenderás el uso adecuado de herramientas, materiales y equipos eléctricos, así como los procedimientos correctos para la instalación de componentes eléctricos en entornos residenciales y comerciales. Además, desarrollarás conocimientos clave en prevención de riesgos eléctricos, normas de seguridad y buenas prácticas, lo que te permitirá realizar trabajos confiables, reducir accidentes y aumentar tu empleabilidad en el sector técnico y de la construcción.</p>
                    
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
                    <div class="info-item"><i class="fa-regular fa-clock"></i><div><strong>Duración</strong><span>2 Meses</span></div></div>
                    <div class="info-item"><i class="fa-solid fa-chalkboard-user"></i><div><strong>Modalidad</strong><span>Presencial y Virtual</span></div></div>
                    <div class="info-item"><i class="fa-regular fa-file"></i><div><strong>Certificado</strong><span>Digital y Físico</span></div></div>
                </div>

                <section class="syllabus-section">
                    <h2 class="section-title">Plan de Estudios</h2>
                    <div class="accordion">
                        <div class="accordion-item"><button class="accordion-header">Módulo I: Fundamentos y herramientas del trabajo eléctrico <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Introducción.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Módulo II: Circuitos eléctricos y canalizaciones en instalaciones <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Fundamentos.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Módulo III: Interpretación y lectura de planos eléctricos <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Interpretación.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Módulo IV: Diagramas y esquemas técnicos de instalaciones <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Esquemas técnicos.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Módulo V: Diseño de cuadros de carga y diagramas unifilares <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Diagramas unifilares.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Módulo VI: Sistemas de puesta a tierra y diagnóstico de fallas <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Diagnóstico.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Módulo VII: Diseño de instalaciones eléctricas domiciliarias <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Diseño residencial.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Módulo VIII: Buenas prácticas y evaluación final del curso <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Evaluación final.</li></ul></div></div>
                    </div>
                </section>
                
                <?php include '../includes/benefits_section.php'; ?>
            </div>
            


        </div>
    </main>
    <script>document.querySelectorAll('.accordion-header').forEach(b=>{b.addEventListener('click',()=>{b.classList.toggle('active');const c=b.nextElementSibling;c.style.maxHeight=b.classList.contains('active')?c.scrollHeight+"px":0;b.querySelector('i').style.transform=b.classList.contains('active')?"rotate(180deg)":"rotate(0deg)";});});</script>

<?php include '../includes/footer.php'; ?>
