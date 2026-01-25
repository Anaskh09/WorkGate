<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    public function offre()
    {
        return $this->belongsTo(Offre::class, 'offre_id');
    }
    public function candidat()
    {
        return $this->belongsTo(User::class, 'candidat_id');
    }
}
