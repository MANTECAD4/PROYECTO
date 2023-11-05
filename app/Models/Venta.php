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

    public function cliente()
    {
        return $this->belongsTo(User::class, 'cliente_id');
    }
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}
