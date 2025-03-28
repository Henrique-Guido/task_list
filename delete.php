<?php

require("connection.php");

$id = $_GET['id'] ?? null;

if($id) {
    $sql = "DELETE FROM tasks WHERE id={$id}";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}

header("location: index.php?msg=deletado");