


<?php
/*  include('includes/db.php');
$query = "UPDATE Visitas SET Contador = Contador + 1 WHERE Id = '1'";
$result = $cx->query($query);

$query = "SELECT * FROM Visitas";
$result = $cx->query($query);
$cx = NULL;
$row = NULL;
foreach($result as $row){
echo "<h4 class='center-align'>Número de visitas: 0000" . $row['Contador'] . "</h4>";
}*/

?>


<!--JavaScript at end of body for optimized loading-->
<script type="text/javascript" src="js/materialize.min.js"></script>
<!-- Inicializa los JavaScript -->
<script>
   document.addEventListener("DOMContentLoaded", function () {
       M.AutoInit();
   });

   //js fixed header
   window.onscroll = function () {
       myFunction();
   };

   var header = document.getElementById("myHeader");
   var logo = document.getElementById("logo");
   var sticky = header.offsetTop;

   function myFunction() {
       if (window.pageYOffset > sticky) {
           header.classList.add("sticky");
           logo.classList.remove("hide");
       } else {
           header.classList.remove("sticky");
           logo.classList.add("hide");
       }
   }

   // efecto parallax
   document.addEventListener("DOMContentLoaded", function () {
       var elems = document.querySelectorAll(".parallax");
       var instances = M.Parallax.init(elems);
   });

   // js Slider
   var slideIndex = 0;
   showSlides();

   function showSlides() {
       var i;
       var slides = document.getElementsByClassName("mySlides");
       for (i = 0; i < slides.length; i++) {
           slides[i].style.display = "none";
       }
       slideIndex++;
       if (slideIndex > slides.length) {
           slideIndex = 1;
       }
       slides[slideIndex - 1].style.display = "block";
       setTimeout(showSlides, 2000); // Change image every 2 seconds
   }

</script>

<footer class="page-footer">
   <div class="container">
       <div class="row">
           <!-- Escudo del colegio -->
           <div class="col s12 m4 ">
           </div>

           <!-- Redes Sociales -->
           <div class="col s12 m4 center">
               <a href="https://web.facebook.com/ietsannicolas" target="_blank">
                <img src="./images/redes/fb.png" style="border-radius: 50%; width: 90px; height: 50px;" 
                alt="@ietsannicolas" /></a>
           </div>
           <!-- Contacto -->
           <div class="col s12 m4">
               <h4><b>Contáctanos</b></h4>
               <span>
                   <h5><b>Celular:</b></h5>
                   +57 321 222 2082
                   <br />
                   <h5><b>Dirección:</b></h5>
                    Tuta, Boyacá, Colombia
                   <br />
                   <br />
               </span>
           </div>
           </div>
   </div>
       <div class="footer-copyright valign-wrapper">
         <h6>© 2023 | <b>Design:</b> <a href="https://jefferfonseca.github.io/curriculum-vitae/inicio" target="_blank">&lt;Ing. Jeferson Fonseca Soto&gt;</a></h6>
       </div>
   
</footer>
