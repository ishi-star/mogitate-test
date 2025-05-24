<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Season;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'image', 'description']; // 必要に応じて修正

    // 🔽 seasonsとの多対多リレーション
    public function seasons()
    {
        return $this->belongsToMany(Season::class, 'product_season');
    }
}
