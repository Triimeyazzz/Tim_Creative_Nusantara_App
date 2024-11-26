<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sosmed extends Model
{
    protected $table = "sosmed";

    protected $guarded = [
        'id'
    ];
    public function ourTeam(){
        return $this->belongsTo(OurTeam::class, 'our_team_id', 'id');
    }
}
