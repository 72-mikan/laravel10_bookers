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
            'books' => Book::all()
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

    // bookデータ削除処理
    /*
        1. book_data検索・取得
        2. book_data削除
        3. books.indexリダイレクト
    */
    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect(route('books.index'));
    }
}
