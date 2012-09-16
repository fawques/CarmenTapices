<?php
// Título de la página, se muestra en <title> y en el cuerpo de la página con <h2>
$title = "CarmenTapices";

require_once("cabecera.inc");
?>
<div id="page_content_left">
            <div class="title">
            Bienvenido a CarmenTapices
            </div>
            <div class="content_text">
              <p>¿Quieres crear tu propio estilo en tu casa? ¿Ser una persona única, creativa, buscando la diferencia con los demás? ¡Estás en la página apropiada!</p>
              <p>En CarmenTapices puedes conseguir productos exclusivos y originales. ¡Nadie en el mundo tendrá un tapiz como el tuyo!          </p>
              <p>¿No sabes qué regalar a tus amigos o familiares? Un tapiz para decorar sus estancias es la elección apropiada. Cualquiera que lo vea lo admirará.</p>
              <p>Nuestros tapices están completamente hechos a mano, de forma artesanal y personalizada. ¡Tú decides cómo combinar los colores, texturas y modelos para que se ajuste a tu hogar y a tu personalidad!</p>
              
          </div>
            <div class="content_text">
            <img src="images/illustr2.jpg" width="130" height="100"  alt="pic" title="pic" class="pic" />
            <p>Además, disponemos de un abanico de materiales de la mejor calidad con los que trabajar y crear los mejores tapices.</p>
              <p>Si quieres ver algunos ejemplos de nuestro trabajo, visita <a href="gallery/gallery1.html" class="link">nuestra galería</a>.</p> 
          </div>
            <div class="title">
            ¿quién soy?
            </div>
            <div class="content_text">
            Si quieres saber más sobre mí, visita mi <a href="aboutus.html" class="link">página de presentación</a>.</div>
</div>
<?php

require_once("mini_galeria.inc");

require_once("pie.inc");
?>
