<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    static function getByUserId($userId){
        return self::where('user_id', '=', $userId)
        ->first();;
    }
}
