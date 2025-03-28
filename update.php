<?php require("connection.php");

$id = $_GET['id'] ?? null;
$updateTask = $_GET['updatetask'] ?? null;

$sql = "UPDATE tasks SET description='{$updateTask}' WHERE id='{$id}'";
$stmt = $conn->prepare($sql);
$stmt->execute();

include("form-update.php");

if(isset($updateTask)) {
    header("location: index.php?msg=atualizado");
}


//echo "<a href='index.php?id={$updateTask}'>Voltar</a>";
?>