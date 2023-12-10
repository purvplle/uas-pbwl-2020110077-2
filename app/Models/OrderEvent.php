<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderEvent extends Model
{
    use HasFactory;

    protected $fillable = ['event_id', 'client_id'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

}
