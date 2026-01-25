<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function offres()
    {
        return $this->hasMany(Offre::class, 'recruteur_id');
    }

    public function candidatures(){
        return $this->hasMany(Candidature::class, 'candidat_id');
    }

    public function entreprise(){
        return $this->belongsTo(Entreprise::class, 'entreprise_id');
    }

}
