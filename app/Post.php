<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = true;

    protected $fillable = ['category','pname','condtion','shortDesc','negotiable','price','created_at','details','location','imageUrl1'];
    //
    public function user(){
        return $this->belongsTo('App\User');
    }
}
