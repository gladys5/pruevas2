<?php 
$servidor="localhost";
$usuario="root";
$contrasenia="";

try{
    $conexion=new PDO("mysql:host=$servidor;dbname=resguardos",$usuario.$contrasenia);
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql="INSERT INTO 'redguardos'('nombre')VALUES(NULL,'name')";
    $conexion->exec($sql);
    echo 'todo bien ';
}catch( PDOException $error){
    echo "fallo la coneccion" .$error;

   }
