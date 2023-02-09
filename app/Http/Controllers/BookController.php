<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookStoreRequest;
use App\Models\Book;

class BookController extends Controller
{
    public function store(BookStoreRequest $request)
    {
        Book::create($request->all());
    }

    public function update(BookStoreRequest $request, Book $book)
    {
        $book->update($request->all());
    }
}
