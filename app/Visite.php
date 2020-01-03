<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visite extends Model
{
    public function patient()
    {
        return $this->belongsTo(User::class, 'patient_id');
    }

    public function medicin()
    {
        return $this->belongsTo(User::class, 'medicin_id');
    }

    public function maladie()
    {
        return $this->belongsTo(Maladie::class);
    }

    public function visitable()
    {
        return $this->morphTo();
    }
}
