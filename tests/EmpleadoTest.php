<?php
abstract class EmpleadoTest extends \PHPUnit\Framework\TestCase
{
   public function crear($nombre="Ramon", $apellido ="alberto",$dni = 1234567, $salario = 5600)
    {
       $ca = new \App\EmpleadoEventual($nombre, $apellido, $dni, $salario);
       return $ca;
    }

   public function testSePuedeCrearNombreVacio()
   {
      $this->expectException(\Exception::class);
      $c = $this->crear("");
   }

   public function testSePuedeCrearApellidoVacio()
   {
      $this->expectException(\Exception::class);
      $c = $this->crear("Juan","");
   }
   
}