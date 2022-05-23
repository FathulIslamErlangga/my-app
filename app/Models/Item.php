<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function airplane()
    {
        return $this->belongsTo(Airplane::class, 'airplane_id', 'id');
    }
}
