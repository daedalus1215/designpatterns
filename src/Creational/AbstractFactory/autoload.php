<?php
spl_autoload_register(
    function($class) {
        static $classes = null;
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    false
);
