<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Peserta extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['nama', 'email', 'password'];
    public function registrations()
    {
        return $this->hasMany(PendaftaranEvent::class);
    }

}
