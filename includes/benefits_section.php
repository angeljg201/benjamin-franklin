<style>
    .benefits-wrapper {
        margin-top: 60px;
        padding-top: 0 !important;
        padding-bottom: 0 !important;
        font-family: 'Outfit', sans-serif;
    }

    .benefits-header {
        margin-bottom: 30px;
    }

    .benefits-title {
        color: var(--primary-color);
        font-size: 2rem;
        font-weight: 800;
        display: flex;
        align-items: center;
        gap: 15px;
        text-transform: uppercase;
        margin-bottom: 20px;
    }
    
    .benefits-title i {
        font-size: 2.5rem;
        color: var(--primary-color);
    }
    
    .benefits-intro {
        font-size: 1.1rem;
        line-height: 1.6;
        color: #4b5563;
        margin-bottom: 30px;
        text-align: justify;
    }

    .benefits-subtitle {
        font-size: 1.5rem;
        color: var(--primary-color);
        font-weight: 700;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .benefits-subtitle::before {
        content: '\f105'; /* Chevron right */
        font-family: 'Font Awesome 6 Free';
        font-weight: 900;
    }

    .benefit-card-stack {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .benefit-row {
        display: flex;
        align-items: center;
        padding: 25px 30px;
        border-radius: 12px;
        gap: 25px;
        transition: transform 0.3s ease;
    }
    
    .benefit-row:hover {
        transform: translateX(5px);
    }
    
    .benefit-row.light {
        background-color: #f3f0f9; /* Light purple/lavender */
        border-left: 5px solid transparent;
    }
    
    .benefit-row.light:hover {
        border-left-color: var(--secondary-color);
    }

    .benefit-row.dark {
        background-color: #6d1b2b; /* Deep maroon */
        color: white;
    }

    .benefit-icon {
        font-size: 2.5rem;
        flex-shrink: 0;
        width: 60px;
        text-align: center;
    }
    
    .benefit-row.light .benefit-icon {
        color: var(--primary-color); /* Dark Blue */
    }
    
    .benefit-row.dark .benefit-icon {
        color: white;
    }

    .benefit-content h4 {
        font-size: 1.2rem;
        font-weight: 800;
        margin-bottom: 8px;
        text-transform: uppercase;
    }
    
    .benefit-row.light .benefit-content h4 {
        color: var(--primary-color);
    }
    
    .benefit-row.dark .benefit-content h4 {
        color: white;
    }

    .benefit-content p {
        font-size: 1rem;
        line-height: 1.5;
        margin: 0;
    }
    
    .benefit-row.light .benefit-content p {
        color: #4b5563;
    }
    
    .benefit-row.dark .benefit-content p {
        color: rgba(255, 255, 255, 0.9);
    }

    @media (max-width: 600px) {
        .benefit-row {
            flex-direction: column;
            text-align: center;
            padding: 20px;
        }
        .benefits-title {
            font-size: 1.5rem;
        }
    }
</style>

<section class="benefits-wrapper">
    <div class="benefits-header">
        <h2 class="benefits-title"><i class="fa-regular fa-circle-question"></i> ¿POR QUÉ NOSOTROS?</h2>
        <p class="benefits-intro">
            Nuestro <strong>Programa de Especialización</strong> ofrece una <strong>experiencia educativa de calidad</strong>, enriquecida con un enfoque práctico y especializado. Nuestro compromiso es brindarte las herramientas necesarias para destacarte en este sector dinámico y competitivo. <strong>Únete a nosotros y lleva tu carrera al siguiente nivel.</strong>
        </p>
        <h3 class="benefits-subtitle">Beneficios</h3>
    </div>

    <div class="benefit-card-stack">
        <!-- Card 1 -->
        <div class="benefit-row light">
            <div class="benefit-icon">
                <i class="fa-solid fa-user-graduate"></i>
            </div>
            <div class="benefit-content">
                <h4>EXCELENCIA ACADÉMICA</h4>
                <p>Nuestro programa ofrece una educación de calidad respaldada por una facultad experta y reconocida internacionalmente.</p>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="benefit-row light">
            <div class="benefit-icon">
                <i class="fa-solid fa-tools"></i>
            </div>
            <div class="benefit-content">
                <h4>ENFOQUE PRÁCTICO</h4>
                <p>Obtén habilidades aplicables directamente en el campo laboral, con prácticas en laboratorios y visitas técnicas.</p>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="benefit-row light">
            <div class="benefit-icon">
                <i class="fa-solid fa-briefcase"></i>
            </div>
            <div class="benefit-content">
                <h4>PREPARACIÓN INTEGRAL</h4>
                <p>Domina desde los fundamentos técnicos hasta la gestión estratégica, preparándote para destacar en un sector competitivo.</p>
            </div>
        </div>

        <!-- Card 4 (Dark) -->
        <div class="benefit-row dark">
            <div class="benefit-icon">
                <i class="fa-solid fa-certificate"></i>
            </div>
            <div class="benefit-content">
                <h4>CERTIFICACIÓN DE PRESTIGIO</h4>
                <p>Al completar con éxito nuestro programa, recibirás un certificado oficial de la UNI. ¡Acredita tu experiencia con nosotros!</p>
            </div>
        </div>
    </div>
</section>
