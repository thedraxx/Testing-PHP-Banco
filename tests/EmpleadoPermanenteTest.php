<?php
namespace App;
require_once 'EmpleadoTest.php';


class EmpleadoPermanenteTests extends \PHPUnit\Framework\TestCase
{
    public function constr( $nombre = "Juan", $apellido = "Gonzalez", $dni = "20333555", $salario = "8000")
    {
        $r = new \App\EmpleadoPermanente($nombre, $apellido, $dni, $salario,);
        return $r;
    }

     public function testFech()
    {
        $f = $this->constr(new DateTime('2020-12-9'));
        $this->assertEquals("2020-12-09 00:00:00", $f->getFechaIngreso()->format('Y-m-d H:i:s'));
        $f = $this->constr(new DateTime('2020-05-07'));
        $this->assertEquals("2020-05-07 00:00:00", $f->getFechaIngreso()->format('Y-m-d H:i:s'));
    }
}
