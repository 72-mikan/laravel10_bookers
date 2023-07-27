<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// relationships
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use HasFactory;

    public function user(): BlongeTo
    {
        return $this->belongsTo(User::class);
    }

    // マスアサイメント
    protected $fillable = ['title', 'body'];

    // books validate
    /* 条件
        title : 空でない,文字列である,最大30文字
        body : 空でない,文字列である,最大100文字
    */
    public static $rules = [
        'title' => 'required|string|max:30',
        'body' => 'required|string|max:100'
    ];

    // 
}
