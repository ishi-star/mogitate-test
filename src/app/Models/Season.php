<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Season extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    // 🔽 productsとの多対多リレーション
    public function products()
    {
        return $this->belongsToMany(Product::class, 'product_season');
    }
}
