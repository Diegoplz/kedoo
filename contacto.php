<!doctype html>
<html lang="es">

<?php include("includes/head.php") ?>

<body>
  <section class="hero">
    <?php include("includes/header.php") ?>
    <div class="hero-copy">
      <h1>Contacto</h1>
      <p>¿Tienes alguna duda, sugerencia o quieres formar<br class="d-none d-md-block"> parte de Kedoo?</p>
      <p>¡Escríbenos! Estamos aquí para ayudarte</p>
    </div>
    <div class="contact-strip">
      <div class="row g-0 align-items-center">
        <div class="col-6 col-lg-3 contact-item">
          <div class="contact-icon"><i class="fa-regular fa-envelope"></i></div>
          <h6>EMAIL</h6>
          <p>hola@kedoo.com</p>
        </div>
        <div class="col-6 col-lg-3 contact-item">
          <div class="contact-icon"><i class="fa-solid fa-phone-volume"></i></div>
          <h6>TELÉFONO</h6>
          <p>+34 999 99 99 99</p>
        </div>
        <div class="col-6 col-lg-3 contact-item">
          <div class="contact-icon"><i class="fa-solid fa-location-dot"></i></div>
          <h6>NUESTRA OFICINA</h6>
          <p><u>C. del Conde de Aranda, 9</u><br>50004, Zaragoza</p>
        </div>
        <div class="col-6 col-lg-3 contact-item">
          <div class="contact-icon"><i class="fa-regular fa-clock"></i></div>
          <h6>HORARIO</h6>
          <p>L-V · 09:00 – 17:00</p>
        </div>
      </div>
    </div>
  </section>
  <section class="message-section">
    <div class="container-fluid px-0">
      <div class="row align-items-center g-5">
        <div class="col-lg-5">
          <h2>Cuéntanos<br>qué necesitas</h2>
          <p class="intro">Ya sea para resolver una duda, darnos tu opinión o proponer una colaboración, estaremos
            encantados de leerte.</p>
        </div>
        <div class="col-lg-7">
          <form class="contact-form"><label for="name">Nombre</label><input id="name" class="form-control"
              placeholder="Tu nombre" required><label for="email">Correo electrónico</label><input id="email"
              type="email" class="form-control" placeholder="Tu correo electrónico" required><label
              for="message">Mensaje</label><textarea id="message" class="form-control"
              placeholder="Escribe tu mensaje..." required></textarea><button class="btn-purple" type="submit">Enviar
              mensaje</button></form>
        </div>
      </div>
    </div>
  </section>
  <section class="community">
    <h2>Únete a nuestra comunidad</h2>
    <p>Descubre planes, conoce gente y vive experiencias<br class="d-none d-md-block"> únicas con Kedoo</p><a
      class="btn-purple" href="#">Registrarme ahora <i class="fa-solid fa-arrow-right ms-2"></i></a>
  </section>
  <?php include("includes/footer.php");?>
  <script>document.querySelectorAll('form').forEach(f => f.addEventListener('submit', e => e.preventDefault()));</script>
</body>
 
</html>