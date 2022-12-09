<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Entrada extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = "entradas";
    public $timestamps = false;
    protected $keyType = 'string';
    public $incrementing = false;
    protected $primaryKey = "numero_entrada";
    public function evento(){
        return $this->belongsTo(Evento::class);
    }
}
