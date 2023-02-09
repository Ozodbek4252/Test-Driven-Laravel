<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookStoreRequest;
use App\Models\Book;

class BookController extends Controller
{
    public function store(BookStoreRequest $request)
    {
        $book = Book::create($request->all());

        return redirect($book->path());
    }

    public function update(BookStoreRequest $request, Book $book)
    {
        $book->update($request->all());

        return redirect($book->path());
    }

    public function destroy(Book $book)
    {
        $book->delete();
    }
}
