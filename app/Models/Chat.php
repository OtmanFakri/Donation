<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;
    protected $fillable = [
        'message',
        'user_id',
        'item_id',
    ];
    function user()
    {
        return $this->belongsTo(User::class);
    }
    function item()
    {
        return $this->belongsTo(Item::class);
    }
}
