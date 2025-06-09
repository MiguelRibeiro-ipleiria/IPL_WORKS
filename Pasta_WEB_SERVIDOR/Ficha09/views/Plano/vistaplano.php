<?php use Carbon\Carbon; ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title><?php echo APP_NAME ?></title>
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="mb-4 text-center">Plano de Pagamentos</h1>

    <?php if (isset($planoprestacao)) : ?>
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
            <tr>
                <th>Prestação</th>
                <th>Data</th>
                <th>Valor da Prestação (€)</th>
                <th>Dívida Restante (€)</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($planoprestacao as $index => $dados) : ?>
                <tr>
                    <td><?= $index + 1 ?></td>
                    <td><?= $dados['data'] ?></td>
                    <td><?= $dados['prestacao'] ?></td>
                    <td><?= $dados['divida'] ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php else : ?>
        <div class="alert alert-warning text-center">Por favor, preencha o formulário.</div>
    <?php endif; ?>

    <div class="text-center mt-4">
        <a href="index.php?c=auth&a=logout" class="btn btn-outline-danger">Logout</a>
        <a href="index.php?c=home&a=index" class="btn btn-outline-success">Home</a>
    </div>
</div>

</body>
</html>
