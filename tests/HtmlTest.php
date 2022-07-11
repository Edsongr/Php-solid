<?php

namespace Edson\SolidPhp;

class HtmlTest extends \PHPUnit\Framework\TestCase
{

    public function testTagImages()
    {

        $html = new Html;
        $img  = $html->img('images/photo.jpg');

        $this->assertEquals('<img src="images/photo.jpg">', $img);
    }

    public function testCriaUmLinkComImagemComoAncora()
    {

        $html = new Html;
        $img  = $html->img('images/photo.jpg');
        $link = $html->a('http://seusite.com/perfil', $img);

        $this->assertEquals('<a href="http://seusite.com/perfil"><img src="images/photo.jpg"></a>', $link);
    }

    public function testCriaListasUl()
    {

        $html = new Html;
        $list  = $html->ul('<li>Edson</li>');

        $this->assertEquals('<ul><li>Edson</li></ul>', $list);
    }



}