<?php
abstract class EmpleadoTest extends \PHPUnit\Framework\TestCase
{
   public function crear($nombre="Ramon", $apellido ="alberto",$dni = 1234567, $salario = 5600,$sector = "No especificado")
    {
       $ca = new \App\EmpleadoEventual($nombre, $apellido, $dni, $salario,$sector);
       return $ca;
    }

   public function testSePuedeCrearNombreVacio()
   {
      $this->expectException(\Exception::class);
      $this->crear("");
   }

   public function testSePuedeCrearApellidoVacio()
   {
      $this->expectException(\Exception::class);
      $this->crear("Juan","");
   }

   public function testSePuedeCrearDniVacio()
   {
      $this->expectException(\Exception::class);
      $this->crear("Juan","alberto",empty($dni));
   }

   public function testSePuedeCrearSalarioVacio()
   {
      $this->expectException(\Exception::class);
      $this->crear("Juan","alberto",1234567,empty($salario));
   }

   public function testSePuedeCrearDNIConCaracteresNoNumericos()
   {
      $this->expectException(\Exception::class);
      $this->crear("Juan","alberto","1234567a");
   }
   
   public function testAlEnviarUnSectorNoEspecificadoDevuelveMensaje()
   {
      $c = $this->crear();
      $this-> assertEquals("No especificado", $c-> setSector("No especificado"));
      $this-> assertEquals("No especificado", $c-> getSector());
   }

}