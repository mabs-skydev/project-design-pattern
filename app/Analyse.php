<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Analyse extends Model
{
    public function visite()
    {
        return $this->morphOne(Visite::class, 'visitable');
    }
}
