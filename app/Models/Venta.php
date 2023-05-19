<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    protected $table='venta';
    protected $primarykey='id';
    protected $fillable=['id_producto','amount'];
    public $timestamps=false;

    public function producto(){
        return $this->hasOne(Producto::class,'id','id_producto');
    }
}