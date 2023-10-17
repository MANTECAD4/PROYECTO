<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion', 'unidades', 'precio', 'categoria_id', 'marca'];
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
