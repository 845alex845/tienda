<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        //return $this->belongsTo(Category::class);
        //tmb lo podemos hacer así
        return $this->belongsTo('App\Category');
    }
}
