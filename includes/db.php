<?php

session_name("loginUsuario");
//asigno un nombre a la sesión para poder guardar diferentes datos
session_start();
// inicio la sesión

// Conexión Local
// $host='localhost';
// $usuariodb='root';
// $passwdb='';
// $nombredb='tovarodb';

// $cx = new PDO('mysql:host=localhost;dbname='.$nombredb, $usuariodb, $passwdb);

// $query = 'SELECT * FROM user';
// $result = $cx->query($query);
// foreach($result as $row){
//    print_r($row);
// }
// $cx = NULL;



//Conexion remota
$host='host17.latinoamericahosting.com:3306';
$usuariodb='tovaroed_dx';
$passwdb='1049629422SantiF*';
$nombredb='tovaroed_dx1';
//obj de cx
$cx = new PDO('mysql:host=localhost;dbname='.$nombredb, $usuariodb, $passwdb);

/*Query Executer 
$query = 'SELECT * FROM user';
$result = $cx->query($query);
foreach($result as $row){
  print_r($row);
}
$cx = NULL;
?>