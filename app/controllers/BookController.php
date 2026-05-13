<?php

class BookController extends Controller {
    public function index() {
        $bookModel = $this->loadModel('BookModel');
        $books = $bookModel->getAllBooks();
        $this->renderView('Book/Books', ['books' => $books]);
    }
}