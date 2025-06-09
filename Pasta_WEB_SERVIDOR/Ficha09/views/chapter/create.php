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
                <h2 class="text-center mb-4">Adicionar Chapter</h2>
                <form action="index.php?c=chapter&a=store" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" id="capterTitle" name="name" class="form-control" placeholder="Nome do Capitulo" required>
                        <label for="bookTitle">Name</label>
                        <input type="hidden" name="book_id" value="<?= $id ?>">
                    </div>
                    <button type="submit" class="btn btn-success w-100 py-2">Adicionar Chapter</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
