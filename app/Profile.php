<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'first_name', 'first_kana',
        'last_name', 'last_kana', 
        'cls', 'img', 'teacher_name'
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');    
    }
    
    public function data()
    {
        return $this->hasMany('App\Data');
    }
}
