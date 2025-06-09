<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo APP_NAME ?></title>
</head>
<body class="bg-light d-flex justify-content-center align-items-center vh-100">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
            <div class="card shadow-lg border-0 rounded-4 p-4">
                <h2 class="text-center mb-4">Iniciar Sessão</h2>
                <form action="index.php?c=auth&a=login" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
                        <label for="username">Username</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" id="pass" name="pass" class="form-control" placeholder="Password" required>
                        <label for="pass">Password</label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-2">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script> <!-- Caminho local para JS, opcional -->
</body>
</html>