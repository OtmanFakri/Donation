<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddInviterIdToUsersTable extends Model
{
    use HasFactory;
    protected $fillable = [
        'inviter_id',
        'user_id'
    ];

    public function invitedUsers()
    {
        return $this->hasMany(User::class, 'inviter_id');
    }
}
