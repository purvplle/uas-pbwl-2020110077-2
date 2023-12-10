<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['nama_event', 'deskripsi'];

    public function orders()
    {
        return $this->hasMany(OrderEvent::class);
    }

    public function registrations()
    {
        return $this->hasMany(PendaftaranEvent::class);
    }

}
