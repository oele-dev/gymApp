<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'duration',
        'duration_type',
        'price',
    ];

    public function getTypeAttribute()
    {
        return $this->duration_type;
    }

    public function hours() {
        return $this->hasMany(Hours::class);
    }
}
