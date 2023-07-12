<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = 'item';

    protected $fillable = [
        'name',
        'user_id',
        'description',
        'created_at',
        'address',
        'availabilities',
        'booked',
        'score_cost',
    ];

    public function Chat()
    {
        return $this->hasMany(Chat::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function itemImages()
    {
        return $this->hasMany(ItemImage::class, 'item_id');
    }

    public function foodItem()
    {
        return $this->hasOne(FoodItem::class, 'item_id');
    }

    public function objectItem()
    {
        return $this->hasOne(ObjectItem::class, 'item_id');
    }

}
