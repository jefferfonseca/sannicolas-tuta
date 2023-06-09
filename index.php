<?php $menu = "Inicio";include 'includes/header.php';?>
<div class="parallax-container">
   <div class="parallax"><img src="./images/parallax/1.jpeg"></div>
   <div class="row" id="content">
       <div class="col s12 m12 l8">
           <div class="slideshow-container center">
                <?php
                //lee la carpeta de fotos y las carga automanticamente en el slide
                $directory = "./images/slider/";
                $dirint = dir($directory);
                while (($archivo = $dirint->read()) !== false) {
                    if ($archivo != "." && $archivo != "..") {
                        echo
                            "
                            <div class='mySlides fade'>
                            <img class='responsive-img' src='" . $directory . $archivo . "' height='330px' width='auto'>
                            </div>";
                    }
                }
                $dirint->close();
                ?>
           </div>
       </div>
       <div class="col s12 m12 l4 center">
           <div class="row" style="margin: 20px 0;">
               <div class="col s6 m3 l6">
                   <a href="http://sedboyaca.gov.co/"><img class="responsive-img borde-dorado"
                           src="./images\convenios\sedboyaca.jpg" width=250px height=180px></a>
               </div>
               <div class="col s6 m3 l6">
                   <a href="https://compucol.co/colegios/paipaiettomasvasquezr/"><img
                           class="responsive-img borde-dorado" src="./images\convenios\cc.jpg" width=250px
                           height=180px></a>
               </div>
               <div class="col s6 m3 l6">
                   <a href="https://www.uptc.edu.co/sitio/portal/"><img class="responsive-img borde-dorado"
                           src="./images\convenios\UPTC.jpg" width=250px height=180px></a>
               </div>
               <div class="col s6 m3 l6">
                   <a href="https://www.uniboyaca.edu.co/es"><img class="responsive-img borde-dorado"
                           src="./images\convenios\udb.jpg" width=250px height=280px></a>
               </div>
               <div class="col s12 m12 l12">
                   <a href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&hd=ietsannicolas.edu.co&sacu=1&flowName=GlifWebSignIn&flowEntry=AddSession"><img
                           class="responsive-im borde-dorado" src="./images\convenios\gmail.jpg" width=auto
                           height=100px></a>
               </div>
           </div>
       </div>
   </div>
</div>

<div class="section white">
   <div class="row center">
       <h2 class="center" id="content">Destacados</h2>
       <div class="col s12 m4 l4">
           <br>
           <a href="https://web.facebook.com/ietsannicolas" target="_blank">
               <div class="destacados">
                   <img src="./images/destacados/fb.png" alt="fb"
                       class="image  borde-dorado" width="100px">
                   <div class="overlay">
                       <div class="text">Facebook Oficial</div>
                   </div>
               </div>
           </a>
       </div>

       <div class="col s12 m4 l4">
           <br>
           <a href="https://www.instagram.com/ietsannicolas/" target="_blank">
               <div class="destacados">
                   <img src="./images/destacados/ig.png" alt="ig" 
                   class="image borde-dorado">
                   <div class="overlay">
                       <div class="text">Instagram</div>
               </div>
           </a>
           </div>
       </div>

       <div class="col s12 m4 l4">
           <br>
           <a href="live.php" target="_blank">
               <div class="destacados">
                   <img src="./images/destacados/Emisora.jpg" alt="Live"
                       class="image responsive-img borde-dorado">
                   <div class="overlay">
                       <div class="text">San Nico al Aire</div>
                   </div>
               </div>
           </a>
       </div>
   </div>
   <br>
   <br>
</div>

<div class="section">
   <div class="row">
       <h2 class="center white-text" id="content">Perfil del Egresado</h2>
       <div class="col s12 m8 l8">
           <br>
           <h5 class="container" align="justify">El egresado de la Institución Educativa San Nicolás - Tuta se desempeñara en la sociedad demostrando su liderazgo, sentido de pertenencia, tolerancia, y respeto, siendo competente académica y laboralmente.</h5>
           <br>
       </div>
       <div class="container col s12 m4 l4 green-text center">
           <img src="./images/slider/2.jpg" alt="Especialidades tovaro" class="borde-dorado " width=80% >
       </div>
   <br>
   <br>
   </div>
</div>


<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.978313165623!2d-73.22735148532549!3d5.716261833606349!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e6a6e896ba57b19%3A0xa2950f5e2a24f373!2sInstituci%C3%B3n%20Educativa%20San%20Nicolas%2C%20Sede%20Sider%C3%BArgica!5e0!3m2!1ses!2sco!4v1680283187306!5m2!1ses!2sco" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
<?php include 'includes/footer.php';?>