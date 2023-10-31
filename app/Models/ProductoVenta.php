<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoVenta extends Model
{
    use HasFactory;
    protected $table = 'producto_venta';
    public $timestamps = false;
    protected $fillable = ['cantidad', 'subtotal', 'producto_id', 'venta_id'];

    public function producto()
    {
        return $this->belongsTo(Producto::class,'producto_id');
    }

}
