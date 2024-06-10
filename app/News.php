<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';

    protected $fillable = [
        'user_id',
        'name',
        'tag',
        'text_1',
        'text_2',
        'text_3',
        'text_4',
        'text_5',
        'text_6',
        'code_1',
        'code_2',
        'code_3',
        'code_4',
        'code_5',
        'image_1',
        'image_2',
        'image_3',
        'image_4',
        'image_5',
        'likes_count',
        'comments_count'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
