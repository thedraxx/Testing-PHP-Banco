<?php

class EmpleadoPermanenteTests extends \PHPUnit\Framework\TestCase
{

    public function crearemp($fingreso = null, $nombre="Ramon", $apellido ="alberto",$dni = 1234567, $salario = 5600)
    {
        $r = new \App\EmpleadoPermanente($nombre, $apellido, $dni, $salario, $fingreso);
        return $r;
    }
     //se calcula la fecha ingreso
    public function testCalculoFechaIngreso()
    {
        $r = $this->crearemp(new DateTime('2020-06-08'));
        $this->assertEquals("2020-06-08 00:00:00", $r->getFechaIngreso()->format('Y-m-d H:i:s'));
        $r = $this->crearemp(new DateTime('2020-03-10'));
        $this->assertEquals("2020-03-10 00:00:00", $r->getFechaIngreso()->format('Y-m-d H:i:s'));
    }
//se calcula la comision
    public function testCalcularComision()
    {
        $r = $this->crearemp(new DateTime('2020-06-08'));
        $this->assertEquals("1%", $r->calcularComision());
        $r = $this->crearemp(new DateTime('2010-06-08'));
        $this->assertEquals("11%", $r->calcularComision());
    }
// se calcula el ingreso total
    public function testCalcularIngresoTotal()
    {
        $r = $this->crearemp(new DateTime('2020-06-08'));
        $this->assertEquals( 5600 + (5600*1) / 100, $r->calcularIngresoTotal());

    }
//se calcula la antigüedad
    public function testCalcularAntiguedad()
    {
        $r = $this->crearemp(new DateTime('1998-06-08'));
        $this->assertEquals("23", $r->calcularAntiguedad());
        $r = $this->crearemp(new DateTime('2010-06-08'));
        $this->assertEquals("11", $r->calcularAntiguedad());
    }
// se intenta obtener la fecha sin tenerla
    public function testobtenerfechsintenerla()
    {
        $r = $this->crearemp();
        $h = new DateTime();
        $this->assertEquals($h->format('Y-m-d'), $r->getFechaIngreso()->format('Y-m-d'));
        $this->assertEquals(0, $r->calcularAntiguedad());
    }
//se prueba contruir un empleado con fecha posterior
    public function testConstructConFechaPosterior()
    {
        $this->expectException(\Exception::class);
        $r = $this->crearemp(new DateTime('2023-09-03'));
    }


}


?>