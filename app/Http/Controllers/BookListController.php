<?php

namespace App\Http\Controllers;

use App\Book;
use App\Http\Controllers\Traits\APIResponser;
use Illuminate\Http\Request;

class BookListController extends Controller
{
    use APIResponser;

    public function index()
    {
        //all() is not good
        $books = Book::all();
        return $this->respondCollection("Success Book List", $books);
    }

    public function detail($bookID)
    {
        $book = Book::BookDetail($bookID)->with(['author','category','publisher'])->first();
        return $this->respondCollection("Success Book List", $book);
    }

    public function insertNewBook(Request $request)
    {
        $book = new Book();
        $book->author_id = $request->input('author_id');
        $book->publisher_id = $request->input('publisher_id');
        $book->category_id = $request->input('category_id');
        $book->title = $request->input('title');
        $book->ISBN = $request->input('ISBN');
        $book->price = $request->input('price');
        $book->save();
        return $this->respondSuccessMsgOnly("Add new book success");
    }
}
