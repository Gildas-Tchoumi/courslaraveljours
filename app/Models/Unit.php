<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Unit extends Model
{
     use HasFactory;
    //
    protected $fillable = ['name', 'description'];

    //permet de recuperer les produits qui ont cette unite
     public function produits(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
