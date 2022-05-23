<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function airplane()
    {
        return $this->hasMany(Airplane::class, 'service_id');
    }
}
