<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    /**
     * 複数代入可能な属性
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'body',
        'user_id'
    ];

    /**
     * ブログ記事を所有しているユーザーを取得
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
