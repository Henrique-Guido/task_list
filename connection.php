<?php

$servername = "localhost";
$dbname = "task_list_db";
$username = "root";
$password = "root";

try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    //echo "Connection stablished";

} catch(PDOException $error) {

    echo $error->getMessage();
    
}