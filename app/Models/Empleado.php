<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'genero', 'fecha_nac', 'telefono', 'direccion', 'sueldo'];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    

}
