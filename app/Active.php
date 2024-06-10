<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Active extends Model
{
    protected $table = 'active';

    protected $fillable = [
        'user_id',
        'type',
        'news_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function news()
    {
        return $this->belongsTo(News::class, 'news_id', 'id');
    }
}
