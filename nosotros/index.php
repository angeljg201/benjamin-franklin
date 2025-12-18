<?php
$pageTitle = "Nosotros - Benjamin Franklin";
$rootPath = "../";
include '../includes/header.php';
?>

<style>
    /* Unique styles for this page to Ensure separation */
    .nosotros-section {
        padding: 80px 0;
        scroll-margin-top: 80px; /* Header offset */
        border-bottom: 1px solid #f0f0f0;
    }

    .nosotros-section:last-child {
        border-bottom: none;
    }

    .section-title {
        color: var(--primary-color);
        font-size: 2.5rem;
        margin-bottom: 30px;
        position: relative;
        display: inline-block;
    }
    
    .section-title::after {
        content: '';
        display: block;
        width: 60px;
        height: 4px;
        background: var(--secondary-color);
        margin-top: 10px;
    }

    .mv-card {
        padding: 40px;
        background: white;
        border-radius: 10px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.08);
        transition: transform 0.3s;
        height: 100%;
        border-top: 5px solid var(--secondary-color);
    }

    .mv-card:hover {
        transform: translateY(-5px);
    }
    
    .mv-card.vision {
        border-top-color: var(--primary-color);
    }

    .value-card {
        padding: 30px;
        background: white;
        border-radius: 8px;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        text-align: center;
        transition: all 0.3s;
    }

    .value-card:hover {
        box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        transform: translateY(-5px);
    }
    
    .alliance-card {
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        display: flex;
        align-items: center;
        padding: 20px;
        gap: 20px;
        border: 1px solid #eee;
    }
</style>

