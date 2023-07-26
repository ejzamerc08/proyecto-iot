<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sensor extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    public $incrementing = false;
    public $timestamps = false;
    

    public function tipo()
    {
        return $this->belongsTo(Tipo::class, 'tipos_id', 'id'); 
    }

    public function estacion()
    {
        return $this->belongsTo(Estacion::class, 'estacions_id', 'id'); 
    }
}
