<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    protected $table = 'entreprises';

    protected $fillable = [
        'nom_entreprise',
        'description_entreprise',
        'site_web',
        'adresse_entreprise',
        'telephone_entreprise',
    ];
    public function users()
    {
        return $this->hasMany(User::class, 'entreprise_id');
    }
    
}
