<?php
abstract class EmpleadoTest extends \PHPUnit\Framework\TestCase
{
   public function crear($nombre="", $apellido ="alberto",$dni = 1234567, $salario = 5600, $sector = "no importa" )
   {
      $ca = new \App\Empleado($nombre, $apellido, $dni, $salario, $sector);
      return $ca;
   }

   public function testSePuedeCrearNombreVacio()
   {
      $this->expectException(\Exception::class);
      $c = $this->crear();
   }
   public function testSePuedeCrearApellidoVacio()
   {
      $this->expectException(\Exception::class);
      $c = $this->crear("","");
   }
}