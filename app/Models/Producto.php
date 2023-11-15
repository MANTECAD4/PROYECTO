<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['name', 'descripcion', 'unidades', 'price', 'categoria_id', 'marca','image_path'];
    public function categoria()
    {
        return $this->belongsTo(Categoria::class)->withTrashed();
    }
    public function usuarios()
    {
        return $this->belongsToMany(User::class, 'producto_user', 'producto_id', 'user_id')->withTrashed();
    }
}

