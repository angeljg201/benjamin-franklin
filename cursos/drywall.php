<?php
$pageTitle = "Drywall y Construcción en Seco - Benjamin Franklin";
$rootPath = "../";
include '../includes/header.php';
?>

    <main class="course-page-wrapper">
            <aside class="course-sidebar">
                <div class="sticky-card">
                    <div class="card-image-header">
                        <img src="<?php echo $rootPath; ?>assets/img/program-card.jpg" alt="Drywall">
                         <span class="live-badge"><i class="fa-solid fa-circle-play"></i> En vivo</span>
                    </div>
                    <div class="card-body">
                        <h3 class="card-course-title">Drywall y Construcción en Seco</h3>
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
                    <div class="hero-breadcrumb">INICIO • CURSOS • CONSTRUCCIÓN • DRYWALL</div>
                    <span class="hero-badge">CURSO</span>
                    <h1>Drywall y Construcción en Seco</h1>
                    <p>Aprende las técnicas de armado, estructuras metálicas, tabiquería curva y cielorrasos con el sistema Drywall, una de las especialidades más demandadas.</p>
                    
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
                    <div class="info-item"><i class="fa-regular fa-clock"></i><div><strong>Modalidad</strong><span>Virtual</span></div></div>
                    <div class="info-item"><i class="fa-regular fa-file"></i><div><strong>Certificado</strong><span>Digital y Físico</span></div></div>
                </div>

                <section class="syllabus-section">
                    <h2 class="section-title">Temario</h2>
                    <div class="accordion">
                        <div class="accordion-item"><button class="accordion-header">Módulo I: Herramientas y Materiales <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Perfiles, placas y tornillería.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Módulo II: Estructuración de Tabiques <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Parantes y rieles.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Módulo III: Cielorrasos <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Suspensión y emplacado.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Módulo IV: Detalles Constructivos <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Vanis de puertas y ventanas.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Módulo V: Masillado y Acabados <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Tratamiento de juntas.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Módulo VI: Presupuestos en Drywall <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Cómputo de materiales.</li></ul></div></div>
                    </div>
                </section>
            </div>
            


        </div>
    </main>
    <script>document.querySelectorAll('.accordion-header').forEach(b=>{b.addEventListener('click',()=>{b.classList.toggle('active');const c=b.nextElementSibling;c.style.maxHeight=b.classList.contains('active')?c.scrollHeight+"px":0;b.querySelector('i').style.transform=b.classList.contains('active')?"rotate(180deg)":"rotate(0deg)";});});</script>

<?php include '../includes/footer.php'; ?>
