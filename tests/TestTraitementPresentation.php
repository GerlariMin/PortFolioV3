<?php

require_once(dirname(__FILE__)."../resources/mustache/Render.php");
use PHPUnit\Framework\TestCase;

class TestTraitementPresentation extends TestCase
{
    public function testAge()
    {
        $render = new Render();
        $traitement = new Traitement_Presentation($render);
        $this->assertEquals(24, $traitement->traitement_age("27/03/1997"));
    }
}
