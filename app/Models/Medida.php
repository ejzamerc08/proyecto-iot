<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medida extends Model
{
    use HasFactory;

    protected $table = 'medidas';
    protected $primaryKey = 'id';
    public $incrementing = false;

    public function sensor()
    {
        return $this->belongsTo(Sensor::class, 'sensores_id', 'id'); 
    }
}
