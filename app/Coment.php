<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coment extends Model
{
    protected $fillable = [
        'text', 'user_id', 'post_id'
    ];

    public function post() {
        return $this->belongsTo(Post::class);
    }
}
