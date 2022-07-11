<?php 

namespace Edson\SolidPhp\Tags;

class Img 
{

    public function render($src)
    {
        
        return '<img src="'.$src.'">';
    }

}