<?php
require_once 'Controller.php';
require_once 'models/Book.php';

class BookController extends Controller
{
    public function index() {
        $books = Book::all();
        $this->renderView('home', 'index', ['books' => $books]);
    }

    public function show($id)
    {
        $book = Book::find($id);
        if (is_null($book)) {
            header('Location: index.php?c=error&a=notFound');
        } else {
            $this->renderView('BD', 'show', ['book' => $book]);
        }
    }

    public function create()
    {
        $book = new Book();
        $this->renderView('BD', 'create');
    }

    public function store()
    {
        $book = new Book($this->getHTTPPost());
        if ($book->is_valid()) {
            $book->save();
            header('Location: index.php?c=book&a=index');
        } else {
            require_once 'views/BD/create.php';
        }
    }

    public function edit($id)
    {
        $book = Book::find($id);
        if (is_null($book)) {
            header('Location: index.php?c=error&a=notFound');
        } else {
            $this->renderView('BD', 'edit', ['book' => $book]);
        }
    }

    public function update($id)
    {
        $book = Book::find($id);
        $book->update_attributes($this->getHTTPPost());
        if ($book->is_valid()) {
            $book->save();
            header('Location: index.php?c=book&a=index');
        } else {
            header('Location: index.php?c=error&a=notFound');
        }
    }

    public function delete($id)
    {
        $book = Book::find($id);
        $book->delete();
        header('Location: index.php?c=book&a=index');
    }
}
