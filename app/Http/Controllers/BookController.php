<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    // book一覧データ表示処理
    /*
        bookデータ,storeURLを取得しindexViewへ渡す
    */
    public function index()
    {
        $data = [
            'books' => Book::all(),
            'save_url' => route('books.store')
        ];
        return view('books.index', $data);
    }

    // bookデータ保存処理
    /*
        1. book_data保存
        2. books.indexリダイレクト
    */
    public function store(Request $request)
    {
        $book = new Book();
        $book->fill($request->except('_token'))->save();
        return redirect(route('books.index'));
    }

    // book編集データ表示処理
    /*
        bookデータを取得しeditViewへ渡す
    */
    public function edit($id)
    {
        $data = [
            'book' => Book::findOrFail($id)
        ];
        return view('books.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->fill($request->except('_token', '_method'))->save();
        return redirect(route('books.show', ['book' => $book->id]));
    }
}
