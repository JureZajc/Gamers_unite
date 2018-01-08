<?php
    session_start();
    
    /*if (!isset($_SESSION['ID_users']) &&
            ($_SERVER['REQUEST_URI'] != '/jure/login.php') &&
            ($_SERVER['REQUEST_URI'] != '/jure/add_user.php')) {
        //uporabnik ni prijavljen, zato sledi preusmeritev na prijavo
        
        header ("Location: login.php");
    }*/
    function notice_user($msg, $msg_type) {
        $_SESSION['msg'] = $msg;
        $_SESSION['msg_type'] = $msg_type;
    }

?>