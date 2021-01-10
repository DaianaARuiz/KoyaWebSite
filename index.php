
    <?php 
    include "templates/header.php";
    ?>
    <main>
      <section class="home" id="home">
        <div class="contenedor">
          <div class="home__video">
                <video autoplay muted loop>
                    <source src="img/video.mp4" type="video/mp4" />
                </video>
          </div>
          
          <div class="home__contenido">         
              <div class="home_title">
                <h3>HACIENDO REAL LA<br/>TRANSFORMACIÓN DIGITAL</h3>
                <p>Nuestro trabajo es dar a conocer el tuyo</p>
              </div>
              <div class="home__btn">
                <a href="https://koyaweb.com.ar/servicios.php" class="btn">Conoce más</a>
            </div>
          </div>
         
          <div class="scrollDown">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
      </section>
      <section class="home-informacion" id="home-informacion">
        <div class="contenedor">
          <div class="hidden home-informacion__parrafos">
            <h3>Nosotros</h3>
            <p>
              KoyaWeb es un emprendimiento argentino que surge en base a la pasión por la tecnología y el desarrollo. Somos un grupo de trabajo joven conformado por programadores. Amamos lo que
              hacemos y te invitamos a conocernos.
            </p>
            <hr/>
            <h3>¿Qué hacemos?</h3>
            <p>
              Llevamos a cabo Sitios Web con las últimas tendencias en diseño y programación para clientes pequeños y grandes.
              Trabajamos de manera conjunta con nuestros clientes para lograr una rápida y eficaz solución a cada problema, asesorando y coordinando hasta el último detalle.
              Tambien, ofrecemos mantenimiento a partir de nuestros proyectos.
              <a href="https://koyaweb.com.ar/servicios.php">¿Queres saber más?</a>
            </p>
            <hr/>
            <h3>¿Por qué lo hacemos?</h3>
            <p>
              Porque entendemos que estamos en una época en la que lo digital está por encima de todo lo demás, y esto es algo imparable. 
              En este contexto, puedes elegir que tu empresa se apunte a comenzar un proceso de digitalización y aprovechar así las enormes ventajas con las que cuenta, o puedes esperar a que los clientes se vayan a la competencia que sí ha sabido adaptarse a la evolución de la digitalización.
              Nuestro principal objetivo es que potencies tu empresa con la ayuda de la web, y también, de nosotros.
            </p>
            <br/>
          </div>
        </div>
      </section>
      
    </main>
    <?php 
      include "templates/wpp.php";
      include "templates/footer.php";
    ?>
    <script src="https://kit.fontawesome.com/2d78e61024.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/index.js"></script>
  </body>
</html>
