<?php
class equiposAsignados{
    public $equipo;
    public  function asignarEquipo($equipoEntregado){
     $this->equipo=$equipoEntregado;

    }
}

 $objEmpleado= new equiposAsignados();
 $objEmpleado->asignarEquipo("");

 echo $objEmpleado->equipo;
