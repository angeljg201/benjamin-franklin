<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Instituto Profesional | Formación de Excelencia'; ?></title>
    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Institución educativa privada con más de 15 años de trayectoria. Formando profesionales para el mundo real.'; ?>">
    <link rel="icon" type="image/png" href="<?php echo $rootPath; ?>assets/img/favicon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Montserrat:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo $rootPath; ?>assets/css/style.css">
    
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3PVV01C2Y6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3PVV01C2Y6');
</script>
</head>

<body>

    <!-- Header -->
    <header>
        <div class="container">
            <a href="<?php echo $rootPath; ?>index.php" class="logo">
                <img src="<?php echo $rootPath; ?>assets/img/logo.png" alt="Corporación Educativa Benjamin Franklin" style="height: 60px;">
            </a>

            <div class="mobile-menu-btn">
                <i class="fa-solid fa-bars"></i>
            </div>

            <nav>
                <ul>
                    <li><a href="<?php echo $rootPath; ?>index.php#inicio">Inicio</a></li>

                    <li class="has-submenu">
                        <a href="<?php echo $rootPath; ?>/nosotros/index.php">Nosotros <i class="fa-solid fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="<?php echo $rootPath; ?>nosotros/index.php#quienes-somos">¿Quiénes somos?</a></li>
                            <li><a href="<?php echo $rootPath; ?>nosotros/index.php#resena-historica">Reseña histórica</a></li>
                            <li><a href="<?php echo $rootPath; ?>nosotros/index.php#mision-vision">Misión y Visión</a></li>
                            <li><a href="<?php echo $rootPath; ?>nosotros/index.php#valores">Valores</a></li>
                            <li><a href="<?php echo $rootPath; ?>nosotros/index.php#alianzas-convenios">Alianzas y Convenios</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="<?php echo $rootPath; ?>index.php#carreras">Programas <i class="fa-solid fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="<?php echo $rootPath; ?>programas/gestion-proyectos.php">Gestión de Proyectos</a></li>
                            <li><a href="<?php echo $rootPath; ?>programas/gestion-publica.php">Gestión Pública</a></li>
                            <li><a href="<?php echo $rootPath; ?>programas/economia-aplicada.php">Economía Aplicada</a></li>
                            <li><a href="<?php echo $rootPath; ?>programas/seguridad-salud.php">Seguridad y Salud</a></li>
                            <li><a href="<?php echo $rootPath; ?>programas/gestion-ambiental.php">Gestión Ambiental</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <a href="<?php echo $rootPath; ?>cursos/index.php">Cursos <i class="fa-solid fa-chevron-down"></i></a>
                        <ul class="submenu">
                            <li><a href="<?php echo $rootPath; ?>cursos/instalaciones-electricas.php">Instalaciones Eléctricas</a></li>
                            <li><a href="<?php echo $rootPath; ?>cursos/instalaciones-drywall.php">Instalaciones de Drywall</a></li>
                            <li><a href="<?php echo $rootPath; ?>cursos/power-bi.php">Análisis de Datos con Power BI</a></li>
                        </ul>
                    </li>

                    <li><a href="<?php echo $rootPath; ?>index.php#convenios">Convenios</a></li>
                    <li><a href="<?php echo $rootPath; ?>contacto/index.php" class="btn btn-secondary"
                            style="padding: 8px 20px; color: var(--primary-color);">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>
