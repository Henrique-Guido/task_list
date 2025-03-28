<?php

require("connection.php");

$description = $_POST['description'] ?? null;

include_once("form.html");

if($description != null || "") {

    try {
        $sql = "INSERT INTO tasks (description) VALUES('{$description}')";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    } catch (PDOException $error) {
        echo $error;
    }    

    header("Location: index.php?msg=sucesso");

} else {

    header("Location: index.php?msg=");

}
