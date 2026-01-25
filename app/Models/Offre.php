<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    public function categorieOffre()
    {
        return $this->belongsTo(CategorieOffre::class, 'categorie_offre_id');       
    }
    public function recruteur()
    {
        return $this->belongsTo(User::class, 'recruteur_id');
    }
    
}
