<?php 
require "connection.php";
header('Access-Control-Allow-Origin: *');


//check connection 
if(!$con){
    die("Connection failed :" . mysqli_connect_errno());
}

// Method 
$method = $_SERVER['REQUEST_METHOD'];


if($method =='GET'){
    //Query to stock to get servers
    $query = "SELECT * FROM serveurs";
    $servers = mysqli_query($con,$query);

    //TO json type
    $servers_json = [];

    while($row = mysqli_fetch_assoc($servers)){
        $servers_json[] = $row["name"];
    }

    $response = json_encode($servers_json);

    //Response 
    echo $response;
}
$con->close();
?>