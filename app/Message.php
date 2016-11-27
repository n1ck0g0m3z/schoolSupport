<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = [
        'title','content', 'category', 'img', 'thumbnail'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function message_reply()
    {
        return $this->hasMany('App/MessageReply');
    }
}
