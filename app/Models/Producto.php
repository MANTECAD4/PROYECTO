<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'descripcion', 'unidades', 'price', 'categoria_id', 'marca','slug','image_path'];
    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
    /*public function empleados()
    {
        return $this->belongsToMany(Empleado::class);
    }*/
    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'producto_user', 'producto_id', 'user_id');
    }

}
