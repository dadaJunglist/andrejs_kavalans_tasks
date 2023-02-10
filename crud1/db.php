<?php
$servername = "db";
$username = "mysql";
$password = "mysql";
$dbname = "mysql";

$conn = new mysqli ($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
    die("connection failed:" .$conn->connect_error);
}

?>