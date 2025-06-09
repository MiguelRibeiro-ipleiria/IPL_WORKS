<?php

require_once 'Controller.php';
require_once 'BookController.php';
require_once 'models/Book.php';
require_once 'models/Chapter.php';

class ChapterController extends Controller
{
    public function index($id){
        $book = Book::find($id);
        $this->renderView('chapter', 'index', ['book' => $book]);
    }

    public function create($id)
    {
        $this->renderView('chapter', 'create', ['id' => $id]);
    }

    public function store()
    {
        $chapter = new Chapter($this-> getHTTPPost());
        if($chapter->is_valid()){
            $chapter->save();
            $this->redirectToRoute('chapter','index',['id'=>$chapter->book_id]);
        }
        else
        {
            $this->renderView('BD', 'error');
        }
    }
    public function show($id)
    {
        $chapter = Chapter::find($id);
        if (is_null($chapter)) {
            header('Location: index.php?c=error&a=notFound');
        } else {
            $this->renderView('chapter', 'show', ['chapter' => $chapter]);
        }
    }

    public function delete($id)
    {
        $chapter = Chapter::find($id);
        $chapter->delete();
        header('Location: index.php?c=book&a=index');
    }


    public function edit($id)
    {
        $chapter = Chapter::find($id);
        if (is_null($chapter)) {
            header('Location: index.php?c=error&a=notFound');
        } else {
            $this->renderView('chapter', 'edit', ['chapter' => $chapter]);
        }
    }
    public function update($id)
    {
        $chapter = Chapter::find($id);
        $chapter->update_attributes($this->getHTTPPost());
        if ($chapter->is_valid()) {
            $chapter->save();
            header('Location: index.php?c=book&a=index');
        } else {
            header('Location: index.php?c=error&a=notFound');
        }
    }

}
