<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title><?php echo APP_NAME ?></title>
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4 text-center">Criar Plano de Pagamento</h2>
    <form action="index.php?c=plano&a=calcular" method="post" class="bg-white p-4 rounded shadow">
        <div class="mb-3">
            <label for="credito" class="form-label">Valor do Crédito (€):</label>
            <input type="number" name="credito" id="credito" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="numPrest" class="form-label">Número de Prestações:</label>
            <input type="number" name="prest" id="numPrest" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success w-100">Criar Plano</button>
    </form>
</div>

<script src="../../public/js/js/bootstrap.bundle.min.js"></script>
</body>
</html>
