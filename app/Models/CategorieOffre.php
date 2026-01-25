<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategorieOffre extends Model
{
    protected $table = 'categorie_offres';

    protected $fillable = [
        'nom_categorie'
    ];
    public function offres()
    {
        return $this->hasMany(Offre::class, 'categorie_offre_id');
    }

}
