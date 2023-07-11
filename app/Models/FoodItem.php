<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodItem extends Item
{
    use HasFactory;
    protected $table = 'food_item';

    protected $fillable = [
        'item_id',
        'expiration_date',
    ];

    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
}
