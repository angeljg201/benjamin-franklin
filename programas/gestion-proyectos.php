<?php
$pageTitle = "Gestión de Proyectos - Benjamin Franklin";
$rootPath = "../";
include '../includes/header.php';
?>

    <main class="course-page-wrapper">
            <aside class="course-sidebar">
                <div class="sticky-card">
                    <div class="card-image-header">
                        <img src="<?php echo $rootPath; ?>assets/img/programas/programa-gestion-proyectos.jpg" alt="Gestión de Proyectos">

                    </div>
                    <div class="card-body">
                        <h3 class="card-course-title">Especialización en Gestión de Proyectos</h3>
                        <div class="card-price"><span class="currency">S/</span> 450 <span class="modality">x Mensualidad</span></div>
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
                    <div class="hero-breadcrumb">INICIO • PROGRAMAS • GESTIÓN DE PROYECTOS</div>
                    <span class="hero-badge">DIPLOMA</span>
                    <h1>Gestión de Proyectos</h1>
                    <p>Domina las metodologías del PMI (PMBOK 7ma Edición) y enfoques ágiles (Scrum, Kanban) para liderar proyectos exitosos, cumpliendo con el alcance, tiempo y costo.</p>
                    
                    <div class="hero-stats-bar">
                        <div class="hero-stats-left">
                            <span class="stars"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star-half-stroke"></i></span>
                            <span class="rating-text">4.7 Calificaciones</span>
                        </div>
                        <div class="hero-stats-right">
                            <i class="fa-solid fa-user-group"></i> 450 Alumnos capacitados en este programa
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
                    <div class="info-item"><i class="fa-regular fa-clock"></i><div><strong>Duración</strong><span>6 Meses</span></div></div>
                    <div class="info-item"><i class="fa-solid fa-chalkboard-user"></i><div><strong>Modalidad</strong><span>Híbrido</span></div></div>
                    <div class="info-item"><i class="fa-solid fa-certificate"></i><div><strong>Créditos</strong><span>24 Académicos</span></div></div>
                </div>

                <section class="syllabus-section">
                    <h2 class="section-title">Plan de Estudios</h2>
                    <div class="accordion">
                        <div class="accordion-item"><button class="accordion-header">Mes 1: Fundamentos de la Gestión de Proyectos <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Ciclo de vida del proyecto.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Mes 2: Planificación del Alcance y Cronograma <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>WBS y MS Project.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Mes 3: Gestión de Costos y Calidad <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Presupuesto y curva S.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Mes 4: Gestión de Riesgos y Adquisiciones <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Matriz de riesgos.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Mes 5: Metodologías Ágiles <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Scrum Framework.</li></ul></div></div>
                        <div class="accordion-item"><button class="accordion-header">Mes 6: Taller de Preparación PMP/CAPM <i class="fa-solid fa-chevron-down"></i></button><div class="accordion-body"><ul><li>Simulador de examen.</li></ul></div></div>
                    </div>
                </section>
            </div>
            


        </div>
    </main>
    <script>document.querySelectorAll('.accordion-header').forEach(b=>{b.addEventListener('click',()=>{b.classList.toggle('active');const c=b.nextElementSibling;c.style.maxHeight=b.classList.contains('active')?c.scrollHeight+"px":0;b.querySelector('i').style.transform=b.classList.contains('active')?"rotate(180deg)":"rotate(0deg)";});});</script>

<?php include '../includes/footer.php'; ?>
