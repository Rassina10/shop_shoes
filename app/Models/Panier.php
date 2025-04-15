<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Panier extends Model
{
    use HasFactory;
    protected $table = 'paniers';
    protected $primaryKeys = 'id';
    protected $fillable = ['etat', 'article_id', 'user_id', 'quantite', 'montant'];
    

    public function article():BelongsTo{
        return $this->belongsTo(Article::class);
    }
}
    