<main>
    <!-- Hero Section -->
    <section class="programs" style="padding: 140px 0 60px; background: linear-gradient(rgba(12, 13, 80, 0.9), rgba(12, 13, 80, 0.7)), url('<?php echo $rootPath; ?>assets/img/hero-bg.jpg'); background-size: cover; background-position: center; color: white;">
        <div class="container">
            <div class="section-header" style="text-align: left;">
                <span style="color: var(--secondary-color); font-weight: 700; font-size: 1.2rem; display: block; margin-bottom: 20px;">Institucional</span>
                <h1 style="color: white; font-size: 3.5rem; margin-bottom: 20px; line-height: 1.1;">Nosotros</h1>
            </div>
        </div>
    </section>

    <!-- Quienes Somos -->
    <section id="quienes-somos" class="nosotros-section">
        <div class="container">
            <div class="course-grid" style="grid-template-columns: 1fr 1fr; align-items: center; gap: 60px; display: grid;">
                <div class="text">
                    <h2 class="section-title">¿Quiénes somos?</h2>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #4b5563; margin-bottom: 20px;">
                        La Corporación Educativa “Benjamin Franklin” es una institución educativa con filosofía empresarial, cuya misión fundamental es la formación, capacitación y especialización profesional de estudiantes.
                    </p>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #4b5563;">
                        Promueve el liderazgo personal, profesional y empresarial a través de las diversas actividades educativas que brinda, preparando a nuestros alumnos para enfrentar los desafíos de un mercado laboral globalizado.
                    </p>
                </div>
                <div class="image">
                    <img src="<?php echo $rootPath; ?>assets/img/about-us.png" alt="Estudiantes Benjamin Franklin" style="width: 100%; border-radius: 10px; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
                </div>
            </div>
            <!-- Mobile Responsive Fix for existing Grid class if needed, but standard CSS might handle 1fr 1fr well or need @media. Assuming global grid handles it or style.css has checks. Adding inline media query safety just in case for this specific block style. -->
            <style>
                @media(max-width: 900px) {
                    #quienes-somos .course-grid { grid-template-columns: 1fr !important; gap: 40px !important; }
                }
            </style>
        </div>
    </section>

    <!-- Resena Historica -->
    <section id="resena-historica" class="nosotros-section" style="background-color: var(--bg-off-white);">
        <div class="container">
            <div class="course-grid" style="grid-template-columns: 1fr 1fr; align-items: center; gap: 60px; display: grid; direction: rtl;"> <!-- Using direction rtl to swap visual order effectively for desktop, then reset for content -->
                <div class="text" style="direction: ltr;">
                    <h2 class="section-title">Reseña Histórica</h2>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #4b5563; margin-bottom: 20px;">
                        Desde nuestro establecimiento el 1 de enero del año 2000, nos hemos comprometido a ofrecer una educación de calidad adaptada a las necesidades cambiantes del mercado y de nuestros estudiantes. 
                    </p>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #4b5563;">
                        Mantenemos un enfoque constante en la excelencia académica y trabajamos de manera continua para fortalecer nuestra presencia digital y la comunicación con la comunidad educativa, consolidándonos como un referente en educación técnica superior.
                    </p>
                </div>
                <div class="image" style="direction: ltr;">
                    <img src="<?php echo $rootPath; ?>assets/img/hero-students.png" alt="Historia Institucional" style="width: 100%; border-radius: 10px; box-shadow: 0 20px 40px rgba(0,0,0,0.1);">
                </div>
            </div>
             <style>
                @media(max-width: 900px) {
                    #resena-historica .course-grid { grid-template-columns: 1fr !important; direction: ltr !important; }
                }
            </style>
        </div>
    </section>

    <!-- Mision y Vision -->
    <section id="mision-vision" class="nosotros-section">
        <div class="container">
            <div style="text-align: center; margin-bottom: 50px;">
                <h2 class="section-title" style="margin: 0 auto;">Nuestra Esencia</h2>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 40px;">
                <!-- Mision -->
                <div class="mv-card">
                    <div style="font-size: 3rem; color: var(--secondary-color); margin-bottom: 20px;"><i class="fa-solid fa-bullseye"></i></div>
                    <h3 style="color: var(--primary-color); font-size: 1.8rem; margin-bottom: 20px;">Misión</h3>
                    <p style="font-size: 1.1rem; line-height: 1.7; color: #4b5563;">
                        Ser una institución educativa dedicada a la formación de estudiantes, técnicos y profesionales altamente competitivos, preparados para los retos de la industria, el desarrollo económico y el desarrollo sostenible del país.
                    </p>
                </div>

                <!-- Vision -->
                <div class="mv-card vision">
                    <div style="font-size: 3rem; color: var(--primary-color); margin-bottom: 20px;"><i class="fa-solid fa-eye"></i></div>
                    <h3 style="color: var(--primary-color); font-size: 1.8rem; margin-bottom: 20px;">Visión</h3>
                    <p style="font-size: 1.1rem; line-height: 1.7; color: #4b5563;">
                        Ser la entidad educativa líder del Perú, con orientación al emprendedurismo y al desarrollo sostenible, reconocida por su excelencia académica y aporte a la sociedad.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Valores -->
    <section id="valores" class="nosotros-section" style="background-color: var(--bg-off-white);">
        <div class="container">
            <div style="text-align: center; margin-bottom: 50px;">
                <h2 class="section-title" style="margin: 0 auto;">Nuestros Valores</h2>
                 <p style="margin-top: 20px; font-size: 1.1rem; color: #666;">Los pilares que guían nuestra labor educativa día a día.</p>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
                <!-- Value 1 -->
                <div class="value-card">
                    <div style="font-size: 2.5rem; color: var(--secondary-color); margin-bottom: 15px;"><i class="fa-solid fa-handshake"></i></div>
                    <h3 style="color: var(--primary-color); font-size: 1.3rem; margin-bottom: 10px;">Honestidad</h3>
                    <p style="color: #666;">Transparencia e integridad en todas nuestras acciones.</p>
                </div>
                <!-- Value 2 -->
                <div class="value-card">
                    <div style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 15px;"><i class="fa-solid fa-users"></i></div>
                    <h3 style="color: var(--primary-color); font-size: 1.3rem; margin-bottom: 10px;">Compromiso</h3>
                    <p style="color: #666;">Trabajo en equipo alineado a los objetivos institucionales.</p>
                </div>
                <!-- Value 3 -->
                <div class="value-card">
                    <div style="font-size: 2.5rem; color: var(--secondary-color); margin-bottom: 15px;"><i class="fa-solid fa-heart"></i></div>
                    <h3 style="color: var(--primary-color); font-size: 1.3rem; margin-bottom: 10px;">Lealtad</h3>
                    <p style="color: #666;">Confianza, fidelidad y colaboración hacia un objetivo común.</p>
                </div>
                <!-- Value 4 -->
                <div class="value-card">
                    <div style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 15px;"><i class="fa-solid fa-star"></i></div>
                    <h3 style="color: var(--primary-color); font-size: 1.3rem; margin-bottom: 10px;">Calidad</h3>
                    <p style="color: #666;">Búsqueda constante de la excelencia.</p>
                </div>
                <!-- Value 5 -->
                <div class="value-card">
                    <div style="font-size: 2.5rem; color: var(--secondary-color); margin-bottom: 15px;"><i class="fa-solid fa-lightbulb"></i></div>
                    <h3 style="color: var(--primary-color); font-size: 1.3rem; margin-bottom: 10px;">Innovación</h3>
                    <p style="color: #666;">Mejora continua de procesos y soluciones.</p>
                </div>
                <!-- Value 6 -->
                <div class="value-card">
                    <div style="font-size: 2.5rem; color: var(--primary-color); margin-bottom: 15px;"><i class="fa-solid fa-shield-halved"></i></div>
                    <h3 style="color: var(--primary-color); font-size: 1.3rem; margin-bottom: 10px;">Seguridad</h3>
                    <p style="color: #666;">Protección y bienestar de la comunidad.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Alianzas -->
    <section id="alianzas-convenios" class="nosotros-section">
        <div class="container">
            <div style="text-align: center; margin-bottom: 50px;">
                <h2 class="section-title" style="margin: 0 auto;">Alianzas y Convenios</h2>
                <p style="margin-top: 20px; font-size: 1.1rem; color: #666;">Respaldamos tu educación con convenios estratégicos de primer nivel.</p>
            </div>
            
            <div style="display: flex; flex-direction: column; gap: 30px; max-width: 900px; margin: 0 auto;">
                
                <!-- Alliance 1 -->
                <div class="alliance-card">
                    <div style="width: 100px; height: 100px; flex-shrink: 0; display: flex; align-items: center; justify-content: center; background: #fff;">
                       <img src="<?php echo $rootPath; ?>assets/img/logos/logo_uni.png" alt="UNI" style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div style="flex: 1;">
                        <h3 style="color: var(--primary-color); font-size: 1.4rem; margin-bottom: 10px;">FACULTAD DE INGENIERÍA QUÍMICA Y TEXTIL – UNI</h3>
                        <p style="color: #666; font-size: 1.1rem; margin-bottom: 15px;">Gestión en comercialización en Servicios Educativos.</p>
                        <a href="#" class="btn btn-outline" style="font-size: 0.9rem; padding: 8px 20px;">+ Información</a>
                    </div>
                </div>

                <!-- Alliance 2 -->
                <div class="alliance-card">
                    <div style="width: 100px; height: 100px; flex-shrink: 0; display: flex; align-items: center; justify-content: center; background: #fff;">
                       <img src="<?php echo $rootPath; ?>assets/img/logos/logo_UNAP_convenio.png" alt="UNAP" style="max-width: 100%; max-height: 100%;">
                    </div>
                    <div style="flex: 1;">
                        <h3 style="color: var(--primary-color); font-size: 1.4rem; margin-bottom: 10px;">UNIVERSIDAD NACIONAL DE LA AMAZONÍA PERUANA</h3>
                        <p style="color: #666; font-size: 1.1rem; margin-bottom: 15px;">Desarrollo de Programas de Especialización.</p>
                        <a href="#" class="btn btn-outline" style="font-size: 0.9rem; padding: 8px 20px;">+ Información</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>

<?php include '../includes/footer.php'; ?>
