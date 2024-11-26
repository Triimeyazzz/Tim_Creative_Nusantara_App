<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $table = "portfolio";

    protected $guarded = [
        'id'
    ];


    public function category() {
        return $this->belongsTo(Category::class);
        }

    public function galleries()  {
        return $this->hasMany(Gallery_Portfolio::class);
    }
}
