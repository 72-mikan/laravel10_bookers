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
        1. 投稿チェック
        2. book_data保存
        3. books.indexリダイレクト
    */
    public function store(Request $request)
    {
        $this->validate($request, Book::$rules);
        $book = new Book();
        $book->fill($request->except('_token'))->save();
        return redirect(route('books.index'))
            ->withInput()
            ->with('alert', '投稿を保存しました');
    }

    // book詳細データ表示
    /*
        bookデータを取得しshowViewへ渡す
    */
    public function show($id)
    {
        $data = [
            'book' => Book::findOrFail($id)
        ];
        return view('books.show', $data);
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

    // book編集処理
    /*
        1. bookデータを取得
        2. 投稿エラーチェック
        3. データ更新
        4. books.showリダイレクト 
    */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        // 投稿エラーチェック
        $this->validate($request, Book::$rules);
        $book->fill($request->except('_token', '_method'))->save();
        return redirect(route('books.show', ['book' => $book->id]));
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
