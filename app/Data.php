<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $fillable = [
        'testName', 'testPoint', 'grade', 'attendance', 'file', 'student_id'
    ];
    
    public function profile()
    {
        return $this->belongsTo('App\Profile');
    }
}
