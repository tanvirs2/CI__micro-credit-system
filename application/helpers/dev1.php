<?php
$route['routeName'] = 'controller/method';

function pd($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

function pde($data)
{
    pd($data);
    exit();
}


?>