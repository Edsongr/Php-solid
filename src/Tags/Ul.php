<?php 

namespace Edson\SolidPhp\Tags;

class Ul 
{

    public function render($content)
    {
        return '<ul>'. $content .'</ul>';
    }

}