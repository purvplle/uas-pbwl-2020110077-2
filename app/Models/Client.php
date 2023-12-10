<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Client extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['nama', 'email', 'password'];

    public function orders()
    {
        return $this->hasMany(OrderEvent::class);
    }

}
