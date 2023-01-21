<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Juan Francisco López - Portafolio Web</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <!-- ESTA ES LA TIPOGRAFIA DE TITULOS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Paytone+One&display=swap" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

  <script src="https://kit.fontawesome.com/4e458e8f90.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
  <link rel="stylesheet" href="css/owltestimonio.css">

</head>

<body>

  <div class="container">

    <!-- Modal -->
    <div class="modal show fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <!-- <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> -->
          <div class="modal-body">
            <div class="centrar2">
              <div class="caja">
                <img src="images/j.png" class="uno animate__animated animate__fadeInDown" />
                <img src="images/L.png" class="dos animate__animated animate__fadeInDown" />
                <img src="images/o.png" class="tres animate__animated animate__fadeIn" />
                <img src="images/pez.png" class="cuatro animate__animated animate__zoomInRight" />
                <img src="images/code.png" class="cinco animate__animated animate__rotateIn">
                <img src="images/designer.png" class="seis animate__animated animate__jackInTheBox" />
              </div>
            </div>
          </div>
          <div>
            <h2 class="display-4 text-muted text-center m-4 animate__animated animate__fadeInUp animate__delay-3s">
              Bienvenido al sitio</h2>
          </div>
          <div class="modal-footer d-flex justify-content-center">
            <button type="button" class="btn text-light animate__animated animate__fadeInUp animate__delay-4s"
              data-bs-dismiss="modal" style="background-color: #5c323e;">Iniciar</button>
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
          </div>
        </div>

      </div>
    </div>


    <nav class="navbar navbar-expand-lg navbar-dark sticky-top fondoColor" id="arriba">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="images/jlopezLogo.png" alt="Juan Francisco López Diseñador Fullstack">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon text-white"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="quiensoy.html" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Quien soy
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="quiensoy.html">Perfil</a></li>
                <li><a class="dropdown-item" href="#">Habilidades</a></li>
                <li><a class="dropdown-item" href="#">Mi fuerte</a></li>
                <li><a class="dropdown-item" href="#">Educación</a></li>
                <li><a class="dropdown-item" href="#">Experiencia</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="proyectos.html" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Proyectos
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item " href="proyectos.html">Multimedia</a></li>
                <li><a class="dropdown-item " href="#">Imagen</a></li>
                <li><a class="dropdown-item " href="#">Audio</a></li>
                <li><a class="dropdown-item " href="#">Video</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="galeria.html" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Galería
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="galeria.html">Multimedia</a></li>
                <li><a class="dropdown-item" href="#">Trabajos Recientes</a></li>
                <li><a class="dropdown-item" href="#">Clientes</a></li>
                <li><a class="dropdown-item" href="#">Experiencias</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contacto.html">Contacto</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="row">
      <div class="col-md-6">
        <div class="centrar">
          <img class="animate__animated animate__pulse animate__infinite animate__slower" src="images/astronaut.png"
            width="90%" alt="Diseñador web">
        </div>
      </div>
      <div class="col-md-6">
        <div class="text-center centrarV">
          <h1 class="super">Juan <span style="color: #E0E153; font-size: 8vw;">López</span></h1>
          <h2>Diseñador Fullstack</h2>
          <p class="lead">Portafolio de proyectos multimedia</p>
          <a class="btn btn-outline-success" href="https://api.whatsapp.com/send?phone=573112503262&amp;text=Hola!%20Habla%20con%20Juan%20López%20¿como%20le%20puedo%20ayudar?" target="_blank">
            Contactame
          </a>
        </div>
      </div>
      <!-- ACA MONTO MI VIDEO DE FONDO -->
      <video src="video/galaxy.mp4" autoplay muted loop></video>
    </div>

    <div class="container">
      <footer class="py-5">
        <div class="row">
          <div class="col-6 col-md-2 mb-3">
            <h3 class="text-white">Sobre mi</h3>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="quiensoy.html" class="nav-link p-0 text-white">Perfil</a></li>
              <li class="nav-item mb-2"><a href="quiensoy.html#habilidades" class="nav-link p-0 text-white">Habilidades</a></li>
              <li class="nav-item mb-2"><a href="quiensoy.html#mifuerte" class="nav-link p-0 text-white">Mi fuerte</a></li>
              <li class="nav-item mb-2"><a href="quiensoy.html#educacion" class="nav-link p-0 text-white">Educación</a></li>
              <li class="nav-item mb-2"><a href="quiensoy.html#experiencia" class="nav-link p-0 text-white">Experiencia</a></li>
              <li class="nav-item mb-2"><a href="quiensoy.html#reconocimientos" class="nav-link p-0 text-white">Reconocimientos</a></li>
            </ul>
          </div>

          <div class="col-6 col-md-2 mb-3">
            <h3 class="text-white">Proyectos</h3>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Multimedia</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Imagen</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Audiovisual</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Inteligencia Artificial</a></li>
            </ul>
          </div>

          <div class="col-6 col-md-2 mb-3">
            <h3 class="text-white">Galería</h3>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Multimedia</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Trabajos recientes</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Clientes</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Experiencias</a></li>

            </ul>
          </div>

          <div class="col-md-5 offset-md-1 mb-3">
            <h1 class="text-start" style="color: #E0E153;">
            <?php 
            if(isset($_POST['submit'])){
                $to = "pacinteractiva@gmail.com";
                $phone = $_POST['phone'];
                $subject = "Nuevo numero de cel de cliente jlopez website";
                $message = "El número de teléfono es: " . $phone;
                $headers = "From: pacinteractiva@gmail.com" . "\r\n" .
                "CC: pacinteractiva@gmail.com";
                mail($to,$subject,$message,$headers);
                echo "Tu teléfono ha sido enviado, pronto te contactaré, muchas gracias por tu tiempo";
            }
            ?>

            </h1>
          </div>
        </div>

        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
          <p>© 2023 Juan López designer, Inc. All rights reserved.</p>
          <ul class="list-unstyled d-flex">
            <li class="ms-3"><a class="link-light" href="https://www.facebook.com/juan.f.lopez.d/" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
            <li class="ms-3"><a class="link-light" href="https://twitter.com/pacgrafica" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
            <li class="ms-3"><a class="link-light" href="https://www.instagram.com/jlopez_fullstack/" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
            <li class="ms-3"><a class="link-light" href="https://www.linkedin.com/in/juan-francisco-lopez-designer/" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
            <li class="ms-3"><a class="link-light" href="https://www.youtube.com/@pacgrafica" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
            <li class="ms-3"><a class="link-light" href="https://www.behance.net/franpac" target="_blank"><i class="fa-brands fa-square-behance"></i></a></li>
            <li class="ms-3"><a class="link-light" href="https://github.com/pacgrafica" target="_blank"><i class="fa-brands fa-github"></i></a></li>
          </ul>
        </div>
      </footer>
    </div>

  </div>

  <!-- permite desplegar tooltip 2 sobre hover boton -->

  <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="mensaje"'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    })
  </script>
  <script>
    $(document).ready(function () {
      var silder = $(".owl-carousel");
      silder.owlCarousel({
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: false,
        items: 1,
        stagePadding: 20,
        center: true,
        nav: false,
        margin: 50,
        dots: true,
        loop: true,
        responsive: {
          0: { items: 1 },
          480: { items: 2 },
          575: { items: 2 },
          768: { items: 2 },
          991: { items: 3 },
          1200: { items: 4 }
        }
      });
    });
  </script>
  <!-- codigo intro de logo
      <script type="text/javascript">
      $(window).on('load', function () {
          $('#myModal').modal('show');
      });
    </script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
    crossorigin="anonymous"></script>
  <script>
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]')
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl))
  </script>
</body>

</html>