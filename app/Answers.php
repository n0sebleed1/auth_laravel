<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model
{
    protected $table = 'answers';

    protected $fillable = [
        'user_id',
        'comment_id',
        'news_id',
        'text'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    
}
