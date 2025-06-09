<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo APP_NAME ?></title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

<!-- Info do Livro -->
<div class="position-absolute top-0 start-0 m-3 text-muted small">
    <div><strong>Título:</strong> <?php echo $chapter->name ?></div>
    <div><strong>BOOK ID:</strong> <?php echo $chapter->book_id ?></div>
</div>

<!-- Formulário -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
            <div class="card border-0 shadow-sm rounded-4">
                <div class="card-body p-4">
                    <h2 class="card-title text-center text-success mb-4">Editar Livro</h2>
                    <form id="formEditarLivro" action="index.php?c=chapter&a=update&id=<?= $chapter->id ?>" method="post">
                        <div class="form-floating mb-3">
                            <input
                                type="text"
                                class="form-control"
                                id="inputNomeLivro"
                                name="name"
                                placeholder="Nome do Livro"
                                value="<?php echo htmlspecialchars($chapter->name) ?>"
                                required>
                            <label for="inputNomeLivro">Nome do Chapter</label>
                        </div>
                        <button type="submit" class="btn btn-success w-100 py-2" id="btnSalvarLivro">Guardar Alterações</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
