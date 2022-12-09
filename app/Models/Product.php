<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function Subcategory() {
        return $this->belongsTo('App\Models\Subcategory');
    }

    public function Brand() {
        return $this->belongsTo('App\Models\Brand');
    }

    public function Category() {
        return $this->belongsTo('App\Models\Category');
    }
}
