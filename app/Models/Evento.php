<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Evento extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = "eventos";
    protected $primaryKey = "id_evento";
    protected $keyType = 'string';
    public $incrementing = false;
    public $timestamps = false;
    public function entradas(){
        return $this->hasMany(Entrada::class);
    }
}
