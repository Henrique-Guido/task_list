<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Atualize a task</h1>
        <form action="update.php" method="get">
            <div class="mb3">
                <input type="text" name="updatetask" class="form-control" required>
                <input type="hidden" name="id" value="<?= $id ?>">
                <a href="index.php">Voltar</a>
                <button type="submit" class="btn btn-primary mt-3">Atualizar</button>
            </div>
        </form>
    </div>
</body>
</html>