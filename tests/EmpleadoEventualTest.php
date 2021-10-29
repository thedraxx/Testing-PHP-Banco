<?php
require_once 'EmpleadoTest.php';
class EmpleadoEventualTest extends EmpleadoTest
{
    // Test: Se calcula comision. 
    public function testSeCalculaComision()
    {
        $c = $this->crearEmpleadoEventual();
        // El 5% de cada monto dividido la cantidad de montos (ventas)
        $this->assertEquals((2000/2) * 0.05, $c->calcularComision());
    }

    // Test: Se calcula Ingreso Total. 
    public function testCalculaIngresoTotal()
    {
        $c = $this->crearEmpleadoEventual();
        $this->assertEquals($c->getSalario() + $c->calcularComision(), $c->calcularIngresoTotal());
    }

    // Test: Se crea un Constructor con Venta = 0. 
    public function testCalculaConstructConVenta0()
    {
       $this->expectException(\Exception::class);
       $c = $this->crearEmpleadoEventual("Ramon", "alberto", 1234567, 5600, [1000, 0]);
    }

}
?>