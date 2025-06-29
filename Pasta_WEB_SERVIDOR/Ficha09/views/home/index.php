<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title><?php echo APP_NAME ?></title>
</head>
<body class="bg-light text-center">

<div class="container mt-5">
    <h1 class="mb-4"><?php echo APP_NAME ?></h1>
</div>
<h2 class="text-left top-space">Book Index</h2>
<h2 class="top-space"></h2>
<div class="row">
    <div class="col-sm-12">
        <table class="table table
striped"><thead><th><h3>Id</h3></th><th><h3>Name</h3></th><th><h3>ISBN</h3>
            </th><th><h3>User Actions</h3></th></thead>
            <tbody>
            <?php foreach ($books as $book) { ?>
                <tr>
                    <td><?=$book->id?></td>
                    <td><?=$book->name?></td>
                    <td><?=$book->isbn?></td>
                    <td><?= $book->genre->name ?></td>
                    <td>
                        <a href="index.php?c=book&a=show&id=<?=$book->id ?>"
                           class="btn btn-info" role="button">Show</a>
                        <a href="index.php?c=book&a=edit&id=<?=$book->id ?>"
                           class="btn btn-info" role="button">Edit</a>
                        <a href="index.php?c=book&a=delete&id=<?=$book->id ?>"
                           class="btn btn-warning" role="button">Delete</a>
                        <a href="index.php?c=chapter&a=index&id=<?=$book->id ?>" class="btn btn-info" role="button">Chapters</a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <div class="col-sm-6">
        <h3>Create a new Book</h3>
        <p>
            <a href="index.php?c=book&a=create" class="btn btn-info"
               role="button">New</a>
        </p>
    </div>
</div> <!-- /row -->
</body>
</html>
