<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    public $timestamps = false;
    protected $fillable = ['empleado_id','cliente_id', 'total'];
    use HasFactory;

    public function empleado()
    {
        return $this->belongsTo(User::class, 'empleado_id');
    }
    // Retorna la instancia del usuario del cliente que participo en una venta en especifico 1:1
    public function cliente()
    {
        return $this->belongsTo(User::class, 'cliente_id');
    }
    // ¿?
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
    // Retorna los registros de la tabla pivote Producto-Venta cuyo id de venta coincida 1:N
    public function productos()
    {
        return $this->hasMany(Productoventa::class,'venta_id');
    }

}
