<?php
$host = "localhost"; // Cambia esto con la dirección de tu servidor MySQL
$usuario = "root"; // Cambia esto con tu nombre de usuario de MySQL
$contrasena = ""; // Cambia esto con tu contraseña de MySQL
$base_de_datos = "taller"; // Cambia esto con el nombre de tu base de datos

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $celular = $_POST["celular"];
    $mensaje = $_POST["mensaje"];

    // Intenta realizar la conexión a MySQL
    $conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);

    // Verificar la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Escapar caracteres especiales para evitar inyecciones SQL
    $nombre = $conexion->real_escape_string($nombre);
    $email = $conexion->real_escape_string($email);
    $celular = $conexion->real_escape_string($celular);
    $mensaje = $conexion->real_escape_string($mensaje);

    // Consulta de inserción
    $sql = "INSERT INTO Contactos (nombre, correo, celular, mensaje) VALUES ('$nombre', '$email', '$celular', '$mensaje')";

    // Ejecutar la consulta
    if ($conexion->query($sql) === TRUE) {
      // Mostrar una alerta en JavaScript
      echo '<script>alert("Datos insertados correctamente en la tabla Contactos");</script>';
  } else {
      // Mostrar una alerta en JavaScript con el mensaje de error
      echo '<script>alert("Error al insertar datos: ' . $conexion->error . '");</script>';
  }

    // Cerrar la conexión al finalizar
    $conexion->close();
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>ExpertD</title>
  <link rel="shortcut icon" href="/img/icono.webp" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEX/ndQ5dUBsUZ7YbIxFKkx6A7T5SNgD1QC5l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    integrity="sha384-rbs5mQGQpL8FqCCFuDGoL4CJq8FSPpx6GJnTvNp4FpY4q9iUkE99RVFf1igA2bSM" crossorigin="anonymous">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
    integrity="sha384-dfSLIBd5WwrM6ReebNmEQGA8RNC+BiBSRn6DQ7jt8eH+1kssv7ik6a6ot3dSxfQG" crossorigin="anonymous" />

  <link rel="stylesheet" href="css/style.css" />
  <!--CDN diconos con clase fab -->


</head>
<title>ExpertD.</title>
</head>

