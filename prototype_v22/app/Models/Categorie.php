<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;
    protected $fillable = ['title','slug', 'image' ,'description', 'max_price' ,'min_price'];

public function getRouteKeyName()
{
    return 'slug';
}

    public function Materail()
    {
        return $this->hasMany(Materail::class);
    }
}
