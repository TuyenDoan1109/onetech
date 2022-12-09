<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    public function Products() {
        return $this->hasMany('App\Models\Product');
    }
}
