<?php
    // Start Session
    session_start();

    //Config File
    require_once 'config.php';

    // System Helper File
    require_once 'helpers/system_helper.php';

    // Auto Loader
    function __autoload($class_name){
        require_once 'lib/'.$class_name.'.php';
    }
?>