<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materail extends Model
{
    use HasFactory;
    protected $fillable = ['nom_materail','slug','description','price','image','inStock','categorie_id'];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    
        public function categorie()
        {
            return $this->belongsTo(Categorie::class);
        }
}
