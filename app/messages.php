<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class messages extends Model
{
    //
    // protected $table = 'messages';
    // public $timestamp = true;
    // protected $fillable
     protected $fillable = [
        'fname', 'lname','email','subject', 'message',
    ];
    
}
