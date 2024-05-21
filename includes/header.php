<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="description" content="Sitio Web Oficial de la Institución Educativa Técnica San Nicolás">
   <title>IET San Nicolás - Tuta</title>
   <link rel="icon" href="./images/Escudo.png" type="image/png">
   <link rel="stylesheet" href="css/header.css">
   <link rel="stylesheet" href="css/slider.css">
   <link rel="stylesheet" href="css/style.css">
    <!--Import Google Icon Font-->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <!--Import Google Font-->
   <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
   <header>
       <!-- <div class="navbar-fixed">  Pega el menu a la parte de arriba -->
       <div class="navbar">
           <div class="row header">
               <div class="col s12 m1 l1 center"> <img src="./images\Escudo.png" alt="sanicolas" width=auto height=90px>
               </div>
               <div class="col s12 m10 l4">
                   <h5 class="center">Institución Educativa Técnica<br>San Nicolás - Tuta</h5>
                   <p class="center">"Queremos y podemos"</p>
               </div>
           </div>
           <nav class=" green darken-3" id="myHeader">
               <div class="nav-wrapper">
                <a class="hide" id="logo"><img style="padding: 10px;" src="./images/Escudo.png" 
                alt="sannicolas" width=auto height=100%></a>
                   <a href="#" data-target="menu-responsive" class="sidenav-trigger right">
                       <i class="material-icons">menu</i>
                   </a>
                   <!--lista de menus de navegación-->
                   <ul class="right hide-on-med-and-down">
                       <li class="<?php if ($menu == "Inicio") {echo "active";}?>"><a href="index.php">Inicio</a></li>
                       <li><a href="#" class="dropdown-trigger"data-target="institucion">Institución
                               <i class="material-icons right">arrow_drop_down</i>
                           </a>
                       </li>
                       <li class="<?php if ($menu == "TOVARO") {echo "active";}?>"><a href="live.php" target="_blank">Radio</a></li>
                       <li class="<?php if ($menu == "Especialidades") {echo "active";}?>"><a href="#" class="dropdown-trigger"
                               data-target="esp">
                               Especialidades
                               <i class="material-icons right">arrow_drop_down</i>
                           </a>
                       </li>
                       <li><a href="https://compucol.co/colegios/tutaiesannicolas/"  target="_blank">Sistema de Notas</a></li>
                       <li class="<?php if ($menu == "Contacto") {echo "active";}?>"><a href="contacto.php">Contáctenos</a></li>
                   </ul>
               </div>
           </nav> 
<!--Submenus NO responsives -->
           <!-- Lista de Institución -->
           <ul id="institucion" class="dropdown-content" style="background-color: transparent;">
               <li></li>
               <li class="li"><a   href="nosotros.php" class="white-text">Reseña Histórica</a></li>
               <li class="li"><a href="simbolos.php" class="white-text">Simbolos Institucionales</a></li>
               <li class="li"><a href="sedes.php" class="white-text">Sedes</a></li>
               <li class="li"><a href="docentes.php" class="white-text">Docentes</a></li>
               <li class="li"><a href="gobierno-escolar.php" class="white-text">Gobierno Escolar</a></li>
               <li class="li"><a href="proyectos.php" class="white-text">Proyectos</a></li>
               <li class="li"><a href="https://tovaro2020.wixsite.com/psicoorientacion" class="white-text" target="_blank">Sicoorientación</a></li>
           </ul>
           <!-- Lista de especialidades -->
           <ul id="esp" class="dropdown-content" style="background-color: transparent;">
               <li></li>
               <li class="li"><a href="redes.php" class="white-text">Redes y sistemas</a></li>
               <li class="li"><a href="salud.php" class="white-text">Salud</a></li>
               <li class="li"><a href="turismo.php" class="white-text">Turismo</a></li>
           </ul>
       <!-- Submenus responsives -->
            <!-- Lista de Institución -->
            <ul id="institucion-responsive" class="dropdown-content" style="background-color: transparent;">
            <li></li>
               <li class="li"><a   href="nosotros.php" class="white-text">Reseña Histórica</a></li>
               <li class="li"><a href="simbolos.php" class="white-text">Simbolos Institucionales</a></li>
               <li class="li"><a href="sedes.php" class="white-text">Sedes</a></li>
               <li class="li"><a href="docentes.php" class="white-text">Docentes</a></li>
               <li class="li"><a href="gobierno-escolar.php" class="white-text">Gobierno Escolar</a></li>
               <li class="li"><a href="proyectos.php" class="white-text">Proyectos</a></li>
               <li class="li"><a href="https://tovaro2020.wixsite.com/psicoorientacion" class="white-text" target="_blank">Sicoorientación</a></li>
         </ul>

           <!-- Lista de especialidades -->
           <ul id="esp-responsive" class="dropdown-content" style="background-color: transparent;">
           <li></li>
               <li class="li"><a href="redes.php" class="white-text">Redes y sistemas</a></li>
               <li class="li"><a href="salud.php" class="white-text">Salud</a></li>
               <li class="li"><a href="turismo.php" class="white-text">Turismo</a></li>
          </ul>

       <!-- Sidenav -->
           <ul class="sidenav" id="menu-responsive">
               <li class="<?php if ($menu == "Inicio") {echo "active";}?>"><a href="index.php">Inicio</a></li>
               <li class="<?php if ($menu == "Institución") {echo "active";}?>"><a href="#" class="dropdown-trigger"
                       data-target="institucion-responsive">
                       Institución
                       <i class="material-icons right">arrow_drop_down</i>
                   </a>
               </li>
               <li class="<?php if ($menu == "TOVARO") {echo "active";}?>"><a href="live.php" target="_blank">Radio</a></li>
               <li class="<?php if ($menu == "Especialidades") {echo "active";}?>"><a href="#" class="dropdown-trigger"
                       data-target="esp-responsive">
                       Especialidades
                       <i class="material-icons right">arrow_drop_down</i>
                   </a>
               </li>
               <li><a href="https://compucol.co/colegios/tutaiesannicolas/" target="_blank">Sistema de Notas</a></li>
               <li class="<?php if ($menu == "Contacto") {echo "active";}?>"><a href="contacto.php">Contáctenos</a></li></ul>
       </div>
   </header>