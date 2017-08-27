<?php

/* START ---- DATA MANUPULATION AND DEBUGING FUNCTIONS */

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

/* END ---- DATA MANUPULATION AND DEBUGING FUNCTIONS */    

/* RETURN USER TYPE BASE ON DATABASE VALUE */

    function returnUserType($data)
    {
        if($data == 1) {
            return 'admin';
        } elseif($data == 2) {
            return 'accountant';
        } elseif($data == 3) {
            return 'fofficer';
        } elseif($data == 4) {
            return 'member';
        } else {
            return false;
        }
    }

/* ACTIVE MENUE BASE ON CURRENT MODULE NAME AND SET METHOD */    

    function activeMenu($data,$open='')
    {
        if(isset($_SESSION['menuOpen'])){
            if($data == $_SESSION['menuOpen']) {
                if(!empty($open)) {
                    if($_SESSION['menuActive'] == $open) {
                        return 'active';
                    } else {
                        return '';
                    }               
                } else {
                    return 'active open';
                }
            } else {
                return '';
            }
        }
    }

