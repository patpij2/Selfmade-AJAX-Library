<?php

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {

    header('Content-Type: application/json');
    echo json_encode($_GET);

} else {

    header('Content-Type: text/html; charset=utf-8');
    die('Dostęp zabroniony');

}

?>