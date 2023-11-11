<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Empleado extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['user_id', 'genero', 'fecha_nac', 'telefono', 'direccion', 'sueldo'];
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }
    // Trae los registros de la tabla de ventas cuyo campo de identificador de empleado coincide con el de usuario del empleado
    public function ventas()
    {
        return $this->hasMany(Venta::class,'empleado_id', 'user_id');
    }

    
}
