<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['user_id', 'genero', 'fecha_nac', 'telefono', 'direccion'];
    public $timestamps = false;
    public function user()
    {
        return $this->belongsTo(User::class)->withTrashed();
    }


}
