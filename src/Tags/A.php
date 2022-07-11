<?php 

namespace Edson\SolidPhp\Tags;

class A 
{

    public function render($href, $ancor)
    {
        return '<a href="'.$href.'">'.$ancor.'</a>';
    }

}