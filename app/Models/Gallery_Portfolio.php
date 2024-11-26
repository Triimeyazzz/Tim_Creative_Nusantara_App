<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery_Portfolio extends Model
{
    protected $table = "gallery_portfolio";
    protected $guarded = ['id'];

    public function portfolio() {
        return $this->belongsTo(Portfolio::class);
    }
}
