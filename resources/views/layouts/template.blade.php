<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Pisisi</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Inicio</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">Nosotros</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Informacion </a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="https://puertopisisi.com/wp-content/uploads/2016/05/logo-2.png" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Puerto Pisisi</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Es el primer Ecopuerto de Colombia, ubicado en la Bahía del municipio de Turbo en el Golfo de Urabá, será un puerto multipropósito comprometido con el medio ambiente y el desarrollo social del departamento de Antioquia y el país.
Puerto Pisisí esta ubicado en la vereda Casanova del municipio de Turbo; en el departamento de Antioquia de Colombia y será un puerto con grandes ventajas competitivas por la cercanía a los centros de producción.</p>
            </div>
        </header>

         
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">

            
                <!-- Portfolio Section Heading-->
             
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">

               
                    <!-- Portfolio Item 1-->
                    @yield('content')
              
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">Nosotros</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">Somos una empresa legalmente constituida para el desarrollo de la bahía de Turbo, en el departamento de Antioquia, que se proyecta hacia la construcción, operación, mantenimiento y administración de puertos y terminales portuarias</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">Actualmente PISISI S.A. avanza en la planeación, definiciones de obra civil y administración del único puerto automatizado y multipropósito de Colombia. Esta diferencia, facilitará el servicio a las rutas marítimas de comercio exterior siguiendo estrictos parámetros de seguridad con beneficios  para navieras y operadores de carga a nivel nacional.</p></div>
                </div>
                
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Informacion </h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>

                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">Existe la voluntad política para desarrollar el proyecto por parte de la Gobernación de Antioquia y las autoridades locales.
Cercanía estratégica al Canal de Panamá.
Estar más cerca a los parques industriales del país y de la zona cafetera.
Creación de empleo directo e indirecto para mejorar la calidad de vida en la región.
 La aprobación de la Autopista de la Prosperidad (doble vía) por parte de la Gobernación de Antioquia conectará a Turbo con Medellín en aproximadamente 4 horas.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">Tener un mercado cautivo equivalente a más del 25% de la carga de Colombia, que tiene como destino al Eje Cafetero.
Ciudades como Medellín y regiones como el Eje Cafetero serán más competitivas gracias a la salida al mar por Urabá, lo que significa que el proyecto PISISÍ en Turbo es una gran oportunidad.
Con la firma del TLC con Perú, Chile, México, Corea, Canadá, USA, entre otros; se necesita un puerto confiable y eficiente para movilizar ágilmente las mercancías, siendo un hub o puerto de trasbordo en las rutas comerciales de las navieras internacionales.
Se disminuirán considerablemente las distancias a las ciudades más importantes y parques industriales, lo que reducirá los tiempos y costos de transporte</p></div>
                </div>
           
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                        Cr 12 N° 100-51 Turbo Antioquia, Colombia
                            <br />
                    
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">redes sociales </h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://web.facebook.com/pisisisa"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://twitter.com/pisisisa?lang=es"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/pisisisa/"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">OFICINA PRINCIPAL</h4>
                        <p class="lead mb-0">
                            
                            <a href="https:/uertopisisi.com/beneficios/">¿Como llegar?</a>
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container"><small>Copyright &copy; web pisisi 2024</small></div>
        </div>
        <!-- Portfolio Modals-->




       
       /p
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
