<?php
header('Access-Control-Allow-Origin: *');


define('DB_HOST','iqraa05yi.ddns.net');
define('DB_USER','PC2');
define('DB_PASSWORD','');
define('DB_NAME','basedesdonnees');

function connect()
{
    $connect = mysqli_connect(DB_HOST , DB_USER , DB_PASSWORD , DB_NAME);

    if(mysqli_connect_errno()){
        die("failed to connect" . mysqli_connect_error());
    }

    return $connect;
}

$con = connect();
?>

