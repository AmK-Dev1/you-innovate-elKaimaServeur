<?php


define('DB_HOST','localhost');
define('DB_USER','');
define('DB_PASSWORD','');
define('DB_NAME','');


function connect()
{
    $connect = mysqli_connect(DB_HOST , DB_USER , DB_PASSWORD , DB_NAME);

    if(mysqli_connect_errno($connect)){
        die("failed to connect" . mysqli_connect_error());
    }

    return $connect;
}

$con = connect();
?>