<body>
  <!--========================================================== -->
  <!-- ENCABEZADO -->
  <!--========================================================== -->
  <header class="container-fluid bg-primary d-flex justify-content-center ">
    <p class="text-light mb-0 p-2 fs-6">Contactanos 1-(305)-725-1000</p>
  </header>

  <nav class="navbar navbar-expand-lg navbar-light p-3 fixed-top bg-light" id="menu">
    <div class="container">
      <a class="navbar-brand" href="#">
        <span class="fs-5 text-primary fw-bold pulsate">ExpertD.</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link activate" aria-current="page" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#equipo">Equipo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="nosotros.html">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="producto.html">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#seccion-contacto">Contactos</a>
          </li>
        </ul>
        <form class="d-flex">
          <input class="form-control me-2" type="email" placeholder="Correo Electronico" aria-label="Suscribete">
          <button class="btn btn-primary btn-primary-outline-success" type="button">Correo</button>
        </form>
      </div>
    </div>
  </nav>

  <!--========================================================== -->
  <!-- SLIDER DE IMAGENES-->
  <!--========================================================== -->

  <div id="carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="3000">
        <img src="./img/slide1.jpg" class="d-block w-100" alt="">
      </div>


      <div class="carousel-item" data-bs-interval="3000">
        <img src="./img/slide2.jpg" class="d-block w-100" alt="...">
      </div>


      <div class="carousel-item" data-bs-interval="3000">
        <img src="./img/slide3.jpg" class="d-block w-100" alt="...">
      </div>


    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



  <!--========================================================== -->
  <!-- INTRODUCCION DE SERVICIOS-->
  <!--========================================================== -->


  <section class="d-flex flex-column justify-content-center align-items-center pt-5  text-center w-50 m-auto"
    id="intro">
    <h1 class="p-3 fs-2 border-top border-3">Una agencia única para todas tus necesidades de <span
        class="text-primary">Marketing Digital<span /></h1>
    <p class="p-3  fs-4">
      <span class="text-primary">ExpertD.</span> es la agencia donde te ayudamos establecer tu presencia online. SEO,
      paginas WEB, tiendas virtuales, redes sociales
    </p>
  </section>

  <!--========================================================== -->
  <!-- TIPOS DE SERVICIOS-->
  <!--========================================================== -->


  <section class="w-100">
    <div class="row w-75 mx-auto" id="servicios-fila-1">
      <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap aos-init aos-animate"
        data-aos="zoom-out" data-aos-delay="200">
        <img src="./img/desarrollo.png" alt="desarrollo" width="180" height="160">

        <div>
          <h3 class="fs-5 mt-4 px-4 pb-1">Desarrollo</h3>
          <p class="px-4">Desarrollo de aplicaciones WEB, móviles y ecommerce</p>
        </div>
      </div>

      <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap aos-init aos-animate"
        data-aos="zoom-out" data-aos-delay="400">
        <img src="./img/concepto.png" alt="concepto" width="180" height="160">

        <div>
          <h3 class="fs-5 mt-4 px-4 pb-1 icono-wrap">Branding</h3>
          <p class="px-4">Diseño, Conceptualización e Implementación de productos digitales</p>
        </div>
      </div>
    </div>

    <div class="row w-75 mx-auto mb-5" id="servicios-fila-2">
      <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap aos-init aos-animate"
        data-aos="zoom-out" data-aos-delay="600">
        <img src="./img/comunicaciones.png" alt="comunicaciones" width="180" height="160">

        <div>
          <h3 class="fs-5 mt-4 px-4 pb-1">Comunicaciones</h3>
          <p class="px-4">Desarrollo del plan de comunicaciones para sus clientes.</p>
        </div>
      </div>

      <div class="col-lg-6 col-md-12 col-sm-12 d-flex justify-content-start my-5 icono-wrap aos-init aos-animate"
        data-aos="zoom-out" data-aos-delay="800">
        <img src="./img/seo.png" alt="seo" width="180" height="160">

        <div>
          <h3 class="fs-5 mt-4 px-4 pb-1">SEO</h3>
          <p class="px-4">Analizamos la eficiencia y optimizamos los sitios WEB</p>
        </div>
      </div>
    </div>
  </section>







  <!----------------------------------------------------------------------->

  <!--========================================================== -->
  <!-- SECCION ACERCA DE NOSOTROS-->
  <!--========================================================== -->

  <section class="mt-5 text-center" data-aos="fade-up" data-aos-delay="300">
    <div class="container w-50 m-auto text-center" id="equipo">
      <h1 class="mb-5 fs-2">Equipo pequeño con <span class="text-primary">resultados Grandes</span>.</h1>
      <p class="fs-4 ">Siempre buscamos las personas adecuadas para que trabajen con nosotros. Si te sientes listo para
        este reto, te esperamos para que te unas a nosotros.</p>
    </div>
    
    <div class="mt-5 text-center">
      <img id="img-equipo" src="./img/equipo.jpg" alt="equipo" data-aos-delay="500">
    </div>

    <div id="local" class="" data-aos="fade-up" data-aos-delay="700">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-8 col-lg-8">
            <h2 class="mt-5">Ubicado en Miami, Florida</h2>
            <h2 class="text-primary " id="typewriter"></h2>
            <p class=" text-body">Elijimos Miami para nuestra oficina con el objetivo de estar cerca a nuestros
              clientes. Estamos ubicados en Brickell, el corazón y el centro financiero de Miami, cerca de los mejores
              restaurantes, tiendas y tan solo 15 minutos de las playas. ¡Visítanos y no te arrepentirás!</p>
            <br>
            <div class="d-flex justify-content-center" id="numeros-local">
              <div>
                <p class="text-primary ">200</p>
                <p>Días de Sol</p>
              </div>
              <div>
                <p class="text-primary ">100%</p>
                <p>Aprobado</p>
              </div>
              <div>
                <p class="text-primary ">24 °C</p>
                <p>Temperatura</p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="container">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d229996.70873430267!2d-80.35865155866915!3d25.747479866177155!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b0a20ec8c111%3A0xff96f271ddad4f65!2sMiami%2C%20Florida%2C%20EE.%20UU.!5e0!3m2!1ses-419!2sec!4v1705237512140!5m2!1ses-419!2sec"
                width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!--========================================================== -->
  <!-- SECCION CONTACTOS-->
  <!--========================================================== -->

  <section class="bg-light py-3 py-md-5" id="seccion-contacto">
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
          <h2 class="mb-4 display-5 text-center">Formulario de Contacto</h2>
          <p class="text-secondary mb-5 text-center">Si tienes alguna duda nos puedes mandar un mensaje, estaremos encantados de responderte.</p>
          <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row justify-content-lg-center">
        <div class="col-12 col-lg-9">
          <div class="bg-white border rounded shadow-sm overflow-hidden">

          <form action="" method="post">
              <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                <div class="col-12">
                  <label for="fullname" class="form-label">Nombre completo <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="fullname" name="nombre" value=""
                    placeholder="Nombre Completo" required>
                </div>
                <div class="col-12 col-md-6">
                  <label for="email" class="form-label">Correo <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <span class="input-group-text">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-envelope" viewBox="0 0 16 16">
                        <path
                          d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                      </svg>
                    </span>
                    <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@gmail.com"
                      value="" required>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <label for="phone" class="form-label">Numero Telefonico</label>
                  <div class="input-group">
                    <span class="input-group-text">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-telephone" viewBox="0 0 16 16">
                        <path
                          d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                      </svg>
                    </span>
                    <input type="text" class="form-control" id="phone" name="celular"  placeholder="0999999999" value="">
                  </div>
                </div>
                <div class="col-12">
                  <label for="message" class="form-label">Mensaje <span class="text-danger">*</span></label>
                  <textarea class="form-control" id="message" name="mensaje" rows="3" required></textarea>
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn btn-primary btn-lg" type="submit">Enviar</button>
                  </div>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>


  <!--========================================================== -->
  <!--FOOTER-->
  <!--========================================================== -->


  <!-- Footer -->
  <footer class="text-center text-white bg-primary">
    <!-- Grid container -->
    <div class="container">
      <!-- Section: Links -->
      <section class="">
        <!-- Grid row-->
        <div class="row text-center d-flex justify-content-center pt-5">
          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="index.php" class="text-white">Inicio</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="index.php#equipo" class="text-white">Equipo</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="nosotros.html" class="text-white">Nosotros</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="producto.html" class="text-white">Productos</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="index.php#seccion-contacto" class="text-white">Contactos</a>
            </h6>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row-->
      </section>
      <!-- Section: Links -->
      
      <hr class="my-5" id="hr" />

      <!-- Section: Text -->
      <section class="mb-5">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <p>
              En <strong>ExpertD</strong>, nos enorgullece ser líderes en la industria al ofrecer servicios de marketing
              digital de primera categoría. Nos dedicamos a potenciar tu marca y a impulsar tu presencia en línea para
              que destaque en el competitivo mundo digital.
            </p>
          </div>
        </div>
      </section>
      <!-- Section: Text -->

      </style>
      <!-- Section: Social -->
      <section class="text-center mb-5">
        <a href="index.php" class="text-white me-4"><i class="bi bi-facebook"></i></a>
        <a href="#" class="text-white me-4"><i class="bi bi-twitter"></i></a>
        <a href="#" class="text-white me-4"><i class="bi bi-google"></i></a>
        <a href="#" class="text-white me-4"><i class="bi bi-instagram"></i></a>
        <a href="#" class="text-white me-4"><i class="bi bi-linkedin"></i></a>
        <a href="#" class="text-white me-4"><i class="bi bi-github"></i>
        </a>
      </section>

      <!-- Section: Social -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
      © 2024 Copyright:
      <a class="text-white" href="/">ExpertD.</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

  <!-- End of .container -->





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
  <script src="main.js"></script>
  <!-- AOS JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-GLhlTQ8iEWNpZMBJc5YZBPhdWUN5b0Mk4NqvFUCb3q2t4feVdApmDzZI5U8j7UJ" crossorigin="anonymous"></script>



</body>

</html>