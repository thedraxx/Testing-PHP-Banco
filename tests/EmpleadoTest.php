<?php
   //Test EmpleadoEventualTest
abstract class EmpleadoTest extends \PHPUnit\Framework\TestCase
{
   public function crearEmpleadoEventual($nombre="Ramon", $apellido ="alberto",$dni = 1234567, $salario = 5600, $montos = [1000, 1000])
    {
       $c = new \App\EmpleadoEventual($nombre, $apellido, $dni, $salario,$montos);
       return $c;
    }

   // Test: si intento construir un empleado con el nombre vacío, lanza excepción.
   public function testSePuedeCrearNombreVacio()
   {
      $this->expectException(\Exception::class);
      $this->crearEmpleadoEventual("");
   }

   // Test: si intento construir un empleado con el apellido vacío, lanza excepción.
   public function testSePuedeCrearApellidoVacio()
   {
      $this->expectException(\Exception::class);
      $this->crearEmpleadoEventual("Juan","");
   }

   // Test: si intento construir un empleado con el nombre vacío, lanza una excepción.
   public function testSePuedeCrearDniVacio()
   {
      $this->expectException(\Exception::class);
      $this->crearEmpleadoEventual("Juan","alberto",empty($dni));
   }

   // Test: si intento construir un empleado con el salario vacío, lanza una excepción.
   public function testSePuedeCrearSalarioVacio()
   {
      $this->expectException(\Exception::class);
      $this->crearEmpleadoEventual("Juan","alberto",1234567,"");
   }

   // Test: si intento construir un empleado con el DNI vacío, lanza una excepción.
   public function testSePuedeCrearDNIConCaracteresNoNumericos()
   {
      $this->expectException(\Exception::class);
      $this->crearEmpleadoEventual("Juan","alberto","1234567a");
   }

   //Test: al construir un empleado si no se especifica el sector, el método getSector devolvera la cadena “No especificado”.
   public function testGetSector()
   {
      $e = $this->crearEmpleadoEventual();
      $this->assertEquals("No especificado", $e->getSector());
      $p = $this->crearEmpleadoEventual();
      $this->assertEquals("No especificado", $p->getSector());
   }
}
?>