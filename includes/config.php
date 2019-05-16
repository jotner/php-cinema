<?php
$connection = dbConnect();

function dbConnect()
{
    $connection = mysqli_connect("localhost", "root", "", "phplabb2")
        or die("Could not connect");
    mysqli_select_db($connection, "phplabb2") or die("Could not select database");
    return $connection;
}

function dbDisconnect($connection)
{
    mysqli_close($connection);
}
