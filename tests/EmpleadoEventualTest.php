<?php
require_once 'EmpleadoTest.php';
class EmpleadoEventualTest extends EmpleadoTest
{
    // Test: Se calcula comision. 
    public function testSeCalculaComision()
    {
        $e = $this->crearEmpleadoEventual();
        // El 5% de cada monto dividido la cantidad de montos (ventas)
        $this->assertEquals((2000/2) * 0.05, $e->calcularComision());
    }
}
?>