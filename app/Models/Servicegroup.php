<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicegroup extends Model
{
    use HasFactory;
    public function vacancy()
    {
        return $this->belongsTo('App\Vacancy');
    }
}
