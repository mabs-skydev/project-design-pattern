<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Traitement extends Model
{
    public function visite()
    {
        return $this->morphOne(Visite::class, 'visitable');
    }
}
