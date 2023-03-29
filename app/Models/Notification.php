<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = [
        'type_notification',
        'date_notification',
        'objet',
        'user_id',

    ];

    public function User(){

         return $this->hasMany(User::class);
     }
}
