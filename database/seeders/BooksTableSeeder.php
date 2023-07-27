<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            'user_id' => 1,
            'title' => "PHPフレームワーク Laravel入門 第2版",
            'body' => "PHPフレームワークのロングセラー定番解説書が",
        ]);
        DB::table('books')->insert([
            'user_id' => 1,
            'title' => "PHPフレームワーク Laravel実践開発",
            'body' => "アプリケーション開発には、基本のMVC以外の機能実装が非常に重要になります。",
        ]);
        DB::table('books')->insert([
            'user_id' => 2,
            'title' => "プロフェッショナルWebプログラミング　Laravel",
            'body' => "PHPでWebアプリケーションを構築する際、第一候補として挙がるのがLaravelでしょう。",
        ]);
        DB::table('books')->insert([
            'user_id' => 3,
            'title' => "スラスラ読める PHPふりがなプログラミング ふりがなプログラミングシリーズ",
            'body' => "「プログラムの読み方をすべて載せる（ふりがなをふる）」
            という手法で究極のやさしさを目指した、
            まったく新しいPHP（ピーエイチピー）の入門書です。",
        ]);
        // DB::insert('INSERT INTO books(title, body)VALUSE("PHPフレームワーク Laravel入門 第2版", "PHPフレームワークのロングセラー定番解説書が")');
        // DB::insert('INSERT INTO books(title, body)VALUSE("PHPフレームワーク Laravel実践開発", "アプリケーション開発には、基本のMVC以外の機能実装が非常に重要になります。")');
        // DB::insert('INSERT INTO books(title, body)VALUSE("プロフェッショナルWebプログラミング　Laravel", "PHPでWebアプリケーションを構築する際、第一候補として挙がるのがLaravelでしょう。")');
        // DB::insert('INSERT INTO books(title, body)VALUSE("スラスラ読める PHPふりがなプログラミング ふりがなプログラミングシリーズ", "「プログラムの読み方をすべて載せる（ふりがなをふる）」
        // という手法で究極のやさしさを目指した、
        // まったく新しいPHP（ピーエイチピー）の入門書です。")');
    }
}
