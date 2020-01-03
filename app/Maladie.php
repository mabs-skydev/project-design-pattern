<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maladie extends Model
{
    public function category()
    {
        return $this->belongsTo(Maladie::class);
    }
}
