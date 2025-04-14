<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;
    protected $table = 'articles';
    protected $primaryKeys = 'id';
    protected $fillable = [
        'intitule',
        'prix_unitaire',
        'notes',
        'description',
        'taille',
        'largeur',
        'image_principale',
        'genre',
        'categorie_id',
        'marque_id'
    ];

    public function categorie():BelongsTo
    {
        return $this->belongsTo(Categorie::class);
    }

    public function marque():BelongsTo
    {
        return $this->belongsTo(Marque::class);
    }
}

