<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Unit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    //
    protected $fillable = ['name', 'code','quantity', 'price','description', 'unit_id', 'category_id'];

    // permet de recuperer la category du produit
    // et de faire la relation entre les deux tables
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }


    // permet de recuperer l'unite  du produit
    // et de faire la relation entre les deux tables
    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class,'unit_id','id');
    }
}
