document.addEventListener('DOMContentLoaded', () => {
    // Mobile Menu Toggle
    const mobileBtn = document.querySelector('.mobile-menu-btn');
    const nav = document.querySelector('nav');

    if (mobileBtn) {
        mobileBtn.addEventListener('click', () => {
            nav.classList.toggle('active');

            // Icon transition (Hamburger to X) can be added here
            const icon = mobileBtn.querySelector('i');
            if (nav.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
            }
        });
    }

    // NEW: Independent Mobile Submenu Logic
    const mobileToggles = document.querySelectorAll('.mobile-toggle');

    mobileToggles.forEach(toggle => {
        toggle.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation(); // CRITICAL: Stop event from bubbling to link or other handlers

            // Toggle the 'active-mobile-menu' class on the PARENT LI
            const parentLi = toggle.closest('.has-submenu');
            if (parentLi) {
                // Optional: Close other open menus (accordion behavior)
                // document.querySelectorAll('.has-submenu.active-mobile-menu').forEach(item => {
                //     if (item !== parentLi) item.classList.remove('active-mobile-menu');
                // });

                parentLi.classList.toggle('active-mobile-menu');
            }
        });
    });
    const header = document.querySelector('header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.style.boxShadow = '0 4px 10px rgba(0,0,0,0.15)';
        } else {
            header.style.boxShadow = '0 4px 6px -1px rgba(0, 0, 0, 0.1)';
        }
    });

    // Form Submission & Dynamic Select Logic
    const scriptURL = "https://script.google.com/macros/s/AKfycbyKJUhK0fJPtqCKksjpElTac2gwctF9i27MOV90vo_HPtGNYkJzV-rkXq9p0WfsGUeK/exec";
    const form = document.getElementById("submit-to-google-sheet");
    const studyTypeSelect = document.getElementById('study-type');
    const specificProgramSelect = document.getElementById('specific-program');

    // Dynamic Options Data
    const optionsData = {
        'cursos': [
            { value: 'power-bi', text: 'Análisis de Datos con POWER BI' },


            { value: 'drywall', text: 'DRYWALL' },
            { value: 'instalaciones-electricas', text: 'INSTALACIONES ELÉCTRICAS' }
        ],
        'programas': [
            { value: 'economia-aplicada', text: 'Economía Aplicada' },
            { value: 'seguridad-salud', text: 'Seguridad y Salud' },
            { value: 'gestion-ambiental', text: 'Gestión Ambiental' },
            { value: 'gestion-publica', text: 'Gestión Pública' },
            { value: 'gestion-proyectos', text: 'Gestión de Proyectos' }
        ]
    };

    // Dependent Select Logic
    if (studyTypeSelect && specificProgramSelect) {
        studyTypeSelect.addEventListener('change', function () {
            const selectedType = this.value;

            // Reset and Enable/Disable
            specificProgramSelect.innerHTML = '<option value="" disabled selected>Selecciona una opción</option>';

            if (optionsData[selectedType]) {
                optionsData[selectedType].forEach(option => {
                    const optionElement = document.createElement('option');
                    optionElement.value = option.value;
                    optionElement.textContent = option.text;
                    specificProgramSelect.appendChild(optionElement);
                });
                specificProgramSelect.disabled = false;
            } else {
                specificProgramSelect.disabled = true;
            }
        });
    }

    // Form Submission Logic
    if (form) {
        form.addEventListener("submit", (e) => {
            e.preventDefault();

            const formData = new FormData(form);

            fetch(scriptURL, { method: "POST", body: formData })
                .then(response => response.json())
                .then(data => {
                    if (data.result === "success") {
                        Swal.fire("¡Enviado!", "Tu formulario se ha enviado correctamente.", "success");
                        form.reset();

                        // Reset select logic
                        if (specificProgramSelect) {
                            specificProgramSelect.innerHTML = '<option value="" disabled selected>Selecciona primero el tipo</option>';
                            specificProgramSelect.disabled = true;
                        }
                    } else {
                        Swal.fire("Error", "No se pudo enviar el formulario. Intenta de nuevo.", "error");
                        console.error("Error del servidor:", data.error);
                    }
                })
                .catch(error => {
                    Swal.fire("Error", "Hubo un problema al enviar el formulario.", "error");
                    console.error("Fetch error:", error);
                });
        });
    }
});
