<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // user一覧
    /*
        1. userデータ取得
        2. users.indexリダイレクト
     */
    public function index()
    {
        $data = [
            'users' => User::all()
        ];
        return view('users.index', $data);
    }
}
