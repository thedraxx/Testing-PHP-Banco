<?php
namespace App;
require_once 'EmpleadoTest.php';

//La clase debe heredar de la clase Empleado:
class EmpleadoEventualTest extends EmpleadoTest
{
    public function testcomision()
    {
     $r = new \ app\EmpleadoPermanente(10);
     $this -> assertEquals(10, $r ->calcularantiguedad());
      return  $this -> calcularantiguedad()%;
    }
   
   
}
