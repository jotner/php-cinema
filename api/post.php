<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json; charset=UTF-8");

require("../includes/config.php");
require("../includes/functions.php");

if(isset($_GET['postID']) && $_GET['postID'] > 0 ){
    $postData = getPostInfoAPI($connection,$_GET['postID']);
}else{
    echo "Inget giltligt ID";
}

$output = $postData;

echo json_encode($output);

dbDisconnect($connection);
?>
