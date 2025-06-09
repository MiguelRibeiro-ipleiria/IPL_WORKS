    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Livro - Chapter</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">

    <div class="container mt-5">
        <div class="mb-4">
            <h1 class="display-4"><?= $book->name ?></h1>
            <p class="lead">ISBN: <?= $book->isbn ?></p>
            <p class="text-muted">Gênero: <?= $book->genre->name ?></p>
        </div>

        <div class="card mb-5">
            <div class="card-header">
                <h3 class="mb-0">Capítulos</h3>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($book->chapters as $chapter) { ?>
                        <tr>
                            <td><?= $chapter->id ?></td>
                            <td><?= $chapter->name ?></td>
                            <td>
                                <a href="../Ficha09/index.php?c=chapter&a=show&id=<?= $chapter->id ?>" class="btn btn-sm btn-primary">Ver</a>
                                <a href="../Ficha09/index.php?c=chapter&a=edit&id=<?= $chapter->id ?>" class="btn btn-sm btn-secondary">Editar</a>
                                <a href="../Ficha09/index.php?c=chapter&a=delete&id=<?= $chapter->id ?>" class="btn btn-sm btn-danger">Apagar</a>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="text-end">
            <a href="../Ficha09/index.php?c=chapter&a=create&id=<?= $book->id ?>" class="btn btn-success">Criar Novo Capítulo</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
