<?php

    function dbugd($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
        die();
    }

    function dbugc($data)
    {
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }    

    function dbugv($data)
    {
        echo '<pre>';
        var_dump($data);
        echo '</pre>';
        die();
    }

