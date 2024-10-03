<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAM-LP</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
</head>

<body>

    <?php require "navbar.php"; ?>

    <?php require "inicio.php"; ?>

    <?php require "nosotros.php"; ?>

    <?php require "autoridades.php"; ?>

    <?php require "servicios.php"; ?>

    <?php require "contacto.php"; ?>


    <footer class="bg-dark text-white pt-5 pb-4">
        <div class="container text-center text-md-left">
            <div class="row text-center text-md-left">
                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Números de Emergencia</h5>
                    <p>Información general: <span class="text-info">155</span></p>
                    <p>Seguimiento de trámites: <span class="text-info">155 opción 1</span></p>
                    <p>Registro IGOB ciudadano: <span class="text-info">155 opción 1</span></p>
                    <p>Administración tributaria - ATM: <span class="text-info">155 opción 2</span></p>
                    <p>Actividades económicas: <span class="text-info">155 opción 3</span></p>
                </div>

                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Red de Servicios</h5>
                    <p>Red de Ambulancias: <span class="text-info">167</span></p>
                    <p>Defensoría de la Niñez: <span class="text-info">156</span></p>
                    <p>Guardia de transporte: <span class="text-info">165</span></p>
                    <p>Intendencia Municipal: <span class="text-info">165</span></p>
                    <p>Retén de Emergencia: <span class="text-info">114</span></p>
                </div>

                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Otros Servicios</h5>
                    <p>SAC La Paz Bus: <span class="text-info">155 opción 4</span></p>
                    <p>Alumbrado y semaforización: <span class="text-info">155 opción 5</span></p>
                    <p>Guardia municipal: <span class="text-info">155 opción 6</span></p>
                    <p>Servicio de Catastro Masivo: <span class="text-info">800 103037</span></p>
                    <p>Línea Arco Iris: <span class="text-info">2650915</span></p>
                    <p>Quejas de recojo de basura: <span class="text-info">800 1017777</span></p>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-8 col-xl-8 mt-3">
                    <p class="text-center text-muted">
                        Copyright © 2024 GOBIERNO AUTÓNOMO MUNICIPAL DE LA PAZ
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        let lastScrollTop = 0;
        const navbar = document.querySelector('.navbar');

        window.addEventListener('scroll', function () {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollTop > lastScrollTop) {

                navbar.classList.add('hidden');
            } else {

                navbar.classList.remove('hidden');
            }

            lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
        });


        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', function () {
                navbar.classList.remove('hidden');
            });
        });
    </script>




</body>

</html>