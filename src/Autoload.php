<?php
/**
 * ROSystem Autoload
 */

namespace ROSystem;

function Autoload($class)
{    
    include_once (str_replace('\\', DIRECTORY_SEPARATOR, $class).'.php');
}

spl_autoload_register(__NAMESPACE__.'\Autoload');