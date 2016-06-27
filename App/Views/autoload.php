<?php
spl_autoload_register(function ($class_name) {
    $name = str_replace('App\\',  '../',$class_name);
    require_once $name . '.php';
});

            ?>