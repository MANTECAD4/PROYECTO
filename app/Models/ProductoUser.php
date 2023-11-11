<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoUser extends Model
{
    use HasFactory;
    protected $table = 'producto_user';

    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }
    public function producto()
    {
        return $this->belongsTo(Producto::class)->withTrashed();
    }
}
