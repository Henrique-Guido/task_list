<?php $msg = $_GET['msg'] ?? null; ?>
<?php if($msg === "sucesso"): ?>
    <div class="alert alert-success" role="alert">
    	<?= "Task criada com sucesso" ?>
    </div>
<?php elseif($msg === "deletado"): ?>
    <div class="alert alert-success" role="alert">
        <?= "Task deletada com sucesso" ?>
    </div>
<?php elseif($msg === "atualizado"): ?>
    <div class="alert alert-success" role="alert">
        <?= "Task atualizada com sucesso" ?>
    </div>
<?php elseif(empty($msg)): ?>
    <div class="alert alert-warning" role="alert">
        <?= "Descrição necessária" ?>
    </div>
<?php else: ?>
    <div class="alert alert-danger" role="alert">
        <?= "Houve um erro :(" ?>
    </div>
<?php endif ?>
<?php
require("connection.php");

include_once("form.html");

$sql = "SELECT * FROM tasks";
$stmt = $conn->prepare($sql);
$stmt->execute();
$res = $stmt->fetchAll(PDO::FETCH_ASSOC); 
?>

<ul class="">
<?php foreach($res as $description): ?>
  <li class=""><?= $description['description'] ?> <a href='delete.php?id=<?=$description['id']?> ' class="text-danger">Delete Task</a> | <a href="update.php?id=<?= $description['id'] ?>">Update Task</a></li>
<?php endforeach ?>
</ul>
