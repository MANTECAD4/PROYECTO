<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    public $timestamps = false;
    protected $fillable = ['user_id', 'total'];
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
