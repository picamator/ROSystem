<?php
/**
 * ROSystem Autoload
 */

namespace ROSystem;

function Autoload($class)
{   
    $class = str_replace(__NAMESPACE__, '.', $class);
    
    include_once (str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php');
}

spl_autoload_register('ROSystem\Autoload');