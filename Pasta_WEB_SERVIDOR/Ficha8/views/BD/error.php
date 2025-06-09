<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Erro 404 - Página não encontrada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        #error-section {
            height: 100vh;
            background-color: #f8f9fa;
        }

        #error-code {
            font-size: 120px;
            font-weight: 700;
            color: #dc3545;
        }

        #error-message {
            font-size: 24px;
        }

        #back-button {
            margin-top: 20px;
        }
    </style>
</head>
<body>
<section id="error-section" class="d-flex align-items-center justify-content-center text-center">
    <div class="container" id="error-container">
        <h1 id="error-code">404</h1>
        <h2 id="error-title" class="mb-3">Página não encontrada</h2>
        <p id="error-message" class="text-muted mb-4">A página que você procura não existe, foi movida ou está temporariamente indisponível.</p>
        <a href="/" id="back-button" class="btn btn-danger">Voltar para a página inicial</a>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
