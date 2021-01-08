<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    protected $table = 'games';
    use HasFactory;

    public function getRouteKeyName() {
        return 'date';
    }

    public function players(){
        return $this->ManyToMany(Players::class);
    }

    public function goals(){
        return $this->hasMany(Goals::class);
    }

    public function cards(){
        return $this->hasMany(Cards::class);
    }


}
