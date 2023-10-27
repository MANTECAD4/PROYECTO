<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ['nombre', 'descripcion','user_id'];

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
