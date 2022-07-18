<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $guarded =[];

    public function doctor()
    {
        return $this->belongsTo(User::class);
    }
     public function user()
    {
        return $this->belongsTo(User::class);
    }
}
