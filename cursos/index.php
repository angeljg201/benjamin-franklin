<?php
$pageTitle = "Cursos de Especialización - Benjamin Franklin";
$rootPath = "../";
include '../includes/header.php';
?>

<style>
    .programs-hero-section {
        padding: 140px 0 60px;
    }
    @media (max-width: 768px) {
        .programs-hero-section {
            padding: 100px 0 40px;
        }
    }
</style>
<main class="course-page-wrapper">
    <!-- Hero Section -->
    <section class="programs programs-hero-section">
        <div class="container">
            <div class="section-header" style="text-align: left;">
                <span style="color: var(--secondary-color); font-weight: 700; font-size: 1.2rem; display: block; margin-bottom: 20px;">Cursos</span>
                <h1 style="color: var(--primary-color); font-size: 3.5rem; margin-bottom: 30px; line-height: 1.1;">Cursos de especialización para impulsar tu futuro profesional</h1>
                <p style="font-size: 1.15rem; color: #4b5563; max-width: 900px; line-height: 1.7;">
                    Los cursos de especialización de la Corporación Benjamin Franklin están diseñados para desarrollar competencias prácticas y especializadas en las áreas de construcción, salud, textil y calzado, respondiendo a las exigencias reales del mercado laboral. Nuestra formación combina metodología aplicada, docentes con amplia experiencia profesional y certificaciones validadas por el MINEDU y el Ministerio de Trabajo, brindándote una preparación sólida para acceder a mejores oportunidades laborales y crecer profesionalmente.
                </p>
            </div>

            <!-- Course Grid -->
            <div class="programs-grid">
                <!-- Card 1: Instalaciones Eléctricas -->
                <article class="program-card">
                    <div class="program-img">
                        <a href="instalaciones-electricas.php">
                            <img src="<?php echo $rootPath; ?>assets/img/cursos/curso-instalaciones-electricas.jpg" alt="Instalaciones Eléctricas">
                        </a>
                    </div>
                    <div class="program-info">
                        <h3>Instalaciones Eléctricas</h3>
                        <ul class="program-details">
                            <li><i class="fa-solid fa-calendar-days"></i> Inicio: Mensual</li>
                            <li><i class="fa-regular fa-clock"></i> 2 Meses</li>
                            <li><i class="fa-solid fa-chalkboard-user"></i> Presencial y Virtual</li>
                            <li><i class="fa-solid fa-certificate"></i> Certificación Oficial</li>
                        </ul>
                        <div class="card-footer">
                            <a href="instalaciones-electricas.php" class="btn btn-primary" style="width: 100%; text-align: center;">Conoce el Curso</a>
                        </div>
                    </div>
                </article>

                <!-- Card 2: Instalaciones de Drywall -->
                <article class="program-card">
                    <div class="program-img">
                        <a href="instalaciones-drywall.php">
                            <img src="<?php echo $rootPath; ?>assets/img/cursos/curso-instalaciones-drywall.jpg" alt="Instalaciones de Drywall">
                        </a>
                    </div>
                    <div class="program-info">
                        <h3>Instalaciones de Drywall</h3>
                        <ul class="program-details">
                            <li><i class="fa-solid fa-calendar-days"></i> Inicio: Mensual</li>
                            <li><i class="fa-regular fa-clock"></i> 2 Meses</li>
                            <li><i class="fa-solid fa-chalkboard-user"></i> Presencial y Virtual</li>
                            <li><i class="fa-solid fa-certificate"></i> Certificación Oficial</li>
                        </ul>
                        <div class="card-footer">
                            <a href="instalaciones-drywall.php" class="btn btn-primary" style="width: 100%; text-align: center;">Conoce el Curso</a>
                        </div>
                    </div>
                </article>

                <!-- Card 3: Power BI -->
                <article class="program-card">
                    <div class="program-img">
                        <a href="power-bi.php">
                            <img src="<?php echo $rootPath; ?>assets/img/cursos/curso-power-bi.jpg" alt="Análisis de Datos con Power BI">
                        </a>
                    </div>
                    <div class="program-info">
                        <h3>Análisis de Datos con Power BI</h3>
                        <ul class="program-details">
                            <li><i class="fa-solid fa-calendar-days"></i> Inicio: Inmediato</li>
                            <li><i class="fa-regular fa-clock"></i> 3 Meses</li>
                            <li><i class="fa-solid fa-chalkboard-user"></i> 100% Virtual</li>
                            <li><i class="fa-solid fa-certificate"></i> Certificación Oficial</li>
                        </ul>
                        <div class="card-footer">
                            <a href="power-bi.php" class="btn btn-primary" style="width: 100%; text-align: center;">Conoce el Curso</a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section" style="background-color: var(--bg-off-white); padding: 80px 0; border-top: 1px solid #e5e7eb;">
        <div class="container">
            <h2 style="text-align: center; font-size: 2.5rem; font-weight: 800; margin-bottom: 50px; color: var(--primary-color);">PREGUNTAS FRECUENTES</h2>
            
            <div class="faq-grid" style="max-width: 900px; margin: 0 auto;">
                <div class="faq-item" style="margin-bottom: 40px;">
                    <h3 style="font-size: 1.35rem; font-weight: 700; margin-bottom: 15px; color: var(--primary-color);">¿Qué cursos de especialización ofrece la Corporación Benjamin Franklin?</h3>
                    <p style="font-size: 1.1rem; line-height: 1.7; color: var(--text-dark); opacity: 0.9;">
                        La Corporación Benjamin Franklin ofrece cursos de especialización en las áreas de construcción, salud, textil y calzado, diseñados para desarrollar habilidades técnicas y prácticas que responden a las necesidades actuales del mercado laboral.
                    </p>
                </div>
                
                <div class="faq-item" style="margin-bottom: 40px;">
                    <h3 style="font-size: 1.35rem; font-weight: 700; margin-bottom: 15px; color: var(--primary-color);">¿Por qué estudiar un curso de especialización en la Corporación Benjamin Franklin?</h3>
                    <p style="font-size: 1.1rem; line-height: 1.7; color: var(--text-dark); opacity: 0.9;">
                        Porque brindamos una formación práctica con metodología aplicada, docentes especializados y certificaciones validadas oficialmente por el MINEDU y el Ministerio de Trabajo, lo que fortalece tu perfil profesional y mejora tu empleabilidad.
                    </p>
                </div>
                
                <div class="faq-item">
                    <h3 style="font-size: 1.35rem; font-weight: 700; margin-bottom: 15px; color: var(--primary-color);">¿Qué ventajas tienen los cursos de especialización de Benjamin Franklin?</h3>
                    <p style="font-size: 1.1rem; line-height: 1.7; color: var(--text-dark); opacity: 0.9;">
                        Entre sus principales ventajas destacan: formación práctica orientada al trabajo real, docentes con experiencia en el sector, modalidades accesibles, certificación oficial sin costo adicional y respaldo institucional para acceder a oportunidades laborales en el sector público y privado.
                    </p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include '../includes/footer.php'; ?>
