<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RestFinder</title>
  <link rel="stylesheet" href="estilo.css">
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<header class="header">

  <?php session_start();
  if (isset($_SESSION['username'])) {
    echo 'submitForm()';
  }
  ?>

  <form>

    <!-- Desplegable -->
    <button class="desplegable" type="button" data-bs-toggle="dropdown" id="dropdown">
      <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-border-width" viewBox="0 0 16 16">
        <path d="M0 3.5A.5.5 0 0 1 .5 3h15a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-2zm0 5A.5.5 0 0 1 .5 8h15a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1zm0 4a.5.5 0 0 1 .5-.5h15a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z" />
      </svg>
      <span class="caret"></span>
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="reserva.html">Reserva de restaurantes</a></li>
      <li><a class="dropdown-item" href="contacto.html">Contacto</a></li>
      <li><a class="dropdown-item" href="nosotros.html">¿Quiénes somos?</a></li>
    </ul>


    <!-- Logo -->
    <a title="RestFinder" href="index.php"><img src="image.png" alt="Logo" /></a>

    <!-- Buscador -->
    <input type="text" value="" id="search" onchange="openPage()" class="imput text-white" placeholder=" Buscar restaurantes" >
        <script src="buscador.js"></script>
        
    <script>


      function submitForm() {

        document.getElementById("inicio").style.display = "none";
        document.getElementById("registro").style.display = "none";


        var btn = document.createElement("BUTTON");
        const iniciobtn = document.getElementById("inicio");

        const registrobtn = document.getElementById("registro");


        var header = document.getElementsByTagName("header")[0];

        
        btn.innerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
        </svg>
        Perfil
        <span class="caret"></span>
        
    `;
    

        header.appendChild(btn);
        event.preventDefault();
      }


   /*   function submitForm() {
    document.getElementById("inicio").style.display = "none";
    document.getElementById("registro").style.display = "none";

    var btn = document.createElement("BUTTON");
    btn.innerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z"/>
        </svg>
        Perfil
        <span class="caret"></span>
    `;
    btn.setAttribute("class", "perfil");
    btn.setAttribute("type", "button");
    btn.setAttribute("data-bs-toggle", "dropdown");
    btn.setAttribute("id", "dropdown");

    var header = document.getElementsByTagName("header")[0];
    header.appendChild(btn);
    
    var ul = document.createElement("UL");
    ul.setAttribute("class", "dropdown-menu");

    var li1 = document.createElement("LI");
    li1.setAttribute("class", "p1");
    li1.innerHTML = `<a class="dropdown-item" href="">Nombre de usuario: <?php echo  $_SESSION['USUARIO']; ?> </a>`;
    ul.appendChild(li1);

    var li2 = document.createElement("LI");
    li2.setAttribute("class", "p2");
    li2.innerHTML = `<a class="dropdown-item" href="">Nombre real: <?php echo  $_SESSION['NOMBRE']; ?></a>`;
    ul.appendChild(li2);

    header.appendChild(ul);
    event.preventDefault();
}*/


      function cerrarsesion() {
        <?php
        session_destroy();
        ?>
      }
    </script>


    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Icono Buscador -->
    <button id="" class="botonbuscador"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="19" fill="white" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
      </svg></button>

    <!-- Icono Twitter -->
    <button class="iconoseparador"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-twitter" viewBox="0 0 16 16">
        <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
      </svg></button>

    <!-- Icono Facebook -->
    <button class="icono"> <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-youtube" viewBox="0 0 16 16">
        <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
      </svg></button>

    <!-- Icono Instagram -->
    <button class="icono"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-instagram" viewBox="0 0 16 16">
        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
      </svg></button>

    <!-- Iniciar Sesion -->
    <button id="inicio" class="btn btn-secondary">
      <a style="color:white" ; href="iniciar_sesion.php">Iniciar sesión</a>
    </button>

    <!-- Registro -->
    <button id="registro" class="btn btn-secondary">
      <a style="color:white" ; href="registro.php">Registrar</a>
    </button>

    <script>
      window.onload = function() {
        <?php if (isset($_SESSION['username'])) { ?>
          submitForm();
        <?php } ?>
      }
    </script>

</header>

<body>

  <br><br>
  <div>
    <h2>
      <center>Presentacion de servicios de la página</center>
    </h2>
  </div>

  <!-- CONTENEDOR DE DIVS -->
  <div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom"></h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">

      <!-- DIV IZQUIERDO -->
      <div class="feature col">
        <center>
          <div class="iconoindex">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
              <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
              <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
            </svg>
          </div>
          <p> </p>
          <h3 class="fs-2">Elige tu restaurante y mesa</h3>
          <p>Elige tu restautante deseado, así como la mesa que prefieras.</p>
      </div>
      </center>

      <!-- DIV CENTRO -->
      <div class="feature col">
        <center>
          <div class="iconoindex">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
              <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
              <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
            </svg>
          </div>
          <p> </p>
          <h3 class="fs-2">Elige la hora</h3>
          <p>Elige hora entre todas las disponibles en tiempo real.</p>


          </a>
      </div>
      </center>

      <!-- DIV DERECHO -->
      <div class="feature col">
        <center>
          <div class="iconoindex">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-bar-chart" viewBox="0 0 16 16">
              <path d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5v12h-2V2h2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z" />
            </svg>
          </div>
          <p> </p>
          <h3 class="fs-2">Reserva online</h3>
          <p>Hazlo desde nuestra web totalmente online para mayor comodidad.</p>
      </div>
      </center>

    </div>
  </div>

</body>

<!-- Footer -->
<footer class="footer">
  <!-- Grid container -->
  <div class="container p-4">


    <button onclick="cerrarsesion()">Cerrar Sesion</button>



    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>¡Suscríbete a nuestra newsletter!</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input placeholder="Email" type="email" id="form5Example21" class="form-control" />
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button id="submit" onclick="submitForm()" class="btn btn-outline-light mb-4">
              Submit
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <center>
        <p>
          RestFinder AVDA Europa, Parcela 2-5. Polígono industrial Las Salinas, 30840, Alhama de Murcia, Murcia. ESPAÑA.
        </p>
      </center>
    </section>
    <!-- Section: Text -->


    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3">
      © 2022 RestFinder
      <p>Bienvenido <?php echo  $_SESSION['username']; ?></p>

    </div>

    <!-- Copyright -->
</footer>


</html>