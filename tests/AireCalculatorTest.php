<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Utils\AireCalculator;

class AireCalculatorTest extends TestCase
{
    public function testSomething(): void
    {
        $this->assertTrue(true);
    }

    /**@test triangle*/
    public function test_calcul_surface_tri():void
    {
        $aireCalculator  = new AireCalculator();
        $longueur=5;
        $hauteur =4;
        $resultat = $aireCalculator->getAireTriangle($longueur,$hauteur);
        $this->assertEquals(10,$resultat);
    }

    /**@test parallelogramme*/
    public function test_calcul_surface_para():void
    {
        $aireCalculator  = new AireCalculator();
        $longueur=5;
        $hauteur =4;
        $resultat = $aireCalculator->getAirePara($longueur,$hauteur);
        $this->assertEquals(20,$resultat);
    }

    /**@test cercle*/
    public function test_calcul_surface_cercle():void
    {
        $aireCalculator  = new AireCalculator();
        $rayon=5;
        $resultat = $aireCalculator->getAireCercle($rayon);
        $this->assertEquals(78.5,$resultat);
    }
}
