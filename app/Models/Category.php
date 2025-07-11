<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;
    //
    protected $fillable = ['name', 'note'];

   //permet de recuperer les produits qui ont cette category 
    public function produits(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
