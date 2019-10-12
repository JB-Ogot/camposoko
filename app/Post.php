<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = true;

    protected $fillable = ['category','pnam','condtion','shortDesc','negotiable','price','timestamp','details','location','imageUrl1'];


    protected $casts = [
        'imageUrl1' => 'array'
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
