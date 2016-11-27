<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessageReply extends Model
{
    protected $fillable = [
        'content', 'img'
    ];
    
    public function message()
    {
        return $this->belongsTo('App\Message');    
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
