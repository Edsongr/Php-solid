<?php

namespace Edson\SolidPhp;

class Html 
{

    public function __call(string $name, array $arguments)
    {
        $class = '\Edson\SolidPhp\Tags\\' . ucfirst($name);

        return \call_user_func_array([new $class, 'render'], $arguments);
    }


}